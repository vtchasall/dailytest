<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku colspan dan rowspan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!--My CSS-->
    <style>
        section {
            min-height: 620px;
        }
    </style>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Natasya Indah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link disabled">Contact Us</a>
        <a class="nav-link" href="databook.php">databook</a>
      </div>
    </div>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
      <img src="IMG 1.jpg" width="300" class="rounded-circle">
    <h1 class="display-4">Natasya Indah</h1>
    <p class="lead">Welcome, this website contains data for books that have been inputted</p>
  </div>
</div>





    <div class="container" id="about">
    <div class="row pt-5 mb-4">
        <div class="col text-center">
            <h2>About</h2>

        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-5 text-center">
            <p> This website was created for a practical exam carried out to input book data and identify from the data what data is needed for a book to be released, which is where this website is implemented with phpmyadmin, visual studio code, and bootstrap, and we were asked to modify it as best as possible with the skills we have.
            </p>
        </div>
        <div class="col-md-5 text-center">
            <p>
            This website was created for a practical exam carried out to input book data and identify from the data what data is needed for a book to be released, which is where this website is implemented with phpmyadmin, visual studio code, and bootstrap, and we were asked to modify it as best as possible with the skills we have
            </p>

        </div>
    </div>
</div>


    </div>
</body>
</html>
<section id="contact us" class="contact us"> 
    <div class="container">
        <div class="row pt-5 mb-5">
            <div class="col mb-5 text-center">
                <h2>Contact Us</h2>
            </div>
        </div>

<div class="row justify-content-center">
    <div class="col-lg-4 text-center">
        <div class="card text-white bg-dark text-center" style="max-width: 21Srem;">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">If you have any questions or mistakes, please contact us.</p>
            </div>
        </div>
    
     <ul class="list-group">
        <li class="list-group-item"><h1>Location</h1></li>
        <li class="list-group-item">SMK Negeri 2 Balikpapan</li>
        <li class="list-group-item">West Kalimantan, Indonesia.</li>
        <li class="list-group-item">Jl. Soekarno Hatta, Gn. Samarinda, Kec. Balikpapan Utara, Kota Balikpapan</li>
        <li class="list-group-item">XI RPL</li>
        </ul>
    </div>

    <div class="col-lg-6 justify-content-center mb-5">
     <form>
      <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email">
      </div>
      <div class="form-group">
    <label for="message">Message</label>
    <textarea type="text" class="form-control" id="email"></textarea>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
</section>


<footer class="bg-dark text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <p>Copyright 2022.</p>
            </div>
        </div>
    </div>

</footer>