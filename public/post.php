<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KamerMotion Art</title>
  <link rel="stylesheet" href="/css/post.css">
</head>

<header id="navbar">
  <div class="header-container">
    <!-- Logo intégré -->
    <div class="logo-container">
      <a class="navbar-brand" href="{{ route('posts.index') }}">KamerMotion Art</a>
      <!-- img class="logo-image" src="/img/logo.png" -->
    </div>
    <!-- Navigation -->
    <nav>
      <div class="hamburger" onclick="toggleNav()">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <ul class="nav-list">
        <li><a href="/index.php" class="nav-link">Accueil</a></li>
        <li><a href="/post.php" class="nav-link">Articles</a></li>
        <li><a href="#" class="nav-link">Postes</a></li>
        <li><a href="#" class="nav-link">Ajouter un poste</a></li>
        <li><a href="#" class="nav-link">Se connecter</a></li>
      </ul>
    </nav>
  </div>
</header>

<body>
  <section  class="main">
    <div class="container">
      <div class="title">
        <h1>Articles</h1>
      </div>

      <!-- Affichage des articles -->
      <div class="card">
        <div class="post-head">
          <img src="/img/image.jpg" class="post-image">
          <h2 class="post-title">Un regard novateur sur la culture camerounaise</h2>
        </div>
        <p class="post-content">
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays, le peuple camerounais ne doit plus être décrit selon les clichés misérabilistes que l'Occident lui attribue, mais selon les réalités du Cameroun d'aujourd'hui : un Cameroun fort et indépendant, une Afrique en miniature dont la diversité fait la force, patrie de l'homme le plus fort du monde et un continent qui accueille et abrite des peuples et cultures de toutes origines.</p>
        <div class="card-footer">
          <span class="text-muted">Publié le 25/03/2025</span>
        </div>
      </div>
    </div>
  </section>

<script src="/js/main.js"></script>

</body>

<footer>
  <div  class="footer">
      <div class="items">
        <h2>Liens Rapides</h2>
        <ul type="circle">
          <li><a href="">A propos de nous</a></li>
          <li><a href="">Postes</a></li>
          <li><a href="">Ajouter un poste</a></li>
          <li><a href="">Se connecter</a></li>
        </ul>
      </div>
      <div class="items">
          <h2>Contacts</h2>
          <div class="icon">
              <img src="ico/ico (4).png"> xxxxxxxxxxxxxxxxxxxxxxxxxx
          </div>
          <div class="icon">
              <img src="ico/ico (6).png"> +237 xxx xxx xxx, +237 xxx xxx xxx
          </div>
          <div class="icon">
              <img src="ico/ico (5).png"> kamermotion-art@gmail.com
          </div>
          <div class="network">
              <a href="https://www.facebook.com/share/18UEPiARXo/" target="blank"><img src="ico/ico (1).png"></a>
              <a href=""><img src="ico/ico (2).png"></a>
              <a href=""><img src="ico/ico (3).png"></a>
          </div>
      </div>
    </div>
  </div>  
  <div class="subfooter">
    <span class="text-light">KamerMotion Art © 2025</span>
  </div>
</footer>

</html>