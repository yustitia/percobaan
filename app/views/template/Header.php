<html lang="en">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
       crossorigin="anonymous">

      <title>Selamat di halaman <?= $data['judul'] ?></title>

    </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="<?= BASEURL;?>">
      <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Navbar
    </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/phpmvc/public/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/phpmvc/public/about">About</a>
      </li>


    </ul>
  </div>

</nav>
