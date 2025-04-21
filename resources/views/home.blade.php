<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Luandry Satset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/css/styleHome.css') }}" />
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laundry Citra Negara</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://kit.fontawesome.com/f1fd297175.css" crossorigin="anonymous">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" width="50" height="50" class="me-2">
                    <strong>Laundry Satset</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Cuci Cepat, Bersih, dan Wangi!</h1>
                        <p class="lead mt-3">Laundry profesional 24 jam yang siap menangani pakaian Anda dengan kualitas
                            terbaik dan harga terjangkau.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Search --}}
        <section class="search">
            <div class="container" style="margin-top: 3%">
                <div class="row">
                    <div class="col-md-7 search-div">
                        <span class="search-title" style="font-weight: bold; font-size: 20px; my-5">Cari Pesanan Anda
                            Gunakan No Handphone!</span>
                        <form class="d-flex" role="search" action="{{ route('search.noHp') }}" method="POST">
                            @csrf
                            <input class="form-control me-2" type="search" placeholder="Masukan Nomor Telepon"
                                aria-label="Search" name="noHp" />
                            <button class="btn btn-outline-success" type="submit" id="cariPesanan">
                                Search
                            </button>
                        </form>
                        @if (isset($datas))
                            <table class="table table-striped table-hover mt-5">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Handphone</th>
                                        <th>Cek Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>+62 {{ $data->noHp }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop{{ $data->id }}">
                                                    Check Detail
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/search-picture.png') }}" alt="" class="img-fluid" />
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <i class="fa-regular fa-clock mb-3"></i>
                        <h5>Buka 24 Jam</h5>
                        <p>Kami buka setiap hari tanpa libur, siap membantu kapan saja.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa-solid fa-tags mb-3"></i>
                        <h5>Harga Terjangkau</h5>
                        <p>Mulai dari Rp10.000 per kg dengan hasil bersih maksimal.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fa-solid fa-spray-can mb-3"></i>
                        <h5>Pewangi Pilihan</h5>
                        <p>Tersedia berbagai aroma pewangi sesuai selera Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial text-center">
            <div class="container">
                <h4 class="mb-4">Apa Kata Pelanggan Kami?</h4>
                <p>"Pelayanan cepat dan hasil cucian sangat wangi! Saya selalu kembali ke sini." <br><strong>- Agisna,
                        Depok</strong></p>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="cta-section text-center">
            <div class="container">
                <h2>Butuh Laundry Sekarang?</h2>
                <p class="lead mt-3">Langsung datang ke outlet kami atau cek pesanan Anda secara online.</p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center">
            <div class="container">
                <img src="{{ asset('assets/img/logo.png') }}" class="footer-logo mb-3">
                <p>Jl. Mars Jaya No.01, Cinere, Sanghai, London</p>
                <p class="text-muted">&copy; 2025 Laundry Satset - Agisna. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</body>

{{-- Modal --}}
@if (isset($datas))
    @foreach ($datas as $data)
        <div class="modal fade" id="staticBackdrop{{ $data->id }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Pesanan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nama Pemesan : {{ $data->nama }}</p>
                        <p>No Handphone : +62 {{ $data->noHp }}</p>
                        <p>Total Harga : Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</p>
                        <p>Tanggal Pemesanan : {{ $data->created_at->format('d-m-y') }}</p>
                        @if ($data->status == 'Selesai')
                            <p>Status : <span class="text-success">{{ $data->status }}</span></p>
                        @else
                            <p>Status : <span class="text-warning">{{ $data->status }}</span></p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    document.getElementById("cariPesanan").addEventListener("submit", function(event) {
        event.preventDefault();
    });
</script>
<script src="https://kit.fontawesome.com/f1fd297175.js" crossorigin="anonymous"></script>
</body>

</html>
