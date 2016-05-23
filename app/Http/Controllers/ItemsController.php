<?php namespace App\Http\Controllers;

use App\Items;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ItemsController extends Controller {

	public function index()
	{
		$items = Items::all();
		return view('items.index', compact('items'));
	}

}
