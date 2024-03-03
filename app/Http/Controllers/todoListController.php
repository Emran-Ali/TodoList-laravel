<?php

namespace App\Http\Controllers;
use App\Models\listItem;
use Illuminate\Log;
use Illuminate\Http\Request;

class todoListController extends Controller
{
    public function index(){
        return view('welcome', ['listItems' => listItem::where('is_done' , 0)->get()]);

    }
    public function markDone($id){
//        dd($id);
        $listItem = listItem::find($id);
        $listItem->is_done = 1;
        $listItem->save();

        return redirect('/');

    }
    public function saveItem(Request $request)
    {
        $listItem = new listItem();
        $listItem->name = $request->listItem;
        $listItem->is_done = 0;
        $listItem->save();

        return redirect('/');
//        return view('welcome',['listItems' => listItem::all()]);
    }
}
