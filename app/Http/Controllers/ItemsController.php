<?php namespace App\Http\Controllers;

use App\Items;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Carbon\Carbon;
//use Request;
use App\Http\Requests\ItemRequest;

class ItemsController extends Controller {

	public function index()
	{
		$items = Items::all();
		return view('items.index', compact('items'));
	}

	public function create()
	{
		return view('items.create');
	}

	public function store(ItemRequest $request)
	{
		$input = $request->all();
		$input['published_at'] = Carbon::now();

		Items::create($input);
		return redirect('items');
	}

	public function edit($id)
	{
		$item = Items::findOrFail($id);
		return view('items.edit', compact('item'));
	}

	public function update($id, ItemRequest $request)
	{
		$item = Items::findOrFail($id);
		$item->update($request->all());
		return redirect('items');
	}

}
