<div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-lg-7 col-md-12">
            <h3 class="mb-5 display-2 text-white">Arena Bermain Terbaik untuk Sang Buah Hati</h3>
            <a href="<?= base_url('Service') ?>" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Pesan Tiket Disini</a>
            <a href="#facilities" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Fasilitas</a>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-4 about bg-light" id="facilities">
   <div class="container py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h1 class="mb-5 display-4">Fasilitas</h1>
      </div>
      <div class="row g-5 justify-content-center">
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded position-relative">
               <div class="d-flex justify-content-center bg-primary rounded position-absolute" style="top: -20px; left: 50%; transform: translateX(-50%); z-index: 10;">
                  <span class="nav-link text-white rounded-pill">
                     Lantai 1
                  </span>
               </div>
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/lantai-1.jpg" class="img-fluid w-100" alt="Image" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
               <div class="program-text bg-white px-4 pb-3">
                  <div class="program-text-inner">
                     <a href="#" class="h4">Wahana permainan :</a>
                     <p class="mt-3 mb-0">
                     <ul class="mb-0 mt-3">
                        <li>Mainan Tematik (Polisi, Dokter, Cafe, Supermarket dll)</li>
                        <li>Mobil-mobilan</li>
                        <li>Kincir Putar</li>
                        <li>Perpustakaan</li>
                     </ul>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="program-item rounded position-relative">
               <div class="d-flex justify-content-center bg-primary text-white position-absolute"
                  style="top: -20px; left: 50%; transform: translateX(-50%); z-index: 10; padding: 5px 15px; border-radius: 30px;">
                  <span>Lantai 2</span>
               </div>
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/construction.jpg" class="img-fluid w-100" alt="Image" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
               <div class="program-text bg-white px-4 pb-3">
                  <div class="program-text-inner">
                     <a href="#" class="h4">Wahana permainan :</a>
                     <p class="mt-3 mb-0">
                     <ul class="mb-0 mt-3">
                        <li>Mandi Bola</li>
                        <li>Rainbow Slide</li>
                        <li>Flying Fox</li>
                        <li>Trampolin</li>
                     </ul>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="program-item rounded position-relative">
               <div class="d-flex justify-content-center bg-primary text-white position-absolute"
                  style="top: -20px; left: 50%; transform: translateX(-50%); z-index: 10; padding: 5px 15px; border-radius: 30px;">
                  <span>Lantai 3</span>
               </div>
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/lantai-3.jpg" class="img-fluid w-100" alt="Image" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
               <div class="program-text bg-white px-4 pb-3">
                  <div class="program-text-inner">
                     <a href="#" class="h4">Wahana permainan :</a>
                     <p class="mt-3 mb-0">
                     <ul class="mb-0 mt-3">
                        <li>Kereta-keretaan</li>
                        <li>Perosotan dan ayunan Balita</li>
                        <li>Basketball</li>
                        <li>Lego</li>
                        <li>Mainan Montessori</li>
                     </ul>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h1 class="mb-3 display-6">Fasilitas Lainnya</h1>
      </div>
      <div class="container py-1">
         <ul class="list-unstyled d-flex justify-content-center">
            <li class="text-center me-5">
               <span class="btn btn-warning rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">speed_camera</i>
               </span>
               <h5>CCTV</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-2">local_parking</i>
               </span>
               <h5>Free Parking</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-secondary rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">chair</i>
               </span>
               <h5>Waiting Room</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-secondary rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">mosque</i>
               </span>
               <h5>Mushalla</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-success rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">cookie</i>
               </span>
               <h5>Snacks</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-info rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">Wc</i>
               </span>
               <h5>Toilet</h5>
            </li>
            <li class="text-center me-5">
               <span class="btn btn-danger rounded-circle d-flex align-items-center justify-content-center mb-3"
                  style="width: 100px; height: 100px; transition: transform 0.3s;"
                  onmouseover="this.style.transform='scale(1.2)';"
                  onmouseout="this.style.transform='scale(1)';">
                  <i class="material-symbols-outlined fs-1">lock</i>
               </span>
               <h5>Locker</h5>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- playground -->
<div class="container-fluid py-4 bg-light" id="galery">
   <div class="container py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h1 class="mb-5 display-4">Playground</h1>
      </div>
      <div class="row g-5 justify-content-center">
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (6).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">LEGO</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (3).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">KERETA - KERETAAN DAN PEROSOTAN</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (8).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">MAINAN MONTESSORI</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (4).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">MOBIL - MOBILAN</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (10).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">SUPERMARKET</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (11).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">MAINAN ALAT MUSIK</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (14).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">MAINAN INTERAKTIF</h4>
         </div>
         <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="program-item rounded">
               <div class="program-img position-relative">
                  <div class="overflow-hidden img-border-radius">
                     <img src="<?= base_url('assets') ?>/img/img (17).jpg" class="img-fluid w-100" alt="Image"
                        onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                  </div>
               </div>
            </div>
            <h4 class="py-3 text-center">MAINAN TEMATIK</h4>
         </div>
      </div>

      <script>
         function zoomIn(image) {
            image.style.transition = "transform 0.3s ease";
            image.style.transform = "scale(1.1)"; // Zoom in
         }

         function zoomOut(image) {
            image.style.transition = "transform 0.3s ease";
            image.style.transform = "scale(1)"; // Zoom out
         }
      </script>

   </div>
</div>