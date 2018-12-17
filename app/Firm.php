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

}
