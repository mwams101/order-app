<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = ['customer_id', 'products'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity')->withTimestamps();
    }

}
