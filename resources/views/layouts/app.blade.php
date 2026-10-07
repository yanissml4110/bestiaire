<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">;
  <title>@yield('bestiaire')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <header class="entete">
        <nav>
          <span class="logo">Le Bestiaire</span>;
          <a href ="/">acceuil</a>
          <a href ="/creatures">creatures</a>
          <a href ="creatures/create">ajouter</a>
        </nav>
  </header>
  <main>
    @yield('contenu')
  </main>
  <footer class="pied">
        BTS SIO SLAM - TP Laravel
    </footer>
</body>
</html>