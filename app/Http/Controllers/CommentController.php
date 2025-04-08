Route::post('/posts', function (Request $request) {
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|nullable|max:1999',
    ]);

    $imagePath = $request->file('image')->store('images', 'public'); // Stocke l'image

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->image = $imagePath;
    $post->save();

    return redirect('/posts');
});