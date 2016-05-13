<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use HASH;

class login extends Controller
{
   public function check(Request $Request)
	{
		$user =new User();		
		//$post = $Request->all();
		//echo $post['Email']."<br>";
		 //echo $post['pwd'];
	
		$credentials = array('email' =>'sahil@gmail.com' , 'password' =>'ddd');
if (Auth::attempt($credentials)) 
		
		{
			echo "hii";
			
		}
		else
		{
				echo "error";
			
		}
	}
}
