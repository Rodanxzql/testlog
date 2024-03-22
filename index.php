<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">


   
    <!-- JavaScript Bundle with Popper --
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>

           

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
</head>

    <div id="wrap-content" style="position: fixed;
    padding: left 100px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ĐNV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

{{!-- carousel --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./uploads/Sessions_Diana_Wallpaper_15_16x9.jpeg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="./uploads/wallpaper_2600010_16-9.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="./uploads/wallpaperflare.com_wallpaper (5).jpg" class="d-block w-100" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

{{!-- card --}}
<div class="card" style="width: 21.5rem; top: 200px;  left: 15px;">
  <img src="./uploads/364747426_320226677024532_8238909210243209265_n.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text">test</p>
  </div>
</div>

<div style="padding-top:100px">
<form action="upload.php" method="post" enctype="multipart/form-data" >
   


<button type="button" id="customButton">button1</button>
<input type="file" name="fileToUpload" id="fileToUpload" style="display:none;">


        <input type="submit" value="button2" name="submit"
          style="border-radius: 0px;">
    </form>

</div>
<style>
  nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
  /* Các thuộc tính khác để tùy chỉnh giao diện của thanh điều hướng */
}
#wrap-content{
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
}
#carouselExampleControls{
  width: 100%;
  top: 50px;
  position: fixed;
}
#customButton{
  padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    font-size: 16px;
    cursor: pointer;
    width: 100%
}
</style>

<script>
  document.getElementById('customButton').addEventListener('click', function() {
    document.getElementById('fileToUpload').click();
});

</script>