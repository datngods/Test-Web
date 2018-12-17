<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Product;

class Firm extends Model
{
    
    use Searchable;
    protected $table = 'firm';
    public $timestamps = false;

    public function product(){
    	return $this->hasMany('App\Product', 'FirmId', 'firmId');
    }

    public static function createFirm(){
    	$firm = new Firm();
    	$firm->name = 'Under Armour';
    	$firm->information = 'The sports retailer made more than $3 billion';
    	$firm->save();
    	$firm1 = new Firm();
    	$firm1->name = 'American Eagle';
    	$firm1->information = 'The sports retailer made more than $3 billion';
    	$firm1->save();
    	$firm2 = new Firm();
    	$firm2->name = 'Tommy Hilfiger';
    	$firm2->information = 'The sports retailer made more than $3 billion';
    	$firm2->save();
    	$firm3 = new Firm();
    	$firm3->name = 'Coach';
    	$firm3->information = 'The sports retailer made more than $3 billion';
    	$firm3->save();
    	$firm5 = new Firm();
    	$firm5->name = 'Michael Kors';
    	$firm5->information = 'The sports retailer made more than $3 billion';
    	$firm5->save();
    }
}
