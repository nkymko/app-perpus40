@extends('layouts.dashboard')

@section('main-content')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Request Peminjaman</h4>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive">
                   <table id="datatable" class="table table-striped" data-toggle="data-table">
                      <thead>
                         <tr>
                           <th>Kode Peminjaman</th>
                            <th>Peminjam</th>
                            <th>NIS/NIP</th>
                            <th>Kode Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                         </tr>
                      </thead>
                      <tbody>
                         @foreach ($checkouts as $checkout)
                           <tr>
                              <td>{{ $checkout->kode }}</td>
                              <td>{{ $checkout->user->nama }}</td>
                              <td>{{ $checkout->user->nomor_induk }}</td>
                              <td>{{ $checkout->detail->serial_num }}</td>
                              <td>{{ \Carbon\Carbon::parse($checkout->created_at)->format('d/m/Y') }}</td>
                              <td>{{ $checkout->status }}</td>
                              <td></td>
                           </tr>
                         @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>

       <div class="col-sm-12">
        <div class="card">
           <div class="card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Riwayat Peminjaman</h4>
              </div>
           </div>
           <div class="card-body">
              <div class="table-responsive">
                 <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                       <tr>
                         <th>Kode Peminjaman</th>
                          <th>Peminjam</th>
                          <th>NIS/NIP</th>
                          <th>Kode Buku</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Pengembalian</th>
                          <th>Status</th>
                          <th>Denda</th>
                       </tr>
                    </thead>
                    <tbody>
                       @foreach ($histories as $history)
                         <tr>
                            
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

@endsection