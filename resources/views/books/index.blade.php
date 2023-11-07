@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/Books.css') }}">
@endsection

@section('base')
    @include('partials.nav')

    <!-- Container -->
    <div class="container mt-5 mb-5">
        <section class="catalog">
          <div class="title mb-lg-5 mt-3">
            <h4>Terbaik Terbaik</h4>
            <h1>KATALOG BUKU</h1>
            <p>Siswa cerdas membaca buku.</p>
            <p>Akses kapan pun, di mana pun. Yuk baca buku!</p>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="filter">
                <div class="card mb-3" style="width: 90%">
                  <div class="card-header">
                    <p class="card-title">Kategori</p>
                  </div>
                  <div class="card-body">
                    
                    @foreach ($genres as $genre)
                      <label class="container-filter">{{ $genre->nama }}
                        <input type="radio" name="radio" value="{{ $genre->slug }}">
                        <span class="checkmark"></span>
                      </label>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-9 buku">
              <div class="input-group mb-5" style="width: 100%">
                <input type="text" placeholder="search.." name="search" class="form-control form-control-lg" id="" >
                <span class="input-group-text" id="addon3"">
                  <button class="btn btn-orange" type="submit">Search</button>
              </span>
              </div>
              <div class="row row-cols-1 g-4 product">
                @forelse ($books as $book)
                  <div class="col-md-4 card-wrapper">
                    <div class="card h-100">
                        <img src="{{ asset('img/buku-fiksi.jpeg') }}" class="card-img-top" alt="product-2" />
                        <div class="card-body">
                          <h5 class="p-2">Laut Bercerita</h5>
                        </div>
                    </div>
                  </div>
                @empty
                    <div class="col-md-12">
                      <h4 class="text-center fw-light">Tidak ada data buku</h4>
                    </div>
                @endforelse
                <div class="col-md-12 d-flex justify-content-end">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
  
          <div class="divider d-flex gap-5">
            
  
            
          </div>
        </section>
      </div>

      <footer>
        <div class="container">
            <h6 class="text-center text-light mt-3 mb-3">
                Copyright © nkymko. 2023
            </h6>
        </div>
    </footer>
@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>    
@endsection