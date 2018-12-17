<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Product;

class Category extends Model
{ 
    use Searchable;
    protected $table = 'category';
    public $timestamps = false;

    public function product(){
    	return $this->hasMany('App\Product', 'categoryId', 'categoryId');
    }

    public static function createCategory(){
    	$category = new Category();
    	$category->name = 'Dresses';
    	$category->group = 'Dress';
    	$category->save();
    	$category0 = new Category();
    	$category0->name = 'Party Dresses';
    	$category0->group = 'Dress';
    	$category0->save();
    	$category1 = new Category();
    	$category1->name = 'Tops';
    	$category1->group = 'Common';
    	$category1->save();
    	$category2 = new Category();
    	$category2->name = 'Swimwear';
    	$category2->group = 'Beach';
    	$category2->save();
    	$category3 = new Category();
    	$category3->name = 'Beachwear';
    	$category3->group = 'Beach';
    	$category3->save();
    	$category5 = new Category();
    	$category5->name = 'Skirts';
    	$category5->group = 'Common';
    	$category5->save();
    	$category6 = new Category();
    	$category6->name = 'Shorts';
    	$category6->group = 'Common';
    	$category6->save();
    }
    
}
