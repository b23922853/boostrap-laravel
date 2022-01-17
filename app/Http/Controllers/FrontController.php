<?php

namespace App\Http\Controllers;

use App\Article;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\WelcomeMail;

use function Ramsey\Uuid\v1;

class FrontController extends Controller
{
    public function index(){
        $article = Article::orderbydesc('id')->take(3)->get();
        $product = Product::get();

        return view('front.index',compact('product','article'));
    }

    public function shopping_01(){
        $shoppingcart = ShoppingCart::where('user_id', Auth::user()->id)->get();
        return view('front.cart-1',compact('shoppingcart'));
    }

    public function shopping_02(Request $request){


        //將使用者的購物車資料表清空
        ShoppingCart::where('user_id', Auth::user()->id)->delete();

        // 如何將資料傳去下一個頁面
        Session::put('step01',$request->all());

        $sum = 0;
        foreach ($request->total as $item){
            $sum = $sum + $item;
        }
        $merch = count($request->total);
        return view('front.cart-2', compact('sum','merch') );
    }
    public function shopping_03(Request $request){
        Session::put('step02',$request->all());

        return view('front.cart-3');
    }
    public function store(Request $request){

        //session取資料方法之一: 單純讀取出資料, 不清空
        $shop01 =  Session::get('step01');
        $shop02 =  Session::get('step02');
        
        $total = 0;
        foreach ($shop01['total'] as $key => $value) {
            $total = $total + $value;
        }

        if ($shop02['shipway'] == 1){
            $total = $total + 200;
            $shipfee = 200;
        }else{
            $total = $total + 60;
            $shipfee = 60;
        }

        $order = Order::create([
            'total_price' => $total,
            'shipping_fee' => $shipfee, 
            'user_id' => Auth::user()->id, 
            'address' => $request->address, 
            'phone' => $request->phone,  
            'ship_way' => $shop02['shipway'], 
            'status' => 1,
        ]);

        foreach ($shop01['total'] as $key => $value) {
            OrderDetail::create([
                'product_id' => $shop01['product_id'][$key],
                'qty' => $shop01['qty'][$key],
                'price' => $shop01['price'][$key],
                'order_id' => $order->id,
            ]);
        }
        //成功成立訂單後 將session清空
        Session::forget('step01');
        Session::forget('step02');
    
        return redirect('/orderlookup/'. $order->id);
    }

    public function shopping_04($id){
        $order = Order::find($id);
        return view('front.cart-4', compact('order'));
    }

    public function addtocart(Request $request){

        //先藉由ID去找商品, 然後將商品加入購物車(也就是在shopping_carts新增一筆資料)
        //由於前端頁面設計只有單純的加入購物車按鈕, 我們預設他的數量是1

        $product = Product::find($request->product_id);

        ShoppingCart::create([
            'product_id' => $product->id,
            'qty' => 1,
            'price' => $product->price,
            'user_id' => Auth::user()->id,
        ]);
        return "新增成功";
    }

    public function deletetocart(Request $request){

        ShoppingCart::find($request->shoppingcart_id)->delete();
        return "刪除成功";
    }


    public function trade($order_id){

        function create_mpg_aes_encrypt ($parameter = "" , $key = "", $iv = "") {
            $return_str = '';
            if (!empty($parameter)) {
                //將參數經過URL ENCODED QUERY STRING
                $return_str = http_build_query($parameter);
            }
            return trim(bin2hex(openssl_encrypt(addpadding($return_str), 'aes-256-cbc', $key, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv)));
        }
        function addpadding($string, $blocksize = 32) {
            $len = strlen($string);
            $pad = $blocksize - ($len % $blocksize);
            $string .= str_repeat(chr($pad), $pad);
            return $string;
        }

        
        $order = Order::find($order_id);
        $order->order_number = str_replace('-','',substr($order->created_at,0,10)).$order_id;

        $trade_info_arr = array(
            'MerchantID' => 'MS130026282',
            'RespondType' => 'JSON',
            'TimeStamp' => time(),
            'Version' => 2.0,
            'MerchantOrderNo' => $order->order_number,
            'Email' => $order->user->email,
            'LoginType' => 0,
            'Amt' => $order->total_price,
            'ItemDesc' => '模型'
            // 'ReturnURL' => 'https://www.mysite.com/moneyNotify'
        );
        $mer_key = '2G0wVn8vL6RF6fEViFY6bQruWZDcLLdM';
        $mer_iv = 'CNrfXojRJLQhlcaP';

        //交易資料經AES 加密後取得TradeInfo

        // 
        $TradeInfo = create_mpg_aes_encrypt($trade_info_arr, $mer_key, $mer_iv);

        $readyforsha = 'HashKey=2G0wVn8vL6RF6fEViFY6bQruWZDcLLdM&'.$TradeInfo.'&HashIV=CNrfXojRJLQhlcaP';

        $TradeSha = strtoupper(hash("sha256", $readyforsha));

        return view('front.money', compact('TradeInfo','TradeSha'));
    }


    public function moneyNotify(Request $request){

        //解密 處理金流傳回來得資訊
    }


    public function mail(){

        $id = [
            'name' => 'John',
            'phone' => '3345678'
        ];

        Mail::to('b23922853@yahoo.com.tw')->send(new WelcomeMail($id));
        dump('信件成功寄出');
    }
}
