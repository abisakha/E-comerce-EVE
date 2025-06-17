<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

   <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

  <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
          <img src="img/icon.png" width="120px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Sale</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Purchases</a>
                  </li>
              </ul>

              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- carousel sale page -->
    <div class="container-fluid py-5 custom-container-sale">
      <div class="row align-items-start">
        <!-- Title -->
        <div class="col-md-3 ps-5">
              <h2 class="section-title">Latest<br>Products<br>2019</h2>
              <p class="carousel-title">Find the latest products in 2019</p>
              <div class="carousel-nav mt-3">
                <button id="prev"><i class="fas fa-chevron-left"></i></button>
                <button id="next"><i class="fas fa-chevron-right"></i></button>
              </div>
        </div>

        <!-- Carousel -->
        <div class="col-md-9 pe-5">
          <div class="owl-carousel owl-theme">
            <!-- Item 1 -->
            <div class="product-card">
                <div class="product-image1">
                  <img src="https://via.placeholder.com/180x100" alt="MI LED" class="img-fluid">
                </div>
                <div class="text-muted small">LED TV</div>
                <div class="product-name">MI LED</div>
                <div class="product-price">₹33790</div>
            </div>

            <!-- Item 2 -->
            <div class="product-card">
              <div class="product-badge">new</div>
              <div class="product-image1">
                <img src="https://via.placeholder.com/100x160" alt="MI Mobile" class="img-fluid">
              </div>
              <div class="text-muted small">Mobile Phones</div>
              <div class="product-name">MI Mobile</div>
              <div class="product-price">₹13079</div>
            </div>

            <!-- Item 3 -->
            <div class="product-card">
              <div class="product-badge">new</div>
              <div class="product-image1">
                <img src="https://via.placeholder.com/90x160" alt="MI Powerbank" class="img-fluid">
              </div>
              <div class="text-muted small">Power Bank</div>
              <div class="product-name">MI Powerbank</div>
              <div class="product-price">₹2379</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
      $(document).ready(function(){
        var owl = $(".owl-carousel");
        owl.owlCarousel({
          items: 3,
          margin: 20,
          loop: true,
          dots: false
        });

        $("#next").click(function(){
          owl.trigger('next.owl.carousel');
        });

        $("#prev").click(function(){
          owl.trigger('prev.owl.carousel');
        });
      });
    </script>

    <!-- Kategory, searching bar, produk -->
    <div class="container mt-3">
      <div class="row">
               <div class="col-1 custom-mg" >
                    <button type="button" class="btn btn-outline-custom">Primary</button>
                </div>

                <div class="col-1 custom-mg">
                    <button type="button" class="btn btn-outline-custom">Primary</button>
                </div>

                <div class="col-1 custom-mg">
                    <button type="button" class="btn btn-outline-custom">Primary</button>
                </div>

                <div class="col-1 custom-mg">
                    <button type="button" class="btn btn-outline-custom">Primary</button>
                </div>

                <div class="col-7 me-auto mb-2 mb-lg-0" style="padding-left: 300px;">
                    <div class="search-wrapper">
                      <input type="text" class="form-control search-box" placeholder="Input The Product">
                      <i class="bi bi-search search-icon"></i>
                    </div>
               </div>
       </div>
    </div>

    <div class="container">
       <div class="row mt-4">
                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
       </div>

                <div class="row mt-4">
                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

                <div class="row mt-4">
                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
              </div>

                <div class="row mt-4">
                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <div class="card custom-card">
                        <img src="img/baju2.png" alt="Kemeja Curdoruy" class="product-image">
                            <div class="card-info">
                                <div class="text-info">
                                    <h3>Kemeje Curdoruy</h3>
                                    <p>Rp. 190.000,00</p>
                                </div>
                                <div class="cart-icon">
                                    <img src="img/logo Buy.png" alt="Keranjang Belanja">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
         </div>
    </div>

    <!-- footer -->
     <div class="container-fluid" style="background-color: #c9936b;">


<hr>
        <div class="row">
            <div class="col-12">
                <p class="d-flex flex-column align-items-center justify-content-center">abisakha alfath-Copy right-2025</p>
            </div>
        </div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4"></script>
</body>
</html>
