<?php
function get_CURL($url)
{
  $curl= curl_init();
  curl_setopt($curl , CURLOPT_URL, $url);
  curl_setopt($curl , CURLOPT_RETURNTRANSFER, 1);
  $result=curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC-JvrF4twvx3R7BrBC8D8Bg&key=AIzaSyBPUdLNfbY29rvH7IKvLawBx2gSeehgUk4');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// latest video
$urlLatestVideo ='https://www.googleapis.com/youtube/v3/search?key=AIzaSyBPUdLNfbY29rvH7IKvLawBx2gSeehgUk4&channelId=UC-JvrF4twvx3R7BrBC8D8Bg&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result ['items']['0']['id']['videoId'];


//instagram API
$clientId = '17841456465695484';
$accessToken = 'IGAAPO1eBktv5BZAFBWb3pzVlBqWU1GMUdFZAnRMSTM5WnotVk11a2tFSDZANdk5jWFZAsX2ZAvVVRiN3NyWjk3MnpCQVFLYnJSN2s3TjVKblFBSVdSbzRIRFpOTTF0Mm5QWmFnQlUwWWgyOU4zQ0c1aHZAPSlVCanlSd2VPMkhVZAHpmZAwZDZD';
$result = get_CURL('https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAPO1eBktv5BZAFBWb3pzVlBqWU1GMUdFZAnRMSTM5WnotVk11a2tFSDZANdk5jWFZAsX2ZAvVVRiN3NyWjk3MnpCQVFLYnJSN2s3TjVKblFBSVdSbzRIRFpOTTF0Mm5QWmFnQlUwWWgyOU4zQ0c1aHZAPSlVCanlSd2VPMkhVZAHpmZAwZDZD?');

$usernameIG = $result['username'];
$profilePictureIG = $result['profile_picture_url'];
$followerIG = $result['followers_count'];

//latest IG Post
$resultGambar1 = get_CURL('https://graph.instagram.com/v22.0/18309627109237293?fields=media_url&access_token=IGAAPO1eBktv5BZAFBWb3pzVlBqWU1GMUdFZAnRMSTM5WnotVk11a2tFSDZANdk5jWFZAsX2ZAvVVRiN3NyWjk3MnpCQVFLYnJSN2s3TjVKblFBSVdSbzRIRFpOTTF0Mm5QWmFnQlUwWWgyOU4zQ0c1aHZAPSlVCanlSd2VPMkhVZAHpmZAwZDZD');
$gambar1 = $resultGambar1['media_url'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Siva Rahmatullah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profilesiva.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Siva Rahmatullah</h1>
          <h3 class="lead">Student | Book Enthusiast</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Hai, aku Siva Rahmatullah. Saat ini aku menempuh studi di jurusan Sistem Informasi. Buatku, teknologi itu bukan cuma soal alat atau sistem—tapi cara baru bercerita, menyelesaikan masalah, dan memberi dampak. Aku suka belajar hal-hal baru, eksplorasi ide, dan bikin sesuatu yang punya makna.</p>
          </div>
          <div class="col-md-5">
            <p>Di luar layar, aku jatuh cinta pada dunia buku. Dari cerita fiksi yang menenangkan sampai tulisan reflektif yang menggugah pikiran—semuanya punya tempat di rak dan di hati. Buku selalu jadi ruang tenangku, tempat berpikir tanpa suara, tapi penuh makna.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Youtube & IG -->
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
            <div class="col md-4">
              <img src="<?= $youtubeProfilePic?>" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName;?></h5> 
              <p><?= $subscriber;?> Subscriber.</p>
              <div class="g-ytsubscribe" data-channelid="UC-JvrF4twvx3R7BrBC8D8Bg" data-layout="default" data-count="default"></div>
            </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/<?= $latestVideoId?>?rel=0"
                allowfullscreen></iframe>
                </div>  
              </div>
            </div>
          </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col -md-4">
              <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $usernameIG; ?></h5> 
              <p><?=$followerIG; ?> Followers.</p>
            </div>
          </div>

          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="ig-thumbnail">
                  <img src="<?= $gambar1; ?>">
                </div>
          </div>
        </div>
      </div>
    </div>
 </section>




    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/creditfraud.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Data Mining • Python • Machine Learning
Membangun model klasifikasi untuk mendeteksi transaksi mencurigakan menggunakan dataset keuangan dan algoritma Random Forest.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/nvlharuki (2).png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Melankolia, Cinta, dan Pencarian Jati Diri
Sebuah novel coming-of-age yang emosional dan introspektif. Lewat kisah Toru Watanabe, saya belajar tentang kehilangan, pencarian makna, dan pentingnya memahami emosi manusia—nilai yang tak kalah penting dalam membangun teknologi yang empatik.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/preeklampsia.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Random Forest • SHAP & LIME • Data Kesehatan
Model prediktif berbasis machine learning untuk mendeteksi risiko preeklampsia pada ibu hamil, disertai interpretasi hasil model.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/sisfopdgtv.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">PHP • Bootstrap • MySQL
Aplikasi web HR untuk mengelola data karyawan dan penggajian, dengan fitur login role-based, cetak kartu, slip gaji, dan ekspor data.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/nvlhiromi.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kisah Sunyi yang Penuh Rasa
Novel yang hangat dan melankolis, tentang hubungan dua manusia yang tidak biasa. Mengajarkan pentingnya keheningan, perhatian kecil, dan bagaimana cerita sederhana bisa begitu dalam—refleksi yang juga penting dalam mendesain pengalaman pengguna.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/cms (2).png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Full-Stack • Portfolio Online
Situs pribadi yang menampilkan karya, blog, dan identitas digital. Dirancang dari nol dengan pendekatan clean, modern, dan naratif.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
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
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Komplek SCBD, Distric 8</li>
              <li class="list-group-item">Jakarta, Indonesia</li>
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
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Siva Rahmatullah &copy; 2025.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>