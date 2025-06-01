<?php
function get_CURL($url){
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  return json_decode($result, true);
}

$channelId = 'UCv2qnxR956DvzW9-14kg3Kg';
$apiKey = 'AIzaSyC1CTTeutbsV_FEjzI6x7bi0xrmEQNGzAM';

$channelInfo = get_CURL("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=$channelId&key=$apiKey");

$youtubeProfilePic = $channelInfo['items'][0]['snippet']['thumbnails']['medium']['url'] ?? '';
$channelName = $channelInfo['items'][0]['snippet']['title'] ?? '';
$subscribers = $channelInfo['items'][0]['statistics']['subscriberCount'] ?? '0';

$latestVideoInfo = get_CURL("https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&maxResults=1&order=date&part=snippet");
$latestVideoId = $latestVideoInfo['items'][0]['id']['videoId'] ?? '';

//instagram

$clientID = "9857622017649389";
$accesToken="IGAAdzFjZAIURtBZAE12YVZArT1Q3aUVjRC1pblRoUUNjaXZAUZA3Q3ZAnZA4UDRhZAnMwNG9lY2JEVU1xNmlOSFQwTHh1ZAzJIR1VJbWNucFR4OVhpYzUtQkxqTFBweHNMcHMxOTNzQnRheU1UcVRjQU1pdFNpT3B3UU10aUFGVDVSMUpuMAZDZD";

$result= get_CURL("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAdzFjZAIURtBZAE12YVZArT1Q3aUVjRC1pblRoUUNjaXZAUZA3Q3ZAnZA4UDRhZAnMwNG9lY2JEVU1xNmlOSFQwTHh1ZAzJIR1VJbWNucFR4OVhpYzUtQkxqTFBweHNMcHMxOTNzQnRheU1UcVRjQU1pdFNpT3B3UU10aUFGVDVSMUpuMAZDZD
");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My Portfolio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Hafizhah Nurhisyan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profil3.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Hafizhah Nurhisyan</h1>
          <h3 class="lead">Student</h3>
        </div>
      </div>
    </div>

    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Saya adalah seorang mahasiswa yang memiliki semangat belajar tinggi, pribadi yang gigih, dan percaya bahwa tidak ada hal yang mustahil selama saya mau mencoba. Bagi saya, setiap proses adalah pengalaman berharga yang membentuk siapa saya hari ini.Saya senang mengeksplorasi hal baru, terbuka terhadap tantangan, dan memiliki fleksibilitas dalam bekerja baik secara individu maupun kolaboratif dalam tim. .</p>
          </div>
          <div class="col-md-5">
            <p>Selain studi, saya juga aktif membangun identitas digital melalui media sosial, termasuk YouTube, sebagai wadah untuk menyalurkan kreativitas dan komunikasi. Saya percaya bahwa teknologi dan konten visual adalah jembatan untuk terhubung dan menginspirasi lebih banyak orang.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- / YT & IG -->

    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscribers; ?> Subscribers.</p>
                <div class="g-ytsubscribe" data-channelid="<?= $channelId ?>" data-layout="default" data-theme="dark" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId ?>" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>         
        </div>
        </div>
  </div>
  </div>
  </div>
  </section>
  
  <!-- Project WPU-Hut -->
  <section class="projects bg-purple" id="projects">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Projects</h2>
        </div>
      </div>
      
      <div class="row justify-content-center">

    <div class="col-md-4 mb-4">
        <div class="card">
        <img src="img/thumbs/pizzaproject.png" class="card-img-top" alt="WPU-Hut">
        <div class="card-body">
            <h5 class="card-title">Pizza json</h5>
            <p class="card-text">Proyek ini merupakan aplikasi pemesanan pizza sederhana yang dibuat dengan menggunakan 
            <a href="http://localhost/hafizhah-nurhisyan/wpu-hut/latihan2.html" class="btn btn-primary" target="_blank">Project PIzza</a>
        </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card">
        <img src="img/thumbs/projectmovie.png" class="card-img-top" alt="WPU-movie">
        <div class="card-body">
            <h5 class="card-title">search movie<</h5>
            <p class="card-text">Proyek ini adalah aplikasi pencarian film sederhana yang terintegrasi dengan OMDb API menggunakan API key, memungkinkan.
            <a href="http://localhost/hafizhah-nurhisyan/wpu-movie/" class="btn btn-primary" target="_blank">Project Movie</a>
        </div>
        </div>
    </div>
  

    <section class="MyFavouritePet" id="MyFavouritePet">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>My Favourite Pet</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/favourit pet2.png" alt="Cutie cat">
              <div class="card-body">
                <p class="card-text">Cutie cat.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/favourit pet 1.png" alt="Cat">
              <div class="card-body">
                <p class="card-text">Cat</p>
              </div>
            </div>
          </div>
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/favourit pet.png" alt="Selfie cat">
              <div class="card-body">
                <p class="card-text">Selfie Cat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Feel free to reach out to me through this form.</p>
              </div>
            </div>
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Kab. Padang Pariaman</li>
              <li class="list-group-item">Sumatera Barat, Indonesia</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; <?= date('Y'); ?>.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
