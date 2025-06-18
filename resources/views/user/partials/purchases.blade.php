<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                    <a class="nav-link" href="sale.html">Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="purchases.html">Purchases</a>
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


<!-- ISI CONTENT PAGE -->
    <div class="container mt-2 custom-container1">
        <div class="row">
            <div class="col-12">
                <p class="custom-font d-flex flex-column align-items-center justify-content-center text-center" style="text-shadow:2px 2px 4px rgba(0, 0, 0, 0.3);">My Orders</p>
            </div>
        </div>
             <div class="container">
                <div class="step-container mb-4">
                    <div class="step"><div class="step-circle active">✔</div><div>Not yet paid</div></div>
                    <div class="step"><div class="step-circle active">✔</div><div>Packed</div></div>
                    <div class="step"><div class="step-circle active">✔</div><div>Send it</div></div>
                    <div class="step"><div class="step-circle">4</div><div>Rate it</div></div>
                    <div class="step-line"></div>
                </div>

                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="purchase-card d-flex align-items-start">
                            <div class="product-img"></div>
                            <div>
                                <h6 class="mb-1">Wireless Headphones</h6>
                                <small>Qty: 1 | Rp 350.000</small><br>
                                <small>Order: #1023</small><br>
                                <small>Status: Not yet paid</small><br>
                                <button class="btn btn-sm btn-warning mt-2">Pay Now</button>
                            </div>
                        </div>
                    </div>

                <div class="col-md-3">
                    <div class="purchase-card d-flex align-items-start">
                        <div class="product-img"></div>
                            <div>
                                <h6 class="mb-1">Smart Watch</h6>
                                <small>Qty: 1 | Rp 650.000</small><br>
                                <small>Order: #1022</small><br>
                                <small>Status: Packed</small><br>
                                <button class="btn btn-sm btn-secondary mt-2">Track Package</button>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="purchase-card d-flex align-items-start">
                        <div class="product-img"></div>
                        <div>
                            <h6 class="mb-1">Bluetooth Speaker</h6>
                            <small>Qty: 1 | Rp 225.000</small><br>
                            <small>Order: #1021</small><br>
                            <small>Status: Sent</small><br>
                            <button class="btn btn-sm btn-primary mt-2">Track Shipment</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="purchase-card d-flex align-items-start">
                        <div class="product-img"></div>
                            <div>
                                <h6 class="mb-1">Sneakers</h6>
                                <small>Qty: 1 | Rp 490.000</small><br>
                                <small>Order: #1020</small><br>
                                <small>Status: Done</small><br>
                                <button class="btn btn-sm btn-success mt-2">Rate</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- footer -->
     <div class="container-fluid" style="background-color: #c9936b;">


<hr>
        <div class="row">
            <div class="col-12">
                <p class="d-flex flex-column align-items-center justify-content-center">abisakha alfath - Copyright © 2025</p>
            </div>
        </div>
    </div>

</body>
</html>
