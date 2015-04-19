<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index($categorySlug)
    {
        $items = Item::fetchAllByCategory($categorySlug);

        return view('item.index')->with('items', $items);
    }

    public function show($slug)
    {
        $item = Item::fetchBySlug($slug);

        return view('item.show')->with('item', $item);
    }
}
