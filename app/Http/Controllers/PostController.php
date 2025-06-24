<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
{
    $this->middleware('auth')->except(['index', 'show']);
}

    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts', compact('posts'));
    }

    public function create()
    {
        return view('post-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->body = $validated['body'];
        $post->excerpt = $this->generateExcerpt($validated['body']);
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully !!!');
    }

    public function show(Post $post)
    {
        return view('post-view', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post-edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        $post->update([
            'title' => $validated['title'],
            'body'  => $validated['body'],
            'excerpt' => $this->generateExcerpt($validated['body']),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post aggiornato!');
    }



    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post eliminato con successo!'
        ]);
    }


    private function generateExcerpt(string $content, int $length = 150): string
    {
        $plainText = strip_tags($content);
        if (mb_strlen($plainText) <= $length) {
            return $plainText;
        }
        $excerpt = mb_substr($plainText, 0, $length);
        $lastSpace = mb_strrpos($excerpt, ' ');
        if ($lastSpace !== false) {
            $excerpt = mb_substr($excerpt, 0, $lastSpace);
        }
        return $excerpt . '...';
    }
}