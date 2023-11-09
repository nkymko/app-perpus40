@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/Books.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('base')
    @include('partials.nav')

    <!-- Container -->
    <div class="container mt-5 mb-5">
        <section class="catalog">

          <div class="row">
            <div class="col-md-12 shadow">
                <div class="card mb-3" style="width: 100%; border: none;">
                    {{-- <div class="card-header title">
                        <h1 class="fs-2 text-start">{{ $user->nama }}</h1>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <form action="{{ route('users.update', $user->uuid) }}" method="post" enctype="multipart/form-data">
                                <img src="{{ asset('storage/' . $user->profpic) }}" alt="profpic" class="w-100 mb-5">
                                <input type="file" name="profpic" id="">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-9">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                           <label class="form-label" for="validationDefault01">Nama</label>
                                           <input type="text" name="nama" class="form-control" id="validationDefault01" value="{{ $user->nama }}" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault01">Email</label>
                                            <input type="text" name="email" class="form-control" id="validationDefault01" value="{{ $user->email }}" disabled>
                                         </div>
                                         <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault01">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="validationDefault01" value="{{ $user->alamat }}">
                                         </div>
                                         <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault01">NIS/NIP</label>
                                            <input type="text" name="nomor_induk" class="form-control" id="validationDefault01" value="{{ $user->nomor_induk }}" required>
                                         </div>
                                         <div class="col-md-12 mb-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-orange">Edit</button>
                                         </div>
                                    </row>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="table">
                    <h5 class="text-center">Riwayat Peminjaman</h5>
                    <table id="riwayat" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode Peminjaman</th>
                                <th>Judul Buku</th>
                                <th>Kode Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tenggat</th>
                                <th>Status</th>
                                <th>Denda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->checkouts as $checkout)
                            <tr>
                                <td>{{ $checkout->kode }}</td>
                                <td>{{ $checkout->detail->book->judul }}</td>
                                <td>{{ $checkout->detail->serial_num }}</td>
                                <td>{{ $checkout->created_at }}</td>
                                <td>{{ $checkout->tenggat }}</td>
                                <td>{{ $checkout->status }}</td>
                                <td>-</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

@endsection

@section('script')
  <script src="{{ asset('js/app.js') }}"></script>    
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
    new DataTable('#riwayat');
  </script>
@endsection