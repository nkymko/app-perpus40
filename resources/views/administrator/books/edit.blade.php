@extends('layouts.dashboard')

@section('main-content')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Edit Data Buku</h4>
                </div>

             </div>
             <div class="card-body">
                    <form method="POST" action="{{ route('books.update', $book->uuid) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                           <div class="col-md-6 mb-3">
                              <label class="form-label" for="validationDefault01">Judul Buku</label>
                              <input type="text" value="{{ old('penulis', $book->judul) }}" name="judul" class="form-control @error('judul') is-invalid @enderror" id="validationDefault01" required>
                           </div>
                           @error('judul')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                           <div class="col-md-6 mb-3">
                              <label class="form-label" for="validationDefault02">Penulis</label>
                              <input type="text" value="{{ old('penulis', $book->penulis) }}" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="validationDefault02" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustomUsername" class="form-label">Penerbit</label>
                              <div class="form-group">
                                 <input type="text" value="{{ old('penerbit', $book->penerbit) }}" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="validationCustomUsername" aria-label="Username" aria-describedby="basic-addon1" required>
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label" for="validationDefault04">Genre Buku</label>
                              <select name="genre_id" class="form-select @error('genre_id') is-invalid @enderror" id="validationDefault04" required>
                                 <option selected disabled value="">Pilih...</option>
                                 @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}" {{ $book->genre->id == $genre->id ? 'selected' : ''}}>{{ $genre->nama }}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label class="form-label" for="validationDefault05">Deskripsi Buku</label>
                              <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $book->deskripsi) }}</textarea>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label" for="validationDefault06">Cover Buku</label>
                              <input type="file" class="form-control @error('cover') is-invalid @enderror" id="validationDefault06" name="cover">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label" for="validationDefault07">Stok Buku</label>
                              <input type="number" min="{{ $book->detail->count() + 1 }}" value="{{ old('stok', $book->detail->count()) }}" class="form-control @error('stok') is-invalid @enderror" id="validationDefault07" name="stok" required>
                           </div>
                           <div class="col-md-3 mb-3">
                               <button type="submit" class="btn btn-primary">Submit Form</button>
                           </div>
                        </div>
                        {{-- <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                              </label>
                           </div>
                        </div> --}}
                     </div>
                  </form>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection