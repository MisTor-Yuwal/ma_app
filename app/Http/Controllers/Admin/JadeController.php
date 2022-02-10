<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Jade;
use Illuminate\Http\Request;

class JadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $jades = Jade::orderBy('views','desc')->get();
       return view('backend.jade.index', compact('jades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jades = Jade::all();
        $categories = Category::all();
        return view('backend.jade.create', compact('jades', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'max:5000'
        ]);
        $jade = new Jade();
        $jade->name = $request->name;
        $jade->address = $request->address;
        $jade->description = $request->description;
        $jade->category_id = $request->category_id;
        if($request->hasFile('photo'))
        {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('jade-photo', $newName);
            $jade->photo = "jade-photo/$newName";
        }
        $jade->save();
        toast('Recorded', 'success');
        return redirect('/jade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jades = Jade::find($id);
        $categories = Category::all();
        return view('backend.jade.edit', compact('jades','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'max:5000'
        ]);
        $jade = Jade::find($id);
        $jade->name = $request->name;
        $jade->address = $request->address;
        $jade->description = $request->description;
        $jade->category_id = $request->category_id;
        if($request->hasFile('photo'))
        {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('jade-photo', $newName);
            $jade->photo = "jade-photo/$newName";
        }
        $jade->update();
        toast('Updated', 'success');
        return redirect('/jade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
