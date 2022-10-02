<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blooming Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="./style.css">


    <!-- Json File -->
    <!-- <script type="text/javascript" src="./auth.json"></script> -->

    <!-- JavaScript -->
    <script src="./script.js" defer></script>
  </head>
  <body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">
    Blooming Buds Admin Panel
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" >Image management</a>
          </li> -->
      

          
            <button type="button" class="btn btn-secondary" onclick="logout_user()" id="logout_user_key">Logout</button>


        </ul>
      </div>
    </div>
  </nav>
  