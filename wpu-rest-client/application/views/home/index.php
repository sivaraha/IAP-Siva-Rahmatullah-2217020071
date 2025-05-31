    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>assets/img/profilesiva.jpg" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Siva Rahmatullah</h1>
          <h3 class="lead"> Student | Book Enthusiast </h3>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/sr.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Siva Rahmatullah</p>
                <p class="card-text">Lahir di Surian, 07 Juni 2004.</p>
                <p class="card-text">Mahasiswa Sistem Informasi yang tertarik dengan dunia teknologi dan data.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/book.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Pecinta Cerita & Estetika</p>
                <p class="card-text">Saya suka membaca novel, terutama karya fiksi Jepang seperti Strange Weather in Tokyo dan Norwegian Wood. Cerita-cerita itu mengajarkan saya tentang kesederhanaan, rasa, dan makna detail kecil.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/ms.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Data Enthusiast</p>
                <p class="card-text">Saya aktif mengeksplorasi dan mengembangkan model machine learning untuk menyelesaikan masalah nyata, seperti prediksi dan klasifikasi data. Bagi saya, machine learning terbaik adalah yang tidak hanya akurat, tapi juga mudah dipahami dan bisa dijelaskan dengan transparan.</p>
              </div>
            </div>
          </div>   
        </div>

          


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
              <li class="list-group-item">My Home</li>
              <li class="list-group-item">Surian</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
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
