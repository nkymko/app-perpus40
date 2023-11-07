@extends('layouts.dashboard')

@section('main-content')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-md-12 col-lg-12">
          <div class="row row-cols-1">
             <div class="overflow-hidden d-slider1 ">
                <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                               <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Total Judul</p>
                               <h4 class="counter">{{ $counts['book'] }}</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                               <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Total Genre</p>
                               <h4 class="counter">{{ $counts['genre'] }}</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                               <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Total Stok</p>
                               <h4 class="counter">{{ $counts['stock'] }}</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                      <div class="card-body">
                         <div class="progress-widget">
                            <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                               <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                               </svg>
                            </div>
                            <div class="progress-detail">
                               <p  class="mb-2">Peminjaman</p>
                               <h4 class="counter">{{ $counts['checkout'] }}</h4>
                            </div>
                         </div>
                      </div>
                   </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
             </div>
          </div>
       </div>
       <div class="col-md-12 col-lg-8">
          <div class="row">
             <div class="col-md-12">
                <div class="card" data-aos="fade-up" data-aos-delay="800">
                   <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                      <div class="header-title">
                         <h4 class="card-title">{{ $counts['checkout'] }}</h4>
                         <p class="mb-0">Peminjaman</p>          
                      </div>
                      <div class="d-flex align-items-center align-self-center">
                         <div class="d-flex align-items-center text-primary">
                            <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                               <g>
                                  <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                               </g>
                            </svg>
                            <div class="ms-2">
                               <span class="text-gray">Murid</span>
                            </div>
                         </div>
                         <div class="d-flex align-items-center ms-3 text-info">
                            <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                               <g>
                                  <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                               </g>
                            </svg>
                            <div class="ms-2">
                               <span class="text-gray">Guru</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="card-body">
                      <div id="d-main" class="d-main"></div>
                   </div>
                </div>
             </div>
                

             <div class="col-md-12 col-lg-12">
                <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                   <div class="flex-wrap card-header d-flex justify-content-between">
                      <div class="header-title">
                         @if ($counts['recent_checkout'] > 0)
                           <h4 class="mb-2 card-title">Baru Saja</h4>
                           <p class="mb-0">
                              <svg class ="me-2 text-primary icon-24" width="24"  viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                              </svg>
                              {{ $counts['recent_checkout'] }} permintaan pinjam buku
                           </p>
                        @else
                           Tidak ada peminjaman hari ini
                        @endif
                      </div>
                   </div>
                   <div class="p-0 card-body">
                      <div class="mt-4 table-responsive">
                         <table id="basic-table" class="table mb-0 table-striped" role="grid">
                            <thead>
                               <tr>
                                  <th>NAMA</th>
                                  <th>KODE PEMINJAMAN</th>
                                  <th>NIS/NIP</th>
                               </tr>
                            </thead>
                            <tbody>
                               @forelse ($checkouts as $checkout)
                               <tr>
                                 <td>
                                    <div class="d-flex align-items-center">
                                       <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="{{ asset('storage/' .$checkouts->user->profpic .'') }}" alt="profile">
                                       <h6>{{ $checkouts->user->nama }}</h6>
                                    </div>
                                 </td>
                                 <td>
                                    {{ $checkouts->kode }}
                                 </td>
                                 <td>{{ $checkouts->user->no_induk }}</td>
                              </tr>
                               @empty
                                   <tr>
                                    <td colspan="3" class="text-center">Tidak ada peminjaman</td>
                                   </tr>
                               @endforelse
                               
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-12 col-lg-4">
          <div class="row">
             
             <div class="col-md-12 col-lg-12">
                <div class="card" data-aos="fade-up" data-aos-delay="600">
                   <div class="flex-wrap card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="mb-2 card-title">Buku Terbaru</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      @forelse ($activities as $activity)
                        <div class="mb-2  d-flex profile-media align-items-top">
                           <div class="mt-1 profile-dots-pills border-primary"></div>
                           <div class="ms-4">
                              <h6 class="mb-1 ">{{ $activity->judul }}</h6>
                              <span class="mb-0">{{ $activity->created_at ->diffForHumans()}}</span>
                           </div>
                        </div>
                     @empty
                        <div class="mb-2  d-flex profile-media align-items-top">
                           <div class="mt-1 profile-dots-pills border-primary"></div>
                           <div class="ms-4">
                              <span class="mb-0">Tidak ada data terbaru</span>
                           </div>
                        </div>
                      @endforelse
                   </div>
                </div>
             </div>
          </div>
       </div> 
    </div>
          </div>
@endsection