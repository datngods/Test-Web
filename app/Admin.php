<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public $timestamps = false;
    protected $table = "admin";
    protected $primaryKey = "adminId";

    public static function findAdminByInfor($email, $password){
    	$admin =  Admin::Where([['email', $email], ['password', $password]])->first();
    	return $admin;
    }

    public static function createAccount(){
    	$admin = new Admin();
    	$admin->userName = 'datngo.bk';
    	$admin->password = '123123';
    	$admin->email = 'datngo.bk@gmail.com';
    	$admin->address = 'Ha Noi';
    	$admin->phoneNumber = '0981192092';
    	$admin->linkFacebook = 'test';
    	$admin->linkInstagram = 'test';
    	$admin->linkTwitter = 'test';
    	$admin->save();
   	}
}
