@extends('layouts.template')

@section('content')
<div style="width: 100%; height:100vh; background-color:blanchedalmond;display:flex;flex-direction:column;">
    <div class="m-auto">
        <h1 >交易進行中，請稍後....</h1>
        <h2 >跳轉至金流頁中，請勿關閉網頁</h2>
    </div>
    
</div>

<form name='Newebpay' id="tradeform" method='post' action='https://ccore.newebpay.com/MPG/mpg_gateway' hidden>
    MerchantID：<input type='text' name='MerchantID' value='MS130026282'><br>
    TradeInfo<input type='text' name='TradeInfo' value='{{$TradeInfo}}'><br>
    TradeSha<input type='text' name='TradeSha' value='{{$TradeSha}}'><br>
    Version<input type='text' name='Version' value='2.0'><br>

    <input type='submit' value='Submit'>
</form>
    


@endsection

@section('js')
    <script>
        document.querySelector('#tradeform').submit();
    </script>
@endsection