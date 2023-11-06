@extends('layouts.dashboard')

@section('main-content')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Data Buku</h4>
                </div>

                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Judul</a>
             </div>
             <div class="card-body">
                <div class="table-responsive">
                   <table id="datatable" class="table table-striped" data-toggle="data-table">
                      <thead>
                         <tr>
                           <th>No.</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                         </tr>
                      </thead>
                      <tbody>
                         @foreach ($books as $book)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $book->judul }}</td>
                              <td>{{ $book->penulis }}</td>
                              <td>{{ $book->penerbit }}</td>
                              <td>{{ $book->detail->count()  }}</td>
                              <td>
                                 <button class="btn btn-warning"><i class="fas fa-pen"></i></button>
                                 <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                           </tr>
                         @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <p>Modal body text goes here.</p>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
           </div>
       </div>
   </div>
</div>
@endsection