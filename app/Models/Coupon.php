<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    // It returns all the attributes of the code
    public function findByCode($code){
        return self::where('code', $code)->first();
    }

    protected $fillable = [
        'code', 'amount',
    ];
}
