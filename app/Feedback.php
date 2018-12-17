<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    public $timestamps = false;
    protected $table = "feedback";
    protected $primaryKey = "id";
    
   	public static function getCommentAndStarOfUsers($id_user, $id_product){
        $comment_star = DB::table('feedback')->join('users', 'feedback.userId', '=', 'users.userId')->where('productId', '=', $id_product)->select(
            'users.userId',
            'users.userName',
            'feedback.comment',
            'feedback.date',
            'feedback.star'
        )
        ->get();
        return $comment_star;
    }

    public static function getFeedbacks(){
        $comment_star = DB::table('feedback')->join('users', 'feedback.userId', '=', 'users.userId')->join('product', 'product.productId', '=', 'feedback.productId')->select(
            'users.userId',
            'users.userName',
            'product.name',
            'feedback.comment',
            'feedback.date',
            'feedback.star'
        )
        ->get();
        return $comment_star;
    }

    public static function update_feedback_star($userId, $productId, $star, $time){
        $feedback = DB::table('feedback')->where([['productId', '=', $productId], ['userId', '=', $userId]])->first();
        if(!$feedback)
        {
            $feedback = new Feedback();
            DB::table('feedback')->insert(['productId'=>$productId, 'userId'=>$userId]);
        }
        DB::table('feedback')->where([['productId', '=', $productId], ['userId', '=', $userId]])->update(['star'=>$star, 'date'=>$time]);
    }

    public static function update_feedback_comment($userId, $productId, $comment, $time){
               $feedback = DB::table('feedback')->where([['productId', '=', $productId], ['userId', '=', $userId]])->first();
        if(!$feedback)
        {
            $feedback = new Feedback();
            DB::table('feedback')->insert(['productId'=>$productId, 'userId'=>$userId]);
        }
        DB::table('feedback')->where([['productId', '=', $productId], ['userId', '=', $userId]])->update(['comment'=>$comment, 'date'=>$time]);
        return $feedback->star;
    }
}
