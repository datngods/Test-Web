<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Product;
use App\User;

class BillDetail extends Model
{
    public $timestamps = false;
    protected $table = "billdetail";

    public static function createBillDetail($billId, $productId, $quantity){
    	$bill_detail = new BillDetail();
    	$bill_detail->billId = $billId;
        $bill_detail->productId = $productId;
        $bill_detail->quantity = $quantity;
        $bill_detail->save();
    }
}
