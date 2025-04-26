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
        <li><a href="#" class="nav-link">Archives</a></li>
        <li><a href="/add_post.php" class="nav-link">Ajouter un poste</a></li>
        <li><a href="#" class="nav-link">Log in</a></li>
      </ul>
    </nav>
  </div>
</header>

<body>
  <section  class="main">
  <section class="recents">
        <div class="title">
          <h1>Tous nos articles</h1>
        </div>

        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><a href="/post.php">Un regard novateur sur la culture camerounaise</a></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><a href="/post.php">Un regard novateur sur la culture camerounaise</a></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><a href="/post.php">Un regard novateur sur la culture camerounaise</a></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><a href="/post.php">Un regard novateur sur la culture camerounaise</a></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><Link href="/post.php">Un regard novateur sur la culture camerounaise</Link></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
        <div class="books">
          <div>
            <img src="/img/image.jpg" alt="image" />
          </div>
          <div>
            <h3 class="titre"><Link href="/post.php">Un regard novateur sur la culture camerounaise</Link></h3>
            <p>
La culture camerounaise a évolué de différentes manières, grâce aux interactions entre ses différents peuples et à ses rapports avec l'étranger.
Avec la mondialisation et le développement politique, économique, culturel et intellectuel de notre pays.
            </p>
            <div class="achat">
              <a href="/article.php" class="add2"> Voir plus </a>
            </div>
          </div>
        </div>
      </section>
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