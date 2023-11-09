@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/Books.css') }}">
@endsection

@section('base')
    @include('partials.nav')

    <!-- Container -->
    <div class="container mt-5 mb-5">
        <section class="catalog">

          <div class="row">
            <div class="col-md-4">
              <div class="filter">
                <div class="card shadow" style="width: 95%; border: none">
                  <div class="card-body">
                    <img src="{{ asset('storage/' . $book->cover) }}" alt="" class="w-100">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 shadow">
                <div class="card mb-3" style="width: 100%; border: none;">
                    <div class="card-header title p-3">
                        <h1 class="fs-2 text-start">{{ $book->judul }}</h1>
                    </div>
                    <div class="card-body">
                        <table class="mb-3">
                            <tbody>
                                <tr style="height: 40px">
                                    <th width="50%">Genre</th>
                                    <th width="5%">:</th>
                                    <td>{{ $book->genre->nama }}</td>
                                </tr>
                                <tr style="height: 40px">
                                    <th>Penulis</th>
                                    <th>:</th>
                                    <td>{{ $book->penulis }}</td>
                                </tr>
                                <tr style="height: 40px">
                                    <th>Penerbit</th>
                                    <th>:</th>
                                    <td>{{ $book->penerbit }}</td>
                                </tr>
                                <tr style="height: 40px">
                                    <th>Stok</th>
                                    <th>:</th>
                                    <td>{{ $book->detail->where('availibility', true)->count() }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mb-5">{{ $book->deskripsi }}</p>
                        <div class="button d-flex justify-content-end">
                                @guest
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-orange px-4 py-2">Pinjam</a>
                                @else
                                    @can('user')
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#agreementModal" class="btn btn-orange px-4 py-2" {{ $book->detail->where('availibility', true)->count() == 0 ? 'disabled' : '' }}>Pinjam</a>
                                    @endcan
                                @endguest
                        </div>
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

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <form method="POST" action="{{ route('login.verif') }}">
                    @csrf
                    <div class="row">
                       <div class="col-md-12 mb-3">
                          <label class="form-label" for="validationDefault01">Email</label>
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="validationDefault01" required>
                       </div>
                       <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationDefault01">Password</label>
                        <input type="password" name="password" class="form-control" id="validationDefault01" required>
                     </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationDefault01">Tidak punya akun? <a href="{{ route('register') }}">Daftar</a></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-orange">Sign In</button>
                </div>
              </form>
           </div>
        </div>
        </div>
     </div>

     <div class="modal fade" id="agreementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <form method="POST" action="{{ route('checkouts.store') }}">
                    @csrf
                    <div class="row">
                       <div class="col-md-12 mb-3">
                        <p>Dengan mengisi formulir ini:</p>
                        <ol>
                            <li>
                                Saya telah memahami dan akan mematuhi kebijakan layanan TIK sesuai peraturan dan perundang-undangan yang berlaku.
                            </li>
                            <li>
                                Saya tidak akan mengungkapkan informasi rahasia yang diberikan oleh SMKN 40 Jakarta, kecuali atas persetujuan tertulis dari pemilik informasi rahasia tersebut.
                            </li>
                            <li>
                                Apabila saya melakukan tindakan yang melanggar kebijakan atau peraturan yang berlaku, saya bertanggung jawab sepenuhnya dan bersedia untuk menanggung segala kerugian yang timbul atau konsekuensi lainnya.
                            </li>
                        </ol>
                        <input class="form-check-input" name="agreement" type="checkbox" value="yes" id="flexCheckDefault" required>
                        <input type="hidden" name="book_id" value="{{ $book->uuid }}">
                        <label class="form-check-label" for="flexCheckDefault">
                            Saya Setuju
                        </label>
                       </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-orange">Pinjam Buku</button>
                </div>
              </form>
           </div>
        </div>
        </div>
     </div>

@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>    
@endsection