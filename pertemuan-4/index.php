<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Portal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body style="margin: 0">
    <header class="d-flex justify-content-start px-3 py-3 bg-warning">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="./index.php" class="nav-link active" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-black fw-bold">About</a>
        </li>
        <li class="nav-item">
          <a href="./kontak.php" class="nav-link text-black fw-bold">Contact</a>
        </li>
      </ul>
    </header>

    <main style="padding: 2%" class="bg-warning-subtle">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./res/audi.jpg" class="d-block hero" alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="./res/audi.jpg"
              class="d-block hero"
              alt="./res/audi.jpg"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./res/audi.jpg"
              class="d-block hero"
              alt="./res/audi.jpg"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h1>Berita Terkini</h1>
      <div class="news-container">
        <div class="left-news">
          <img src="./res/hellcat.jpg" alt="Menkominfo" class="thumbnail" />
        </div>
        <div class="right-news">
          <h1>Judul 1</h1>
          <?php
            echo "
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vel
                placeat inventore nam ad molestiae laborum accusantium enim officia,
                cum quae blanditiis? Similique doloremque aut soluta fugit!
                Voluptas, dolor totam.
              </p>
            "
          ?>
          <a href="/detail.html" class="btn btn-warning">Selengkapnya</a>
        </div>
      </div>
      <div class="news-container">
        <div class="left-news">
          <img src="./res/hellcat.jpg" alt="Menkominfo" class="thumbnail" />
        </div>
        <div class="right-news">
          <h1>Judul 2</h1>
          <?php
            echo "
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vel
            placeat inventore nam ad molestiae laborum accusantium enim officia,
            cum quae blanditiis? Similique doloremque aut soluta fugit!
            Voluptas, dolor totam.
          </p>
            "
          ?> 
          <a href="/detail.html" class="btn btn-warning">Selengkapnya</a>
        </div>
      </div>
    </main>

    <footer
      class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-warning"
    >
      <div class="col-md-4 d-flex align-items-center">
        <h3>Link Rekomendasi</h3>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a class="text-body-secondary" href="https://www.google.com"
            >GOOGLE</a
          >
        </li>
        <li class="ms-3">
          <a class="text-body-secondary" href="https://upj.ac.id">UPJ</a>
        </li>
      </ul>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
