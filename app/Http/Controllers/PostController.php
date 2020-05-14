<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('tags')) {
            $posts = Tag::where('name', request('tags'))->firstOrFail()->posts;
            $post_collection = Post::with('tags')->get();
            $tags = $post_collection->pluck('tags')->collapse()->pluck('name')->unique();
            return view('post.index', ['posts' => $posts], compact('tags'));
        }
        $posts = Post::latest()->get();
        $post_collection = Post::with('tags')->get();
        $tags = $post_collection->pluck('tags')->collapse()->pluck('name')->unique();

        return view('post.index', ['posts' => $posts], compact('tags'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post.create',['tags' => Tag::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatePost();
        $post = new Post(request(['title','body','excerpt','price','image']));
        $post->user_id = auth()->user()->id;

        if(request()->hasFile('image'))
        {
            $image = request()->image->store('images','public');
            $image = substr($image,7);
            request()->image->store('images','public');
        }
        $post->image = $image;

        $post->save();

        $post->tags()->attach(request('tags'));


        return redirect('/lunch-offers');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post_collection = Post::with('tags')->get();
        $all_tags = $post_collection->pluck('tags')->collapse()->pluck('name')->unique();
        return view('post.edit', ['post'=>$post],['tags' => Tag::all()],['all_tags'=>$all_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            'tags' => 'array|unique:post_tag,tag_id',
        ]);
        $post->title = $request->title;
        $post->price = $request->price;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->image = $post->image;


        $post->save();



        return redirect('lunch-offers/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        Post::find($post);
        $post->delete();
        return redirect('/lunch-offers');
    }
    public function custom(Post $post)
    {
        if (request('tags')) {
            $posts = Tag::where('name', request('tags'))->firstOrFail()->posts;
            $post_collection = Post::with('tags')->get();
            $tags = $post_collection->pluck('tags')->collapse()->pluck('name')->unique();
            return view('post.index', ['posts' => $posts], compact('tags'));
        }
        return view('post.index', ['posts' => $post], compact('tags'));
    }
    public function createTag(Post $post)
    {
        return view('post.tags', ['post'=>$post],['tags' => Tag::all()]);
    }
    public function storeTag($post, $tag)
    {
        $post= Post::where('id', $post)->firstOrFail();
        $post->tags()->attach($tag);
        $post->save();
        return redirect()->back();
    }

    public function removeTag(Post $post)
    {
        $post_collection = Post::with('tags')->get();
        $all_tags = $post_collection->pluck('tags')->collapse()->pluck('name')->unique();
        return view('post.tags', ['post'=>$post],['tags' => Tag::all()],['all_tags'=>$all_tags]);
    }
    public function destroyTag(Post $post)
    {
        Post::find($post);
        $post->tags()->detach(request('tags'));
        return redirect('lunch-offers/' . $post->id);
    }
    public function editImage(Post $post)
    {

        return view('post.edit-image', ['post'=>$post]);
    }
    public function updateImage(Request $request, Post $post)
    {
        $post->title =  $post->title;
        $post->price = $post->price;
        $post->excerpt = $post->excerpt;
        $post->body = $post->body;
        $request->validate([
            'image' => 'required',
        ]);
        if(request()->hasFile('image'))
        {

            $image = request()->image->store('images','public');
            $image= substr($image,7);
            $post->image = $image;
            request()->image->store('images','public');

        }
        $post->save();

        return redirect('lunch-offers/' . $post->id);
    }
    protected function validatePost(){
        return request()->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required',
        'price' => 'required',
        'image' => 'required',
        ]);
    }
}
