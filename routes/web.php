<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

Route::get('/posts', function () {
    return Post::with('comments')->get(); // Récupère les posts avec les commentaires
});

Route::post('/posts/{post}/comments', function (Request $request, Post $post) {
    $request->validate([
        'author' => 'required',
        'content' => 'required',
    ]);
    
    $comment = new Comment();
    $comment->author = $request->author;
    $comment->content = $request->content;
    $post->comments()->save($comment); // Sauvegarde le commentaire lié au post
    return redirect()->back();
});

Route::post('/posts/{post}/comments', function (Request $request, Post $post) {
    $request->validate(['author' => 'required', 'content' => 'required']);
    $comment = new Comment($request->all());
    $post->comments()->save($comment);
    return redirect('/');
});