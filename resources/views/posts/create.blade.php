<form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Titre" required>
    <textarea name="content" placeholder="Contenu" required></textarea>
    <input type="file" name="image">
    <button type="submit">Créer un post</button>
</form>