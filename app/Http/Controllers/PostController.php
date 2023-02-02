<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('post_index'), 403);

        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('post_create'), 403);

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $posts=new Post();
        $posts->title= $request->get('title');
        $posts->description= $request->get('description');
        $posts->price= $request->get('price');
        $posts->image= $request->get('image');

         if($image = $request->file('image')) {
             $rutaGuardarImg = 'image/';
             $imagenProducto = date('YmdHis'). "." . $image->getClientOriginalExtension();
             $image->move($rutaGuardarImg, $imagenProducto);
             $posts['image'] = "$imagenProducto";             
              }
     
             $posts->save();

        // $request->validate([
        //     'title' => 'required', 'description' => 'required', 'price' => 'required', 'image' => 'required|image|mimes:jpeg,png,svg|max:1024'
        // ]);

        //  $posts = $request->all();

        //  if($image = $request->file('image')) {
        //      $routeSaveImg = 'image/';
        //      $gameImage = date('YmdHis'). "." . $image->getClientOriginalExtension();
        //      $image->move($routeSaveImg, $gameImage);
        //      $posts['image'] = "$gameImage";             
        //  }
         
        // Post::create($posts);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        abort_if(Gate::denies('post_show'), 403);

        return view('posts.show', compact('post'));
    }

    public function detail($id){
        $posts = Post::find($id);
        return view('posts.detail')->with('post', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        abort_if(Gate::denies('post_edit'), 403);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required', 'description' => 'required', 'price' => 'required'
        ]);
         $pos = $request->all();
         if($image = $request->file('image')){
            $rutaGuardarImg = 'image/';
            $imagenProducto = date('YmdHis') . "." . $image->getClientOriginalExtension(); 
            $image->move($rutaGuardarImg, $imagenProducto);
            $pos['image'] = "$imagenProducto";
         }else{
            unset($prod['image']);
         }
        $post->update($pos);
        //$post->title= $request->get('title');
        $post->description= $request->get('description');
        $post->price= $request->get('price');

        $post->save();

        //$post->update($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        abort_if(Gate::denies('post_destroy'), 403);

        $post->delete();

        return redirect()->route('posts.index');
        return back()->with('succes', 'Post Deleted Sucessfully!');
    }


}
