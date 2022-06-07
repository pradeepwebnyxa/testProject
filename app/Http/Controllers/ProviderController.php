<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProviderController extends Controller
{
    public function index()
    {
    	$user = User::where('id',1)->first();
    	/*$user = User::all(); */

    	$userF = $user->fresh();

    	echo "<pre>";
    	print_r($user->toArray());
    	echo "<pre>";
    	print_r($userF->toArray());
    }
}
