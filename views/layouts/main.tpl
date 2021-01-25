<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quick and affordable student recipies - StudentEat</title>
  <link href="./node_modules/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">
  <link href="./node_modules/@glidejs/glide/dist/css/glide.theme.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://kit.fontawesome.com/0e3065f827.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,400&display=swap" rel="stylesheet">
</head>

<body id="page-{$view_name}">
  <header>
    <div class="page-header-top container text-center text-md-left" <a href="index.html"><img src="./images/logo.jpg"
        alt="StudentEat" /></a>
    </div>
    <nav class="navbar navbar-expand-lg mb-4">
      <div class="container">
        <!-- <a class="navbar-brand" href="index.php">StudentEat</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
          aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=categories">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=login">Login / register</a>
            </li>
          </ul>
          <form action="index.php?p=search" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    {block name="body"}
    
    {/block}
  </div>

  <footer class="container mt-4 text-center">
    <p>&copy;StudentEat - Created for educational purposes</p>
  </footer>
  <script src="./js/scripts-vendor.min.js"></script>
  <script src="./js/scripts.min.js"></script>
  <script>
    home.init();
  </script>
  <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="./js/indexPage.js"></script>
</body>
</html>