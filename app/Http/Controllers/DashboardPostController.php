<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'tittle' => 'BPost | Posts',
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'tittle' => 'BPost | Create',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            "tittle" => 'required|max:255',
            "slug" => 'required|unique:posts',
            "image" => 'image|file|max:1024',
            "category_id" => 'required',
            "body" => "required"
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('post-images');
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Post::create($validated);

        return redirect('/dashboard/posts')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'tittle' => 'BPost | Post Detail',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'tittle' => 'BPost | Edit Post',
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $formRules = [
            "tittle" => 'required|max:255',
            "category_id" => 'required',
            "body" => "required"
        ];

        if ($request->slug != $post->slug) {
            $formRules['slug'] = 'required|unique:posts';
        }

        $validated = $request->validate($formRules);

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 100);

        // validated delete prev image
        if ($request->file('image')) {
            if ($request->prevImage) {
                Storage::delete($request->prevImage);
            }
            $validated['image'] = $request->file('image')->store('post-images');
        }

        Post::where('id', $post->id)
            ->update($validated);

        return redirect('/dashboard/posts')->with('success', 'Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        // delete image from storage file
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post Has Been Deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->tittle);
        return response()->json(["slug" => $slug]);
    }
}
