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
                         <h4 class="card-title">$855.8K</h4>
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
                         <h4 class="mb-2 card-title">Baru Saja</h4>
                         <p class="mb-0">
                            <svg class ="me-2 text-primary icon-24" width="24"  viewBox="0 0 24 24">
                               <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                            </svg>
                            15 permintaan pinjam buku
                         </p>            
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
                               <tr>
                                  <td>
                                     <div class="d-flex align-items-center">
                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="{{ asset('template/assets/images/shapes/01.png') }}" alt="profile">
                                        <h6>Addidis Sportwear</h6>
                                     </div>
                                  </td>
                                  <td>
                                     <div class="iq-media-group iq-media-group-1">
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                        </a>
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                        </a>
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                        </a>
                                     </div>
                                  </td>
                                  <td>$14,000</td>
                               </tr>
                               <tr>
                                  <td>
                                     <div class="d-flex align-items-center">
                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="{{ asset('template/assets/images/shapes/05.png') }}" alt="profile">
                                        <h6>Netflixer Platforms</h6>
                                     </div>
                                  </td>
                                  <td>
                                     <div class="iq-media-group iq-media-group-1">
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                        </a>
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                        </a>
                                     </div>
                                  </td>
                                  <td>$30,000</td>
                               </tr>
                               <tr>
                                  <td>
                                     <div class="d-flex align-items-center">
                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="{{ asset('template/assets/images/shapes/02.png') }}" alt="profile">
                                        <h6>Shopifi Stores</h6>
                                     </div>
                                  </td>
                                  <td>                                 
                                     <div class="iq-media-group iq-media-group-1">
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                        </a>
                                        <a href="#" class="iq-media-1">
                                           <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                        </a>
                                     </div>
                                  </td>
                                  <td>$8,500</td>
                               </tr>
                               
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
                         <h4 class="mb-2 card-title">Aktivitas Terbaru</h4>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="mb-2  d-flex profile-media align-items-top">
                         <div class="mt-1 profile-dots-pills border-primary"></div>
                         <div class="ms-4">
                            <h6 class="mb-1 ">$2400, Purchase</h6>
                            <span class="mb-0">11 JUL 8:10 PM</span>
                         </div>
                      </div>
                      <div class="mb-2  d-flex profile-media align-items-top">
                         <div class="mt-1 profile-dots-pills border-primary"></div>
                         <div class="ms-4">
                            <h6 class="mb-1 ">New order #8744152</h6>
                            <span class="mb-0">11 JUL 11 PM</span>
                         </div>
                      </div>
                      <div class="mb-2  d-flex profile-media align-items-top">
                         <div class="mt-1 profile-dots-pills border-primary"></div>
                         <div class="ms-4">
                            <h6 class="mb-1 ">Affiliate Payout</h6>
                            <span class="mb-0">11 JUL 7:64 PM</span>
                         </div>
                      </div>
                      <div class="mb-2  d-flex profile-media align-items-top">
                         <div class="mt-1 profile-dots-pills border-primary"></div>
                         <div class="ms-4">
                            <h6 class="mb-1 ">New user added</h6>
                            <span class="mb-0">11 JUL 1:21 AM</span>
                         </div>
                      </div>
                      <div class="mb-1  d-flex profile-media align-items-top">
                         <div class="mt-1 profile-dots-pills border-primary"></div>
                         <div class="ms-4">
                            <h6 class="mb-1 ">Product added</h6>
                            <span class="mb-0">11 JUL 4:50 AM</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div> 
    </div>
          </div>
@endsection