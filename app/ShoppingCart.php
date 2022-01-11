<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $product_id
 * @property int $qty
 * @property int $price
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class ShoppingCart extends Model
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
    protected $fillable = ['product_id', 'qty', 'price', 'user_id', 'created_at', 'updated_at'];

    public function user(){
        //belongsTo 是先填寫自己要關聯過去的欄位, 再寫對方的
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function product(){
        return $this->hasOne(Product::class, 'id','product_id');
    }


}
