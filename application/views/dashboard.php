 <!-- Page Sidebar Ends-->
 <div class="page-body dashboard-2-main">
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row">
       <div class="card profile-greeting p-t-60 p-b-60">
         <div class="card-body text-center ">
           <h3 class="font-dark">Selamat Datang,</h3>
           <p class="font-dark">Aplikasi Monitoring Komoditas Pertanian</p>
           <!-- <button class="btn btn-light">Update</button> -->
         </div>
       </div>
       <div class="col-sm-6 col-xl-6 col-lg-6">
           <div class="card o-hidden border-0">
             <a type="button" href="#">
               <div class="bg-primary b-r-4 card-body">
                 <div class="media static-top-widget">
                   <div class="align-self-center text-center"><i data-feather="check-square"></i></div>
                   <div class="media-body">Data yang sudah di survey<span class="m-0"></span>
                     <h4 class="mb-0 counter"></h4><i class="icon-bg" data-feather="check-square"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
         <div class="col-sm-6 col-xl-6 col-lg-6">
           <div class="card o-hidden border-0">
             <a type="button" href="#">
               <div class="bg-secondary b-r-4 card-body">
                 <div class="media static-top-widget">
                   <div class="align-self-center text-center"><i data-feather="check-square"></i></div>
                   <div class="media-body">Data yang belum di survey<span class="m-0"></span>
                     <h4 class="mb-0 counter"></h4><i class="icon-bg" data-feather="check-square"></i>
                   </div>
                 </div>
               </div>
             </a>
           </div>
         </div>
       <div class="col-xl-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5>Peta Polygon Lahan</h5><span>Persebaran Lahan yang ditanam</span>
           </div>
           <div class="card-body">
             <div class="map-js-height" id="map1"></div>
           </div>
         </div>
       </div>


     </div>
   </div>
   <!-- Container-fluid Ends-->
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 col-xl-12 box-col-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5>Grafik Hasil Panen</h5>
           </div>
           <div class="card-body">
             <div id="basic-bar"></div>
           </div>
         </div>
       </div>
       <div class="col-xl-12 box-col-12 des-xl-100 top-dealer-sec">
         <div class="card">
           <div class="card-header pb-0">
             <div class="header-top d-sm-flex justify-content-between align-items-center">
               <h5>Jenis Komoditas</h5>
               <div class="setting-list">
                 <ul class="list-unstyled setting-option">
                   <li>
                     <div class="setting-primary"><i class="icon-settings"></i></div>
                   </li>
                   <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                   <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                   <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="card-body">
             <div class="owl-carousel owl-theme" id="owl-carousel-14">
               <div class="item">
                 <div class="row">
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/padi.png" alt="...">
                             <h6>Padi</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/corn.png" alt="...">
                             <h6>Jagung</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/onion.png" alt="...">
                             <h6>Bawang Merah</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/ubi_jalar.png" alt="...">
                             <h6>Ubi Jalar</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/peanut.png" alt="...">
                             <h6>Kacang Tanah</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/pakcoy.png" alt="...">
                             <h6>Pakcoy/ Sawi daging</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/wortel.png" alt="...">
                             <h6>Wortel</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="item">
                 <div class="row">
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/sawi_putih.png" alt="...">
                             <h6>Petsai/ Sawi Putih</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/garlic.png" alt="...">
                             <h6>Bawang Putih</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/kentang.png" alt="...">
                             <h6>Kentang</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                             <h6> Bunga Kol</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/brokoli.png" alt="...">
                             <h6>Brokoli</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/kubis.png" alt="...">
                             <h6>Kubis</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/kacang_merah.png" alt="...">
                             <h6>Kacang Merah</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                             <h6>Lettuce</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="item">
                 <div class="row">
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/jambu_merah.png" alt="...">
                             <h6>Jambu Merah</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/bayam.png" alt="...">
                             <h6>Bayam</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/paprika.png" alt="...">
                             <h6>Paprika</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>

                     </div>
                   </div>
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/jambu_kristal.png" alt="...">
                             <h6>Jambu Kristal</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/buncis.png" alt="...">
                             <h6>Buncis</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/cabe_merah.png" alt="...">
                             <h6>Cabe Merah</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="item">
                 <div class="row">
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/tomat.png" alt="...">
                             <h6>Tomat</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/eggplant.png" alt="...">
                             <h6>Terong</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/kacang_panjang.png" alt="...">
                             <h6>Kacang Panjang</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/4.png" alt="...">
                             <h6>Kapri</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="owl-carousel-16 owl-carousel owl-theme">
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/strawberry.png" alt="...">
                             <h6>Strawberry</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/cabe_rawit.png" alt="...">
                             <h6>Cabe Rawit</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="<?php echo base_url() ?>/assets/images/komoditas/mentimun.png" alt="...">
                             <h6>Mentimun</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                       <div class="item">
                         <div class="card">
                           <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                             <h6>Beet</h6>
                             <a class="btn btn-rounded" href="social-app.html">View More</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="code-box-copy">
               <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#top-dealer" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
               <pre><code class="language-html" id="top-dealer"><div class="card">
 <div class="card-header pb-0">
   <div class="header-top d-sm-flex justify-content-between align-items-center">
       <h5>Top Dealer</h5>
       <div class="center-content"> 
         <p class="d-sm-flex align-items-center"><span class="m-r-10">845 Dealer</span><i class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More Than Last Year</p>
       </div>
       <div class="setting-list">
           <ul class="list-unstyled setting-option">
             <li>
               <div class="setting-primary"><i class="icon-settings"></i></div>
             </li>
             <li><i class="view-html fa fa-code font-primary"></i></li>
             <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
             <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
             <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
             <li><i class="icofont icofont-error close-card font-primary"> </i></li>
            </ul>
       </div>
   </div>
 </div>
 <div class="card-body">
     <div id="owl-carousel-14" class="owl-carousel owl-theme">
       <div class="item">
         <div class="row">
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>johnson allon</h6>
                   <p>bangladeshlt</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6>williams reed</h6>
                   <p>Belgium</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6> Jones king</h6>
                   <p>Canada</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                   <h6>Brown davis</h6>
                   <p>China</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                   <h6>Wilson Hill</h6>
                   <p>Denmark</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                   <h6>Anderson ban</h6>
                   <p>Japan</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
         </div>
       </div>
       <div class="item">
         <div class="row">
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>johnson allon</h6>
                   <p>bangladeshlt</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6>williams reed</h6>
                   <p>Belgium</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6> Jones king</h6>
                   <p>Canada</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                   <h6>Brown davis</h6>
                   <p>China</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                   <h6>Wilson Hill</h6>
                   <p>Denmark</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                   <h6>Anderson ban</h6>
                   <p>Japan</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
         </div>
       </div>
       <div class="item">
         <div class="row">
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/1.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>johnson allon</h6>
                   <p>bangladeshlt</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6>williams reed</h6>
                   <p>Belgium</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/3.png" alt="...">
                   <h6> Jones king</h6>
                   <p>Canada</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/5.png" alt="...">
                   <h6>Brown davis</h6>
                   <p>China</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/6.png" alt="...">
                   <h6>Wilson Hill</h6>
                   <p>Denmark</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/7.png" alt="...">
                   <h6>Anderson ban</h6>
                   <p>Japan</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="card">
                 <div class="top-dealerbox text-center"><img class="card-img-top" src="../assets/images/dashboard-2/8.png" alt="...">
                   <h6>Thompson lee</h6>
                   <p>Malasiya</p><a class="btn btn-rounded" href="javascript:void(0)">View More</a>
                 </div>
               </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>