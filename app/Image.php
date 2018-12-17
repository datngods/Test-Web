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

    public static function createImage(){
    	for ($i=1; $i <= 66; $i++) { 
    		for ($j=1; $j < 5; $j++) { 
    			$image = new Image();
    			$image->link = 'Dresses/' . $i . '_' . $j . '.jpg';
    			$image->productId = $i;
    			$image->save();
    		}
    	}
    }
}
