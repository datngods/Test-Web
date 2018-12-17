<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Product;
use App\User;

class Bill extends Model
{
    public $timestamps = false;
    protected $table = "bill";
    protected $primaryKey = "billId";

    public function billdetail(){
        return $this->hasMany("App\BillDetail", "billId", "billId");
    }

    public function user(){
        return $this->beLongsTo("App\User", "userId", "userId");
    }

    public static function getBills(){
        $bill_list = Bill::all();
    	return $bill_list;
    }

    public static function getBillsOfUser($id_user){
        $bills = DB::table('bill')->where('bill.userId', '=', $id_user)->select(
            'bill.billId',
            'bill.date',
            'bill.total',
            'bill.checked'
        )
        ->get();
        return $bills;
    }

    public static function getBillById($id){
        $bill_info = DB::table('bill')->join('billdetail', 'bill.billId', '=', 'billdetail.billId')->where('bill.billId', '=', $id)
        ->select(
            'bill.billId',
            'bill.date',
            'bill.userId',
            'billdetail.productId',
            'billdetail.quantity'
        )
        ->get();
 		$bill_infos = '';
        $num = 0;
        $billId = 0;
        $date = date('Y-m-d H:i:s');
        $userId = 0;
        $email = '';
        $user_name = '';
        foreach ($bill_info as $bill) {
        	$user_info =  DB::table('users')->select('userName', 'email')->where('userId', '=', $bill->userId)->first();
        	$product_info = DB::table('product')->select('name', 'price')->where('productId', '=', $bill->productId)->first();
        	$quantity = $bill->quantity;
            if(num == 0){
                $billId = $bill->billId;
                $date = $bill->date;
                $userId = $bill->userId;
                $email = $user_info->email;
                $user_name = $user_info->userName;
            }
        	$bill_infos .= $product_info->name. ';' .$quantity. ';' .$product_info->price.';';
            $num = $num + 1;
        }
        $bill_infos .= $user_name.';'.$userId.';'.$billId.';'.$date.';'.$email.';'.$num.';';
        return $bill_infos;

    }

    public static function createBill($date, $userId, $total, $checked){
        $bill = new Bill();
        $bill->date = $date;
        $bill->userId = $userId;
        $bill->total = $total * 0.01;
        $bill->checked = 'null';
        $bill->save();
    }

    public static function getBillsFromTo($from, $to){
        $bill_list = Bill::Where([['date', '<=', $to], ['date', '>=', $from]])->get();
        return $bill_list;
    }

    public static function getMaxID(){
        $max = DB::table('bill')->select(max('billId'));
        return $max;
    }
}

