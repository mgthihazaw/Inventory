<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location-m extends Model
{
    protected $fillable=[
    	'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function transfers(){
    	return $this->hasMany(Transfer::class);
    }
}
