@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
@endsection

@section('base')
    @include('partials.nav')

    <main>
        <div class="container">
            <div class="row jumbotron-wrapper g-3">
                <div class="col-lg-6 d-flex align-items-center jumbotron">
                    <div class="text-hero">
                        <img src="{{ asset('img/circle.svg') }}" alt="circle" class="circle">
                        <h3 class="fw-semibold fs-1">Siswa Cerdas <span class="highlight">Membaca</span> Buku</h3>
                        <p class="fs-5">Akses kapan pun, di mana pun. Yuk baca buku!</p>
                        <div class="input-group mb-3 mt-5" style="height: 60px">
                            <span class="input-group-text" id="addon1"><i class="bi bi-search"></i></span>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Cari buku. . ." aria-describedby="addon1 addon2 addon3">
                            <select class="input-group-text form-select" name="genre" id="addon2" style="max-width: 10rem">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->slug }}">{{ $genre->nama }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text" id="addon3"">
                                <button class="btn btn-orange">Search</button>
                            </span>
                          </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center jumbotron">
                    <div class="hero-img">
                        <img src="{{ asset('img/hero-img.svg') }}" alt="hero-img">
                    </div>
                    <img src="{{ asset('img/circle.svg') }}" alt="circle-2" class="circle-2">
                </div>
            </div>
        </div>

        <section class="first-section mb-5">
            <div class="container">
                <div class="header">
                    <img src="{{ asset('img/circle.svg') }}" alt="circle-2" class="circle-3">
                    <p class="text-center fw-light">PESONA MEMBACA</p>
                    <h1 class="fw-bold text-center">“Kami Mendukung Minat Bacamu!” </h1>
                    <h4 class="text-center">Temukan Buku Terbaik Untukmu</h4>
                </div>
                <div class="menu mt-5">
                    <ul class="genre-list text-center">
                        <li id="menu-1" class="genre-active" onclick="showDisplay('display1', 'menu-1')"">Sejarah</li>
                        <li id="menu-2" onclick="showDisplay('display2', 'menu-2')">Fiksi</li>
                        <li id="menu-3" onclick="showDisplay('display3', 'menu-3')">Non Fiksi</li>
                        <li id="menu-4" onclick="showDisplay('display4', 'menu-4')">Sastra</li>
                        <li id="menu-5" onclick="showDisplay('display5', 'menu-5')">Humor</li>
                        <li id="menu-6" onclick="showDisplay('display6', 'menu-6')">Edukasi</li>
                    </ul>
                </div>

                <div id="display1" class="mt-5 p-5 display" style="display: block">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px;">SEJA<br>RAH</span> </h3>
                            <p class="fs-4 fw-light text-end">Menggali <span class="fw-medium">masa lalu</span> manusia, peristiwa penting, budaya, dan <span class="fw-medium">perubahan</span> yang telah terjadi dalam berbagai periode waktu.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/buku-sejarah.jpeg') }}" alt="buku-sejarah" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light">Tokoh-tokoh bersejarah, perang, <span class="fw-medium">revolusi</span>, dan perkembangan sosial</p>
                        </div>
                    </div>
                </div>

                <div id="display2" class="mt-5 p-5 display">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px">FIKSI</span></h3>
                            <p class="fs-4 fw-light text-end">petualangan, konflik, dan emosi <span class="fw-medium">karakter fiksi</span>.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/buku-fiksi.jpeg') }}" alt="buku-fiksi" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light"> novel, cerita pendek, dan drama diciptakan oleh <span class="fw-medium">imajinasi</span></p>
                        </div>
                    </div>
                </div>

                <div id="display3" class="mt-5 p-5 display">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px">NON <br> FIKSI</span></h3>
                            <p class="fs-4 fw-light text-end">karya tulis berdasarkan pada <span class="fw-medium">fakta</span>, informasi, dan penelitian.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/non-fiksi.jpg') }}" alt="buku-sejarah" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light"><span class="fw-medium">ilmu pengetahuan</span> hingga panduan praktis, memoar, dan biografi.</p>
                        </div>
                    </div>
                </div>

                <div id="display4" class="mt-5 p-5 display">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px">SASTRA</span></h3>
                            <p class="fs-4 fw-light text-end"> penggunaan bahasa dengan cara yang <span class="fw-medium">indah</span> dan kreatif</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/sastra.jpeg') }}" alt="buku-sejarah" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light">tema mendalam, karakter yang kompleks, dan gaya penulisan yang <span class="fw-medium">unik</span>.</p>
                        </div>
                    </div>
                </div>

                <div id="display5" class="mt-5 p-5 display">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px">HUMOR</span></h3>
                            <p class="fs-4 fw-light text-end"><span class="fw-medium">anekdot</span> lucu, cerita-cerita lucu, dan observasi <span class="fw-medium">jenaka</span> tentang kehidupan sehari-hari</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/humor.jpeg') }}" alt="buku-sejarah" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light">hiburan menggelitik humor dan <span class="fw-medium">satire</span> bjir.</p>
                        </div>
                    </div>
                </div>

                <div id="display6" class="mt-5 p-5 display">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="fw-medium mb-4 text-end text-title"><span style="font-size: 100px">EDUKASI</span></h3>
                            <p class="fs-4 fw-light text-end">sumber <span class="fw-medium">pengetahuan</span>, informasi berharga.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="book-img d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/edukasi.jpg') }}" alt="buku-sejarah" width="80%">
                                <span class="fw-bold text-light position-absolute btn btn-orange btn-img">Explore</span>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <p class="fs-4 fw-light">pembelajaran, <span class="fw-medium">pengembangan diri</span>, dan keterampilan praktis.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="help-section mt-5 mb-5" id="panduan">
            <div class="help-header">
                <p class="text-center fw-light">INFORMASi</p>
                <h2 class="text-center fw-bold">Panduan Peminjaman</h2>
            </div>
            <div class="help-content container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="wrapper w-50 shadow p-5">
                            <ol>
                                <li><p>Lakukan autentikasi dan isi data pribadi sebagai <strong class="fw-semibold">kredensial</strong></p></li>
                                <li><p>Pilih buku, dan pastikan stok buku tersedia</p></li>
                                <li>
                                    <p>Anda akan mendapatkan kode peminjaman <span class="badge text-bg-warning">PM-XXXX-XX</span> setelah menyetujui <span class="fw-semibold">Syarat dan Ketentuan</span></p>
                                </li>
                                <li><p>Datang ke Perpustakaan SMKN 40 Jakarta lalu berikan kode peminjaman kepada pustakawan</p></li>
                                <li><p>Lakukan pengembalian buku jika sudah selesai membaca <br><span class="text-danger">*</span>Note: Pengembalian yang melewati tenggat waktu akan dikenakan denda</p></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <h6 class="text-center text-light mt-3 mb-3">
                Copyright © nkymko. 2023
            </h6>
        </div>
    </footer>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/app.js') }}"></script>    

    <script>

        const labelAnimation = anime({
            targets: '.circle-2',
            easing: 'easeInOutCubic',
            autoplay: true,
            opacity: 0.3,
            loop: true,
            duration: 4000,
        })

    </script>
@endsection