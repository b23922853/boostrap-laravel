<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property int $price
 * @property int $qty
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'desc', 'price', 'qty', 'created_at', 'updated_at'];

    // 做一對多的關連到ProductImg (產品圖片)
    public function imgs()  //我要叫關聯的圖片出來的時候, 我要取甚麼名子 EX: $product->imgs
    {
        // hasmany的三個參數 (我要關聯的model, 關聯過去的欄位 , 自己表的欄位)
        return $this->hasMany('App\ProductImg','product_id','id');
    }

    public function shoppingcart(){
        return $this->hasMany(ShoppingCart::class,'product_id','id');
    }

    public function order_detail(){
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

}
