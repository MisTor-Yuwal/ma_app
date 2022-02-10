<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Jade;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
        {
            $categories = Category::all();
            $jades = Jade::orderBy('views','desc')->where('category_id','5')->get();
            return view('frontend.pages.home',compact('jades', 'categories'));
        }

    public function details($id)
        {
            // return "yuwal";
            $events = Event::all();
            $categories = Category::all();
            $jades = Jade::where('category_id', $id)->get();
            return view('frontend.pages.detail',compact('categories', 'jades', "events"));
        }

    public function show($id)
    {
        // return "milap";
        $categories = Category::all();
        $item = Jade::find($id);
        $similar = Jade::where('category_id',$item->category_id)->get();
        Jade::find($id)->increment('views');
        return view('frontend.pages.show',compact('categories','item','similar'));
    }
    public function momentous($id)
    {
        // return "yuwal";
       return view('frontend.pages.momentous');
    }
}
