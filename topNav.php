<!doctype html>
<html lang="en">
  <head>    
    <title>World Wide Importers</title>
    <link rel="shortcut icon" href="./images/coffieFav.png" type="image/x-icon">
    <link href="./css/bootstrap.min.css" rel="stylesheet">    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    <link href="./css/main.css" rel="stylesheet">
  </head>
  <body>
    
  <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <img src="./images/coffieFav.png" width="40" height="40" onclick="header('index.php')">
      <a class="navbar-brand" href="./index.php">World Wide Importers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navBar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./abonnementen.php">Abonnementen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact</a>
          </li>
        </ul>
        <form class="search-form" method="get">
          <input class="form-control" type="text" placeholder="Search"  name='searchProductsInput' id="searchProductsInput">
          <button class="search-button btn btn-outline-success" type="submit" name="submitSearch" value="submitSearch">Search</button>
        </form>
        <a class='login-btn' href='login.php'><img src="./images/login.png"></a>
        <a class='shopping-cart-btn' href='shopping-cart.php'><img src="./images/shopping-cart.png"></a>
        <div class="shopping-cart-btn-counter">1</div>
      </div>
    </div>
  </nav>


<?php 
if (isset($_GET['submitSearch'])) {
  echo $_GET['searchProductsInput'];
}