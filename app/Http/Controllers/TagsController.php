<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function index()
    {

        $tags = Tags::latest()->get();


        return view('tags.index', compact('tags'));
    }

    public function show(Tags $tag)
    {
        return view('tags.show', ['tag'=>$tag]);
    }
    public function create()
    {

        return view('tags.create');
    }

    public function store()
    {
        request()->validate([
            'name' =>'required|min:3|unique:tags,name'
        ]);

        $tag = New Tags();

        $tag->name = request('name');

        $tag->save();
        return redirect('/tags');
    }
    public function edit(Tags $tag)
    {

        return view('tags.edit', ['tag'=>$tag]);
    }
    public function update(Request $request, Tags $tag)
    {

        $tag->name = $request->name;


        $tag->save();



        return redirect(route('tags.show', $tag->id));
    }

    public function destroy(Tags $tag)
    {

        Tags::find($tag);
        $tag->delete();
        return redirect('/tags');
    }


}
