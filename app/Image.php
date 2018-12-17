<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
	protected $table = 'image';
	protected $primaryKey = 'imageId';
    public $timestamps = false;

    public function product(){
    	return $this->belongsTo('App\Product', 'productId', 'productId');
    }

}
