@extends('user.layouts.main')

@section('container')


<div class="container-fluid" style="background-image: url('img/backsepatu.jpeg'); ">
    <div class="container d-block" style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(7px); padding-top: 120px">
        <h2 class="display-3 text-center text-white" id="kontak">Kontak Kami</h2>
        <p class="text-center text-white">
            Hubungi kami untuk informasi lebih lanjut atau pesan produk baju terbaru!
        </p>

        <div class="container mt-5">
            <div class="text-center text-white pb-5 mb-5">
                <h2>Kontak kami sekarang untuk gaya baju terkini!</h2>
                <p>Lokasi Anda diluar Kota?</p>
                <p>Nggak jadi masalah! Semua bisa diatur...</p>
            </div>
        </div>

        <div class="d-flex pt-2 pb-3">
            <a class="btn btn-outline-light btn-social" target="_blank" href="http://wa.me/6281296063395"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://web.facebook.com/Saif Alfath"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.youtube.com/@abisakhasaif2931"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" target="_blank" href="https://www.instagram.com/saif_alfth/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>



    <!-- Informasi Kontak -->
    <div class="container-fluid pt-5 mt-4 pb-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-map-marker-alt"></i> Alamat: Jl. babelan No. 123, Kota Anda</li>
                        <li><i class="fa-solid fa-clock"></i> Jam Operasional: Senin-Jumat, 09:00 - 17:00</li>
                        <li><i class="fa-brands fa-whatsapp"></i> WhatsApp: +62 812 9606 3395</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-envelope"></i> Email: info@eve.com</li>
                        <li><i class="fa-brands fa-instagram"></i> Instagram: @eve_official</li>
                        <li><i class="fa-brands fa-facebook"></i> Facebook: /eve</li>
                        <li><i class="fa-brands fa-youtube"></i> Youtube: /eve</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Informasi Kontak -->


@endsection
