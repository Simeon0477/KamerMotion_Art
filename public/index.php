<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KamerMotion Art</title>
  <link rel="stylesheet" href="/css/style.css">
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

  <section class="main">
      <section class="banner">
        <p>
          <span class="slogan">Kamermotion Art</span> <br> Le murmure de la culture camerounaise dans la danse des formes et des couleurs
        </p>
      </section>

      <section class="recents">
          <div class="title">
            <h2>Auteurs populaires</h2>
            <button class="more">Voir Plus</button>
          </div>
          <div class="authors">
            <div class="auteurs">
              <div>
                <img src="/img/image.jpg" width="200" height="210" alt="image" />
              </div>
              <div>
                <p class="nom_auteur">Nom de l'auteur</p>
                <p>
                  qui consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugit facere vero ipsam recusandae quis quidem quo sint labore, cumque enim dolorum corporis iste officia rem doloribus veritatis non dolores?
                </p>
              </div>
            </div>
            <div class="auteurs">
              <div>
                <img src="/img/image.jpg" width="200" height="210" alt="image" />
              </div>
              <div>
                <p class="nom_auteur">Nom de l'auteur</p>
                <p>
                  qui consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugit facere vero ipsam recusandae quis quidem quo sint labore, cumque enim dolorum corporis iste officia rem doloribus veritatis non dolores?
                </p>
              </div>
            </div>
            <div class="auteurs">
              <div>
                <img src="/img/image.jpg" width="200" height="210" alt="image" />
              </div>
              <div>
                <p class="nom_auteur">Nom de l'auteur</p>
                <p>
                  qui consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugit facere vero ipsam recusandae quis quidem quo sint labore, cumque enim dolorum corporis iste officia rem doloribus veritatis non dolores?
                </p>
              </div>
            </div>
            <div class="auteurs">
              <div>
                <img src="/img/image.jpg" width="200" height="210" alt="image" />
              </div>
              <div>
                <p class="nom_auteur">Nom de l'auteur</p>
                <p>
                  qui consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id fugit facere vero ipsam recusandae quis quidem quo sint labore, cumque enim dolorum corporis iste officia rem doloribus veritatis non dolores?
                </p>
              </div>
            </div>
      </section>

      <section>
  
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