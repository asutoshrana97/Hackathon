<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\login;
use App\discussion_thread;
use App\discussion_replies;
session_start();
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request){
    	$post = $request->all();

    	$check_user = DB::table('login')->where('email',$post['username'])->get();

    	if(count($check_user)==1 && $check_user->first()->password==$post['password']){
    		$_SESSION['username'] = $post['username'];
    		$_SESSION['firstname'] = $check_user->first()->firstname;
    		$_SESSION['lastname'] = $check_user->first()->lastname;
    		//return redirect('/main');
    		return redirect('/forum');
    	}
    	else{
    		$error = 'Invalid Username or Password!';
    		return view('login',compact('error'));
    	}
    }

    public function add_topic(Request $request){
    	$post = $request->all();
    	$dis_thread = new discussion_thread;

		$dis_thread->username = $_SESSION['username'];
		$dis_thread->topic = $post['title'];
		$dis_thread->topic_description = $post['topic_desc'];
		$dis_thread->tags = $post['tags'];

		$dis_thread->save();
		
    	return redirect('/view_discuss');
    }

    public function add_comment(Request $request){
    	$post = $request->all();
    	$dis_rep = new discussion_replies;
    	$id = $post['id'];
    	$dis_rep->id = $post['id'];
    	$dis_rep->username = $_SESSION['username'];
    	$dis_rep->message = $post['msg'];

    	$dis_rep->save();

    	return redirect('/view_topic/'.$id);
    }

    public function view_discuss(){
    	$all = \DB::table('discussion_thread')->where('username',$_SESSION['username'])->get();

    	return view('view_discussions',compact('all'));
    }

    public function view_topic($id){
    	$res = \DB::table('discussion_thread')->find($id);
    	$rep = \DB::table('discussion_replies')->where('id',$id)->get();
    	return view('view_topic',compact('id','res','rep'));
    }
}
