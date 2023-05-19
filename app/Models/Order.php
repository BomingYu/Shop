<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'user',
        'phone',
        'address',
        'email',
        'total'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }
}
