
<link rel="stylesheet" href="<?php echo base_url('assets/css/a5product.css'); ?>">

<!-- </head> -->
<style>
   .pack-option {
      border: 1px solid #ccc;
      padding: 10px;
      cursor: pointer;
      border-radius: 6px;
   }

   .pack-option.selected {
      border: 2px solid #2e8b57;
      background-color: #f3fdf5;
   }



   .aa-offcanvas-body {
      z-index: 99999 !important;
      border: 2px solid red;
   }

   .modal-backdrop {
      z-index: 999 !important;
   }

   .tab-menu {
      z-index: 9990 !important;

   }

   body {
      position: relative;
      /* Establish stacking context */
   }

   .modal-backdrop {
      z-index: 1000 !important;
   }

   .aa-offcanvas-body {
      z-index: 9999 !important;
   }

   .tab-menu {
      position: sticky;
      top: 0;
      z-index: 9930 !important;
      /* Lower than cart elements */
      /* background: white; Ensure it covers content below */
   }

   .benefit-card img {
      width: 253px;
      height: 255px;
      object-fit: contain;
      border-radius: 0%;
      margin-bottom: 12px;
      margin-top: -3px;
      background-position: center;
      /* border: 2px solid red; */
   }

   /* Ensure parent elements don't interfere */
   .containerr,
   .right-content,
   .left-gallery {
      position: static;
   }

   .aa-offcanvas-body {
      /* z-index: 99999 !important; */
      /* border: 2px solid red; */
      border: none !important;
      ;
   }

   .aa-offcanvas {
      /* position:absolute; */
      z-index: 999999 !important;
   }

   .tab-menu {
      /* position:relative !important; */
      z-index: 9999 !important;

   }

   .left-gallery {
      border: none !important;

   }

   .left-gallery img {
      /* border:2px solid green ; */
      margin: auto !important;
      object-fit: contain !important;
   }

   .thumbs img {
      border: none !important;
      height: 100px !important;
      width: 80px;
   }

   .containerr {
      /* border:2px solid red !important; */
      /* padding:20px 10px !important; */
   }

   .left-gallery {
      border: 2px solid blue !important;
      width: 40%;

   }

   .right-content {

      width: 70% !important;
   }

   /* Existing styles... */

   .containerr {
      display: flex;
      margin-top: 0px !important;
      position: relative;
      padding-top: 30px !important;
   }

   .left-gallery {
      position: sticky;
      top: 20px;
      /* Adjust based on your header height */
      align-self: flex-start;
      /* Align to the top */
      height: 83vh;
      /* Take full viewport height */
      /* overflow-y: auto; Make it scrollable if content exceeds height */
      width: 40%;
      padding-right: 20px;
      border: none !important;
      /* display :hidden; */
   }

   .right-content {
      width: 70%;
      padding-left: 20px;
      max-height: 80vh;
      /* Limit height to viewport */
      overflow-y: auto;
      /* Make it scrollable */
   }

   /* Ensure thumbnails stay within gallery */
   .thumbs {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
   }

   /* Adjust image sizes */
   .main-image img {
      width: 100%;
      height: auto;
      max-height: 500px;
      object-fit: contain;
   }

   .thumbs img {
      height: 80px !important;
      width: auto !important;
      cursor: pointer;
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .containerr {
         flex-direction: column;
      }

      .left-gallery,
      .right-content {
         width: 100%;
         position: static;
         height: auto;
      }


      .btns-amb {
         /* border:3px solid red !important; */
         display: flex !important;
         flex-direction: column !important;

      }

      .step-image img {
         object-fit: contain !important;
      }

      .section-6 {
         width: 80%;
         margin: auto;
      }
   }

   /* Hide scrollbar but keep functionality */
   .right-content {
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
   }

   .right-content::-webkit-scrollbar {
      display: none;
      /* Chrome, Safari, Opera */
   }

   /* Ensure full content height */
   .containerr {
      min-height: 100vh;
      /* padding-bottom: 100px; Space before tab menu */
   }

   /* Tab menu positioning */


   /* Gallery adjustments */
   .left-gallery {
      height: auto !important;
      max-height: 90vh;
      overflow: hidden !important;
   }

   .benefits-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      /* gap: 90px; */
      /* border: 2px solid red; */
      justify-content: space-between;
      width: 80%;
      margin: auto;
   }

   .section-3 {
      /* margin-left: -60px !important; */
   }

   .section-4 {
      padding: 13px;
   }

   .set div:last-child {
      max-width: none !important;
   }

   .section-title {
      font-size: 27px !important;
      font-weight: 450 !important;
      color: black !important;
   }

   .benefits-cards {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
      width: 80% !important;
      margin: 30px auto;
   }

   .benefit-card {
      width: 280px;
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      border: 1px solid #e0e0e0;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-bottom: 20px;
   }

   .benefit-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
   }

   .benefit-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, #2e8b57, #5cb85c);
   }

   .benefit-card img {
      width: 100%;
      height: 180px;
      object-fit: contain;
      margin: 0;
      border-bottom: 1px solid #e0e0e0;
   }

   .benefit-card h5 {
      font-size: 15px;
      font-weight: 600;
      color: #2e8b57;
      padding: 15px 20px 0;
      margin: 0;
      text-align: center;
      order: 2;
      /* Moves heading below image */
   }

   .benefit-card p {
      font-size: 15px;
      line-height: 1.5;
      color: black;
      padding: 10px 20px 0;
      margin: 0;
      text-align: center;
      order: 3;
      /* Keeps description at bottom */
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .benefits-cards {
         width: 95%;
         gap: 20px;
      }

      .benefit-card {
         width: 100%;
         max-width: 300px;
      }

      .right-content {
         width: 90% !important;
         margin: auto !important;
      }
   }

   /* Animation */
   @keyframes fadeInUp {
      from {
         opacity: 0;
         transform: translateY(20px);
      }

      to {
         opacity: 1;
         transform: translateY(0);
      }
   }

   .benefit-card {
      animation: fadeInUp 0.6s ease forwards;
      opacity: 0;
   }

   /* Delay animations for each card */
   .benefit-card:nth-child(1) {
      animation-delay: 0.1s;
   }

   .benefit-card:nth-child(2) {
      animation-delay: 0.2s;
   }

   .benefit-card:nth-child(3) {
      animation-delay: 0.3s;
   }

   .benefit-card:nth-child(4) {
      animation-delay: 0.4s;
   }

   .benefit-card:nth-child(5) {
      animation-delay: 0.5s;
   }

   .benefit-card:nth-child(6) {
      animation-delay: 0.6s;
   }



   .section-how-to-use {
      width: 90%;
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px 0;
      background-color: none !important;
      background-color: transparent !important;
   }

   .how-to-container {
      display: flex;
      flex-direction: column;
      gap: 15px;
   }

   .how-to-step {
      display: flex;
      align-items: center;
      background: #f8f9fa;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
   }

   .how-to-step:hover {
      transform: translateY(-3px);
   }

   .step-number {
      min-width: 50px;
      height: 50px;
      background: #2e8b57;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      border-radius: 50%;
      margin: 0 20px;
   }

   .step-content {
      display: flex;
      align-items: center;
      padding: 20px 20px 20px 0;
      flex-grow: 1;
   }

   .step-image {
      width: 80px;
      height: 80px;
      min-width: 80px;
      border-radius: 8px;
      overflow: hidden;
      margin-right: 20px;
   }

   .step-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .step-text {
      flex-grow: 1;
   }

   .step-text h3 {
      margin: 0 0 8px 0;
      color: #2e8b57;
      font-size: 18px;
   }

   .step-text p {
      margin: 0;
      color: black;
      font-size: 15px;
      line-height: 1.5;
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .how-to-step {
         flex-direction: column;
         align-items: flex-start;
      }

      .step-number {
         margin: 15px 0 0 15px;
      }

      .step-content {
         flex-direction: column;
         padding: 15px;
         align-items: flex-start;
      }

      .step-image {
         margin: 0 0 15px 0;
         width: 100%;
         height: 120px;
      }
   }

   /* Animation */
   @keyframes fadeIn {
      from {
         opacity: 0;
         transform: translateX(-20px);
      }

      to {
         opacity: 1;
         transform: translateX(0);
      }
   }

   .how-to-step {
      animation: fadeIn 0.5s ease forwards;
      opacity: 0;
   }

   .how-to-step:nth-child(1) {
      animation-delay: 0.1s;
   }

   .how-to-step:nth-child(2) {
      animation-delay: 0.2s;
   }

   .how-to-step:nth-child(3) {
      animation-delay: 0.3s;
   }

   .how-to-step:nth-child(4) {
      animation-delay: 0.4s;
   }


   .des-btns {
      background-color: green;
      /* border:2px solid red; */
      padding: 9px 100px !important;
      border-radius: 8px !important;
      color: white;
   }

   .des-btns:hover {
      background-color: darkgreen;
      color: white;

   }

   .offcanvas-backdrop.show {
      opacity: 0 !important;
   }

   /* Ingredients Section */
   .section-3 {
      /* margin-left: 0 !important; */
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
   }

   .inner_section-3 {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
   }

   .benefit-image {
      width: 150px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 15px;
   }

   .benefit-image img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
   }

   .benefit-text {
      flex: 1;
      min-width: 250px;
      max-width: 400px;
      padding: 0 15px;
   }

   .benefit-text h3 {
      color: #2e8b57;
      font-size: 18px;
      margin-bottom: 8px;
   }

   .benefit-text p {
      font-size: 15px;
      line-height: 1.5;
      color: black;
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .inner_section-3 {
         flex-direction: column;
         align-items: center;
      }

      .benefit-text {
         text-align: center;
         margin-bottom: 20px;
      }

      .benefit-image {
         margin-bottom: 15px;
      }
   }

   @media (max-width: 480px) {
      .benefit-text {
         min-width: 100%;
      }

      .benefit-image {
         width: 120px;
         height: 120px;
      }
   }

   .inner_section-3 {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      /* border: 2px solid red; */
      margin-bottom: 20px;
      /* border: 2px solidd red; */
      margin-left: 0%;
   }

   /* Food to Avoid Section */
   .section-6 {
      padding: 30px 0;
      background-color: #f8f9fa;
   }

   .food-to-avoid-container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 20px;
   }

   .food-to-avoid-title {
      text-align: center;
      margin-bottom: 20px;
      color: #2e8b57;
      font-size: 24px;
   }

   .food-to-avoid-subtitle {
      text-align: center;
      color: black;
      margin-bottom: 30px;
      font-size: 16px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
   }

   .food-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      justify-content: center;
   }

   .food-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
      border: 1px solid #e0e0e0;
      display: flex;
      flex-direction: column;
      height: 100%;
   }

   .food-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
   }

   .food-card-img {
      height: 160px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      background: #f9f9f9;
   }

   .food-card-img img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
   }

   .food-card-content {
      padding: 15px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
   }

   .food-card-title {
      color: #d9534f;
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 8px;
      text-align: center;
   }

   .food-card-desc {
      color: black;
      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 10px;
      flex-grow: 1;
   }

   .food-card-alternative {
      font-size: 13px;
      color: #2e8b57;
      font-weight: 500;
      padding-top: 8px;
      border-top: 1px dashed #e0e0e0;
   }

   /* Responsive adjustments */
   @media (max-width: 768px) {
      .food-cards {
         grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      }

      .food-card-img {
         height: 140px;
      }

      .monthly-advise {
         font-size: 17px;
         color: black;
         width: 100%;
      }

      .section-how-to-use {
         width: 75% !important;
         margin: auto;
      }
   }

   @media (max-width: 480px) {
      .food-cards {
         grid-template-columns: 1fr;
      }

      .food-to-avoid-title {
         font-size: 22px;
      }

      .food-to-avoid-subtitle {
         font-size: 15px;
      }
   }

   .section-7 {
      background-color: white !important;
   }

   .monthly-advise {
      font-size: 17px;
      color: black;
      width: 80%;
   }

   /* Add this to your CSS */
   #emailVerificationModal .modal-content {
      border-radius: 12px;
      border: none;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
   }

   #emailVerificationModal .modal-header {
      border-bottom: none;
      padding-bottom: 0;
   }

   #emailVerificationModal .modal-title {
      font-weight: 600;
      color: #2e8b57;
   }

   #emailVerificationModal .modal-body {
      padding-top: 0;
   }

   #emailVerificationModal .btn-primary {
      background-color: #2e8b57;
      border-color: #2e8b57;
   }

   #emailVerificationModal .btn-primary:hover {
      background-color: #247146;
      border-color: #247146;
   }


   /* Custom styling for the modal */
   #nextStepModal .modal-content {
      border-radius: 12px;
      border: none;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
   }

   #nextStepModal .modal-header {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
   }

   #nextStepModal .btn-outline-success {
      border-color: #2e8b57;
      color: #2e8b57;
   }

   #nextStepModal .btn-outline-success:hover,
   #nextStepModal .btn-check:checked+.btn-outline-success {
      background-color: #2e8b57;
      color: white;
   }

   #nextStepModal .form-control:focus,
   #nextStepModal .form-select:focus {
      border-color: #2e8b57;
      box-shadow: 0 0 0 0.25rem rgba(46, 139, 87, 0.25);
   }

   #nextStepModal .modal-content {
      border-radius: 8px;
      font-size: 14px;
   }

   #nextStepModal .form-control-sm {
      height: calc(1.5em + 0.5rem + 2px);
      padding: 0.25rem 0.5rem;
      margin-bottom: 0.3rem;
   }

   #nextStepModal .btn-sm {
      padding: 0.25rem 0.5rem;
      font-size: 0.8rem;
   }

   #nextStepModal .btn-outline-success {
      border-color: #28a745;
      color: #28a745;
   }

   #nextStepModal .btn-outline-success:hover {
      background-color: #28a745;
      color: white;
   }
   .model-positioning{
      /* border:2px solid red !important; */
      top:0% !important;
      left:36% !important;
      /* width:60% !important; */
   }
  .model-positioning-address{

top:0% !important;
      left:36% !important;
      /* top:0% !important; */

   }
   .offcanvas-backdrop.show {
      opacity: 0 !important;
      z-index: 0 !important;
   }
   /* Add this at the top of your style section in description.php */
.modal-backdrop,
.offcanvas-backdrop {
  display: none !important;
  opacity: 0 !important;
  z-index: -1 !important;
}

/* Remove any transitions on backdrops */
.modal-backdrop.fade,
.offcanvas-backdrop.fade {
  transition: none !important;
}

/* Add to description.php style section */
.modal {
  z-index: 1060 !important;
  background-color: transparent !important;
}

.modal-dialog {
  z-index: 1061 !important;
  position: relative;
}

.aa-offcanvas {
  z-index: 1055 !important;
}

.tab-menu {
  z-index: 1040 !important;
}
/* * { border: 1px solid red !important; }
element.style {
    position: relative;
    min-height: 100%;
    top: 0px;
    overflow: hidden;
    padding-right: 15px;
} */

 /* .aa-offcanvas {
  transition: transform 0.3s ease-in-out;
  transform: translateX(100%); 
  position: fixed;
  top: 0;
  right: 0;
  width: 300px;
  height: 100%;
  background-color: white; 
  z-index: 1050; 
} */

/* Show the offcanvas */
/* Base offcanvas: initially hidden (off-screen) */
.aa-offcanvas {
  transform: translateX(100%);
  transition: transform 0.6s ease-in-out;
  position: fixed;
  top: 0;
  right: 0;
  width: 300px;
  height: 100%;
  background-color: white;
  z-index: 1050;
}

/* When shown */
.aa-offcanvas.aa-offcanvas-end {
  transform: translateX(0%);
}

body{
   overflow:auto !important;
}

</style>

<body>
   <div class="containerr" style="margin-top:15px !important; ">
      <div class="left-gallery">
         <?php
         $product_images = json_decode($product_data->image ?? '[]');
         $main_image = !empty($product_images[0])
            ? base_url($product_images[0])
            : base_url('assets/images/default.webp');
         ?>
         <div class="main-image">
            <img id="main-image" src="<?php echo $main_image; ?>" alt="Main Product Image">
         </div>

         <!-- Thumbnails below -->
         <div class="thumbs">
            <?php if (!empty($product_images)): ?>
               <?php foreach ($product_images as $index => $img): ?>
                  <img class="<?php echo $index === 0 ? 'active' : ''; ?>"
                     src="<?php echo base_url($img); ?>"
                     onclick="changeImage(this)">
               <?php endforeach; ?>
            <?php else: ?>
               <!-- Fallback thumbnails if no images in DB -->
               <img class="active" src="<?php echo base_url('assets/images/H5.webp') ?>" onclick="changeImage(this)">
               <img src="<?php echo base_url('assets/images/PB01.webp') ?>" onclick="changeImage(this)">
               <img src="<?php echo base_url('assets/images/PB02.webp') ?>" onclick="changeImage(this)">
               <img src="<?php echo base_url('assets/images/PB03.webp') ?>" onclick="changeImage(this)">
            <?php endif; ?>
         </div>
      </div>


      <!-- Right: Scrollable product content -->

      
      <div class="right-content">
         <h2 style="border:none;margin-bottom:0px;">
            <?= $product_data->product_name; ?>
            <h6><i><?= $product_data->tittle; ?></i></h6>
         </h2>
         <div style="width:25%;height:2px;background-color:#2e8b57;margin-top:5px;margin-bottom:5px;"></div>

         <!-- <p><strong>⭐⭐⭐⭐⭐ 51 reviews</strong><br> -->
         🌿 100% Ayurvedic. 0% Chemicals. 3 Months to Freedom.
         </p>

         <p><?= $product_data->discription; ?></p>
       <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
         <h6><i>Made for those who want results, naturally. </i></h6>
         <p>
            ✅ Visible Results Within 3 
            <br>
            ✅ 25+ Rare Ayurvedic Herbs (India + Malaysia)
            <br>
            ✅ 100% Natural | No Chemicals | No Side Effects
            <br>
            ✅ Expert-Crafted, Clinically-Inspired Formula
            <br>
            ✅ 60 Individually Packed Daily Sachets per Box
            Manage diabetes naturally with the power of Ayurveda.
               <br>
            👉 <b>Try the A5 Herbal Supplement today and feel the Ayurvedic difference.</b>
            <!-- <br>
            💚 Thousands trust A5. Experience why.
            <br>
            🌿 Natural. Powerful. Proven. Choose A5.
            <br> -->
         </p>
       <?php } ?>

         <div class="price">
            Rs. <?= $product_data->price; ?>
            <span style="font-size:14px;color:black;padding-left:5px;">MRP (Inclusive all Taxes)</span><br>
            <span style="text-decoration:line-through;color:black;padding-left:10px;font-size:17px;">
               <?= $product_data->price * 2; ?>
            </span>
            <span style="color:orangered;padding-left:10px;font-size:18px;">50% off</span>
         </div>

         <!-- PACK OPTIONS -->
         <?php if ($alternate_orderflow_status == 0 && !empty($pack)) { ?>
            <div class="pack-options-container">
               <h3 style="margin-bottom: 15px; color: black ;">Choose Your Pack:</h3>
               <div class="pack-options-grid">
                  <?php foreach ($pack as $key => $value) { ?>
                     <div class="pack-option"
                        data-qty="1"
                        data-id="<?= $value['id'] ?>"
                        data-price="<?= $value['price'] ?>">
                        <div class="pack-header">
                           <h4><?= $key + 1 ?> box</h4>
                           <p class="pack-details"><?= $value['description'] ?></p>
                        </div>
                        <div class="pack-price">
                           <span class="discount-badge">-<?= $value['disscount'] ?> off</span>
                           <p class="current-price">Rs.<?= $value['price'] ?></p>
                           <p class="original-price">Rs.<?= $value['base_price'] ?></p>
                           <p class="savings">Save <?= $value['base_price'] - $value['price']; ?></p>
                        </div>
                        <div class="pack-tag"><?= $value['pack_name'] ?></div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         <?php } ?>

         <!-- Quantity Control -->
         <div class="quantity-container" style="margin-top:20px;">
            <p style="color:black;font-size:20px;">Quantity:</p>
            <button type="button" class="quantity-btn decrement">−</button>
            <input type="number" class="quantity-input" value="1" min="1">
            <button type="button" class="quantity-btn increment">+</button>
         </div>
         <?php
         $product_images = json_decode($product_data->image ?? '[]');
         $first_image = !empty($product_images[0]) ? $product_images[0] : ''; // just the filename
         $image_url = !empty($first_image) ? base_url($first_image) : '';

         ?>
         <div style="display:flex;justify-content:space-between;gap:20px;margin-top:20px;" class="btns-amb">

            <!-- <php if ($alternate_orderflow_status == 1): ?> -->
               <button type="button"
                  class="des-btns buy-product-btn"
                  data-id="<?= $product_data->product_id ?>"
                  data-name="<?= $product_data->product_name ?>"
                  data-baseprice="<?= $product_data->price ?>"
                  data-image="<?= $first_image ?>">
                  ⚡ Order Now
               </button>
            <!-- <php else: ?> -->
               <button type="button"
                  class="des-btns add-to-cart-btn"
                  data-id="<?= $product_data->product_id ?>"
                  data-name="<?= $product_data->product_name ?>"
                  data-baseprice="<?= $product_data->price ?>"
                  data-image="<?= $first_image ?>">
                  🛒 Add to Cart
               </button>

               <button type="button"
                  class="des-btns buy-now-btn"
                  data-id="<?= $product_data->product_id ?>"
                  data-name="<?= $product_data->product_name ?>"
                  data-baseprice="<?= $product_data->price ?>"
                  data-image="<?= $first_image ?>">
                  ⚡ Buy Now
               </button>
            <!-- <php endif; ?> -->

         </div>

      </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   <div class="tab-menu">
      <ul class="tab-list">
         <li class="tab-item active" data-target="key-benefit">
            <i class="fas fa-star tab-icon"></i>
            <span>Key Benefit</span>
         </li>
         <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
            <li class="tab-item" data-target="ingredients">
               <i class="fas fa-leaf tab-icon"></i>
               <span>Ingredients</span>
            </li>
         <?php } ?>
         <li class="tab-item" data-target="how-to-use">
            <i class="fas fa-question-circle tab-icon"></i>
            <span>How to Use</span>
         </li>
         <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
            <li class="tab-item" data-target="Food to Avoid">
               <i class="fas fa-ban tab-icon"></i>
               <span>Food to Avoid</span>
            </li>

            <li class="tab-item" data-target="best-exercise">
               <i class="fas fa-running tab-icon"></i>
               <span>Best Exercise</span>
            </li>
         <?php } ?>
         <li class="tab-item" data-target="faqs">
            <i class="fas fa-comments tab-icon"></i>
            <span>FAQs</span>
         </li>
      </ul>
   </div>
   <div class="section-2" id="key-benefit">
      <h1 class="section-title" style="margin-bottom: 30px;">Key Benefits</h1>
      <div class="benefits-cards">
         <?php foreach ($product_benefits as $key => $value) { ?>
            <div class="benefit-card">
               <img src="<?php echo base_url($value->image); ?>" alt="<?php echo $value->title; ?>">
               <h5><?php echo $value->title; ?></h5>
               <p><?php echo $value->description; ?></p>
            </div>
         <?php } ?>
      </div>
   </div>
   <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
      <div class="section-3">
         <h4 class="section-title " style="text-align:center;" id="ingredients">Key Ingredients</h4>

         <div class="inner_section-3">
            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Alpinia galanga.png') ?>" alt="Alpinia galanga">
            </div>
            <div class="benefit-text">
               <h3>Alpinia Galanga</h3>
               <p>Helps in aids digestion, reduces inflammation, and regulates blood sugar.</p>
            </div>

            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Sri Lankan Eucalyptus.png') ?>" alt="Sri Lankan Eucalyptus">
            </div>
            <div class="benefit-text">
               <h3>Sri Lankan Eucalyptus</h3>
               <p>Supports respiratory health, reduces inflammation, and boosts immunity.</p>
            </div>
         </div>

         <div class="inner_section-3">
            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Indian Gooseberry 1.png') ?>" alt="Indian Gooseberry">
            </div>
            <div class="benefit-text">
               <h3>Indian Gooseberry</h3>
               <p>Rich in vitamin C, supports immune health, and helps regulate blood sugar.</p>
            </div>

            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Fengreek1.png') ?>" alt="Fenugreek">
            </div>
            <div class="benefit-text">
               <h3>Fenugreek</h3>
               <p>Helps regulate blood sugar and enhances insulin sensitivity.</p>
            </div>
         </div>

         <div class="inner_section-3">
            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Java plum .png') ?>" alt="Java plum">
            </div>
            <div class="benefit-text">
               <h3>Java plum</h3>
               <p>Encourages stable sugar levels with natural pancreatic support.</p>
            </div>

            <div class="benefit-image">
               <img src="<?php echo base_url('/assets/images/Bitter gourd.png') ?>" alt="Bitter gourd">
            </div>
            <div class="benefit-text">
               <h3>Bitter gourd</h3>
               <p>A natural remedy to manage diabetes and improve metabolism.</p>
            </div>
         </div>
      </div>

      <div class="section-4">
         <h3 class="section-title" style="text-align:center;">Who Should Use A5 Herbal Supplement?</h3>
         <div style="text-align:center;width:80%;margin:auto;">
            <h6 style="color:green;margin-top:15px; ">If you're tired of sugar medicines that offer only temporary control, or you're looking for a natural, side-effect-free way to support healthy blood sugar levels, A5 may be the change you need — rooted in Ayurvedic wisdom and backed by thousands of happy users.<br>

            </h6>
         </div>
      </div>
   <?php } ?>
   <div class="section-how-to-use" id="how-to-use" style="background-color:transparent;">
      <h3 class="section-title" style="text-align:center;margin-bottom:25px;">How To Use</h3>
      <div class="how-to-container">
         <?php foreach ($product_usage as $key => $value) { ?>
            <div class="how-to-step">
               <div class="step-number"><?php echo $value->step_number; ?></div>
               <div class="step-content">
                  <div class="step-image">
                     <img src="<?php echo base_url($value->image); ?>" alt="Step <?php echo $value->step_number; ?>">
                  </div>
                  <div class="step-text">
                     <h3><?php echo $value->title; ?></h3>
                     <p><?php echo $value->description; ?></p>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
   <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
      <div class="removed-sugar">
         <h4 class="section-title" style="text-align:center;margin-bottom:12px; ">3-Month Smart Support Plan with A5</h4>
         <div class="set">
            <div style=" color:black;" class="monthly-advise">
               <b style="color:green;">Month 1:</b> Take A5 daily along with your regular diabetes medicines. This helps your body begin adjusting naturally.<br><br>
               <b style="color:green;">Month 2:</b> If sugar levels look better and you feel confident, try skipping your regular medicine <b>once a week — </b>while<br> continuing A5 daily. Keep tracking your sugar levels.<br><br>
               <b style="color:green;">Month 3:</b> If sugar remains in control, you may reduce your regular medicine to <b>once every 15 days —</b> and continue<br> A5 daily as your core support.<br><br>
               <b style="color:green;">After 3 Months:</b> If your sugar levels stay consistently normal, you can consider continuing only A5 as a part of your<br> daily wellness routine — while staying mindful of your health.<br><br>
            </div>
         </div>
      </div>
      <!-- <div class="section-4" style="background-color:rgb(238, 229, 212); margin-bottom:10px;">
         <h3 class="section-title" style="text-align:center;">Precautions</h3>
         <div style="text-align:center;width:80%;margin:auto;">
            <h4 style="color:darkred;font-weight:500;margin-top:15px;">Do not exceed the recommended dosage.
            </h4>
         </div>
      </div> -->
   <?php } ?>
   <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
      <div class="section-6" id="Food to Avoid">
         <div class="food-to-avoid-container">
            <h3 class="food-to-avoid-title">Foods to Avoid</h3>
            <p class="food-to-avoid-subtitle">
               For best results with A5, align your diet with your health goals. These foods can spike blood sugar levels:
            </p>

            <div class="food-cards">
               <!-- Card 1 -->
               <div class="food-card">
                  <div class="food-card-img">
                     <img src="<?php echo base_url('/assets/images/Sugar.webp') ?>" alt="White Sugar">
                  </div>
                  <div class="food-card-content">
                     <h4 class="food-card-title">❌ White Sugar</h4>
                     <p class="food-card-desc">
                        Avoid sweets, candies, cakes, pastries, cold drinks, and sweet tea/coffee as they cause sudden sugar spikes.
                     </p>
                     <p class="food-card-alternative">
                        ➡️ Use natural sweeteners like stevia in moderation
                     </p>
                  </div>
               </div>

               <!-- Card 2 -->
               <div class="food-card">
                  <div class="food-card-img">
                     <img src="<?php echo base_url('/assets/images/Rice.webp') ?>" alt="White Rice">
                  </div>
                  <div class="food-card-content">
                     <h4 class="food-card-title">❌ White Rice</h4>
                     <p class="food-card-desc">
                        High in starch and carbohydrates, it converts quickly into glucose in the body.
                     </p>
                     <p class="food-card-alternative">
                        ➡️ Opt for brown rice or millets instead
                     </p>
                  </div>
               </div>

               <!-- Card 3 -->
               <div class="food-card">
                  <div class="food-card-img">
                     <img src="<?php echo base_url('/assets/images/potato.webp') ?>" alt="Potatoes">
                  </div>
                  <div class="food-card-content">
                     <h4 class="food-card-title">❌ Potatoes</h4>
                     <p class="food-card-desc">
                        Rich in starch, they spike blood sugar levels rapidly when consumed in large quantities.
                     </p>
                     <p class="food-card-alternative">
                        ➡️ Replace with green vegetables for better control
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php } ?>
   </div>
   <?php if ($product_data->slug == "a5-herbal-supplement") { ?>
      <div id="best-exercise" style="padding: 40px 0; background-color: #f9f9f9;">
         <div class="container" style="max-width: 1000px; margin: 0 auto;">
            <h3 class="section-title" style="text-align: center; margin-bottom: 30px; color: #2e8b57; font-size: 28px;">Best Exercises for Sugar Control</h3>

            <div class="exercise-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; padding: 0 20px;">
               <!-- Exercise 1 -->
               <div class="exercise-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                  <div style="padding: 20px; text-align: center;">
                     <div style="font-size: 50px; color: #2e8b57; margin-bottom: 10px;">🚶‍♂️</div>
                     <h4 style="margin: 0 0 10px; coloblack ;">Brisk Walking</h4>
                     <p style="color: black; margin: 0; font-size: 15px;">30 minutes daily helps improve insulin sensitivity and lowers blood sugar levels.</p>
                  </div>
               </div>

               <!-- Exercise 2 -->
               <div class="exercise-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                  <div style="padding: 20px; text-align: center;">
                     <div style="font-size: 50px; color: #2e8b57; margin-bottom: 10px;">🧘‍♀️</div>
                     <h4 style="margin: 0 0 10px; coloblack ;">Yoga</h4>
                     <p style="color: #666; margin: 0; font-size: 15px;">Specific asanas like Dhanurasana help stimulate pancreas function.</p>
                  </div>
               </div>

               <!-- Exercise 3 -->
               <div class="exercise-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                  <div style="padding: 20px; text-align: center;">
                     <div style="font-size: 50px; color: #2e8b57; margin-bottom: 10px;">🏊‍♂️</div>
                     <h4 style="margin: 0 0 10px; coloblack ;">Swimming</h4>
                     <p style="color: black; margin: 0; font-size: 15px;">Full-body workout that's easy on joints while effectively managing glucose levels.</p>
                  </div>
               </div>

               <!-- Exercise 4 -->
               <div class="exercise-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                  <div style="padding: 20px; text-align: center;">
                     <div style="font-size: 50px; color: #2e8b57; margin-bottom: 10px;">🚴‍♀️</div>
                     <h4 style="margin: 0 0 10px; coloblack ;">Cycling</h4>
                     <p style="color: black; margin: 0; font-size: 15px;">30-45 minutes helps muscles use glucose more efficiently.</p>
                  </div>
               </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
               <p style="color: black; font-size: 15px; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                  <strong>Tip:</strong> Combine these exercises with A5 Herbal Supplement for optimal results.
                  Even 30 minutes of daily activity can significantly improve your blood sugar control.
               </p>
            </div>
         </div>
      </div>
   <?php } ?>
   <!-- f&Q -->
   <div class="section-7" id="faqs">
      <div class="faq-section" id="faqs">
         <h3 class="section-title" style="text-align:center;">FAQs</h3>
         <div class="faq-wrapper">
            <?php foreach ($product_faq as $key => $value) { ?>
               <div class="faq-item">
                  <button class="faq-question"><?php echo $key + 1; ?>.<?php echo $value->question ?></button>
                  <div class="faq-answer"><?php echo $value->answer; ?>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
      <?php include 'reviews.php' ?>
   </div>


   <!-- Add this modal at the bottom of your body -->
   <div class="modal fade" id="emailVerificationModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered    model-positioning" style="background-color:transparent !important;width:28%;">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Complete Your Order</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Update this part in your modal -->
            <div id="emailSection">
               <p>Please enter your Phone No. to continue:</p>
               <div class="mb-3">
                  <input type="tel" class="form-control" id="userPhone" name="user_phone" placeholder="10 digits required*" pattern="[0-9]{10}" required>
                  <div class="invalid-feedback">Please enter a valid 10-digit phone number</div>
               </div>
            </div>
               <div id="otpSection" style="display:none;">
                  <p>We've sent an OTP to your email. Please enter it below:</p>
                  <div class="mb-3">
                     <input type="text" class="form-control" id="userOTP" placeholder="Enter 6-digit OTP" maxlength="6">
                     <div class="invalid-feedback">Please enter the 6-digit OTP</div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" id="verifyEmailBtn" class="btn btn-primary">Send OTP</button>
               <button type="button" id="verifyOTPBtn" class="btn btn-success" style="display:none;">Verify & Continue</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Next Modal -->
   <div class="modal fade" id="nextStepModal" tabindex="-1" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered  model-positioning-address" style="max-width: 450px; background-color:transparent !important ; ">
         <div class="modal-content" style="width:80%;">
            <div class="modal-header bg-success text-white py-2">
               <h6 class="modal-title mb-0">📍 Delivery Address</h6>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
               <form id="addressForm" class="needs-validation" novalidate>
                  <div class="row g-2">
                     <!-- Compact Name Fields -->
                     <div class="col-12">
                        <div class="input-group">
                           <input type="text" class="form-control form-control-sm" placeholder="First name*" required>
                           <input type="text" class="form-control form-control-sm" placeholder="Last name*" required>
                        </div>
                     </div>

                     <!-- Contact -->
                     <div class="col-12">
                        <input type="email" class="form-control form-control-sm" placeholder="Email*"  required>
                        <div class="invalid-feedback">email</div>
                     </div>

                     <!-- Address Type Toggle -->
                     <!-- <div class="col-12">
              <div class="btn-group btn-group-sm w-100" role="group">
                <input type="radio" class="btn-check" name="addressType" id="homeAddress" checked>
                <label class="btn btn-outline-success" for="homeAddress">Home</label>
                <input type="radio" class="btn-check" name="addressType" id="workAddress">
                <label class="btn btn-outline-success" for="workAddress">Work</label>
              </div>
            </div> -->

                     <!-- Location Fields -->
                      
                     <div class="col-5">
                        <input type="text" class="form-control form-control-sm" placeholder="Pincode*" pattern="[0-9]{6}" required>
                     </div>
                     <div class="col-7">
                        <input type="text" class="form-control form-control-sm" placeholder="City*" required>
                     </div>

                     <div class="col-12">
                        <input type="text" class="form-control form-control-sm" placeholder="State*" required>
                     </div>

                     <!-- Full Address -->
                     <div class="col-12">
                        <textarea class="form-control form-control-sm" rows="2" placeholder="Full address (House no, area)*" required></textarea>
                     </div>
                  </div>
               </form>
            </div>
            <div class="modal-footer py-2">
               <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-sm btn-success" id="saveCompactAddress">Continue</button>
            </div>
         </div>
      </div>
   </div>

</body>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   </script>

<script>
   document.addEventListener("DOMContentLoaded", function() {
      // ------------------ Image Thumbnail Switch ------------------
      const thumbs = document.querySelectorAll('.thumbs img');
      const mainImage = document.getElementById('main-image');
      thumbs.forEach(img => {
         img.addEventListener('click', function() {
            mainImage.src = this.src;
            thumbs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
         });
      });

      // ------------------ AOS Animation Init ------------------
      AOS.init({
         duration: 1000,
         once: true
      });

      // ------------------ Intersection Animations ------------------
      const observeWithDelay = (selector, visibleClass, delayStep = 200, threshold = 0.3) => {
         const items = document.querySelectorAll(selector);
         const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, index) => {
               if (entry.isIntersecting) {
                  setTimeout(() => {
                     entry.target.classList.add(visibleClass);
                  }, index * delayStep);
                  observer.unobserve(entry.target);
               }
            });
         }, {
            threshold
         });

         items.forEach(item => observer.observe(item));
      };

      observeWithDelay('.benefit-card', 'visible', 200, 0.3);
      observeWithDelay('.section-3 .benefit-image, .section-3 .benefit-text', 'benefit-visible', 200, 0.2);
      observeWithDelay('.section-4 .section-title, .section-4 h4', 'section-4-visible', 150, 0.3);

      // ------------------ Tab Switching and Scroll ------------------
      const tabs = document.querySelectorAll('.tab-item');
      tabs.forEach(tab => {
         tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const targetId = tab.getAttribute('data-target') || tab.textContent.trim().toLowerCase();
            const target = document.getElementById(targetId);
            if (target) {
               window.scrollTo({
                  top: target.offsetTop - 100,
                  behavior: 'smooth'
               });
            }
         });
      });

      // ------------------ FAQ Toggle ------------------
      document.querySelectorAll(".faq-question").forEach(button => {
         button.addEventListener("click", () => {
            const answer = button.nextElementSibling;
            button.classList.toggle("active");
            answer.classList.toggle("open");
         });
      });

      const toggleButton = document.getElementById("toggle-faq");
      if (toggleButton) {
         let expanded = false;
         toggleButton.addEventListener("click", () => {
            expanded = !expanded;
            document.querySelectorAll(".faq-item.hidden").forEach(item => {
               item.style.display = expanded ? "block" : "none";
            });
            toggleButton.textContent = expanded ? "Show Less" : "Read More";
         });

         document.querySelectorAll(".faq-item.hidden").forEach(item => {
            item.style.display = "none";
         });
      }
   });
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // OTP Verification Flow
    const verifyEmailBtn = document.getElementById('verifyEmailBtn');
    const verifyOTPBtn = document.getElementById('verifyOTPBtn');
    const emailSection = document.getElementById('emailSection');
    const otpSection = document.getElementById('otpSection');
    const userPhone = document.getElementById('userPhone');
    const userOTP = document.getElementById('userOTP');

    // Phone number validation
    userPhone.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '').slice(0, 10);
        this.classList.remove('is-invalid');
    });

    // OTP input validation
    userOTP.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '').slice(0, 6);
        this.classList.remove('is-invalid');
    });

    // Send OTP button click handler
    verifyEmailBtn.addEventListener('click', function() {
        // Validate phone number
        if (!userPhone.value || userPhone.value.length !== 10) {
            userPhone.classList.add('is-invalid');
            return;
        }
        
        // Show loading state
        verifyEmailBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
        verifyEmailBtn.disabled = true;
        
        // Send phone to server
        $.ajax({
            url: '<?= base_url("Alternative_flow/verify_ambrosia_user") ?>',
            type: 'POST',
            data: { phone: userPhone.value },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Switch to OTP input
                    emailSection.style.display = 'none';
                    otpSection.style.display = 'block';
                    verifyEmailBtn.style.display = 'none';
                    verifyOTPBtn.style.display = 'block';
                } else {
                    showError(response.message || 'Failed to send OTP. Please try again.');
                }
            },
            error: function(xhr, status, error) {
                let errorMsg = 'Network error. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
                showError(errorMsg);
            },
            complete: function() {
                verifyEmailBtn.innerHTML = 'Send OTP';
                verifyEmailBtn.disabled = false;
            }
        });
    });
    
    // Verify OTP button click handler
    verifyOTPBtn.addEventListener('click', function() {
        if (!userOTP.value || userOTP.value.length !== 6) {
            userOTP.classList.add('is-invalid');
            return;
        }
        
        // Show loading state
        verifyOTPBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying...';
        verifyOTPBtn.disabled = true;
        
        // Verify OTP with server
        $.ajax({
            url: '<?= base_url("Alternative_flow/verify_ambrosia_user_otp") ?>',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ 
                email: '', // You might want to collect email or adjust controller
                otp: userOTP.value 
            }),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Close modal and show address form
                    bootstrap.Modal.getInstance(document.getElementById('emailVerificationModal')).hide();
                    $('#nextStepModal').modal('show');
                } else {
                    showError(response.message || 'Invalid OTP. Please try again.');
                }
            },
            error: function(xhr, status, error) {
                let errorMsg = 'Network error. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
                showError(errorMsg);
            },
            complete: function() {
                verifyOTPBtn.innerHTML = 'Verify & Continue';
                verifyOTPBtn.disabled = false;
            }
        });
    });
    
    // Function to show error messages
    function showError(message) {
        // You can replace this with a more elegant error display
        alert(message);
        
        // Alternative: Show error in a dedicated div
        // const errorDiv = document.getElementById('error-message');
        // errorDiv.textContent = message;
        // errorDiv.style.display = 'block';
        // setTimeout(() => errorDiv.style.display = 'none', 5000);
    }
    
    // Reset form when modal is closed
    $('#emailVerificationModal').on('hidden.bs.modal', function() {
        emailSection.style.display = 'block';
        otpSection.style.display = 'none';
        verifyEmailBtn.style.display = 'block';
        verifyOTPBtn.style.display = 'none';
        userPhone.value = '';
        userOTP.value = '';
        userPhone.classList.remove('is-invalid');
        userOTP.classList.remove('is-invalid');
    });
    
    // Address form submission
    document.getElementById('saveCompactAddress').addEventListener('click', function() {
        const form = document.getElementById('addressForm');
        
        if (form.checkValidity()) {
            // Collect all form data
            const formData = {
                firstName: form.querySelector('input[placeholder="First name*"]').value,
                lastName: form.querySelector('input[placeholder="Last name*"]').value,
                email: form.querySelector('input[placeholder="Email*"]').value,
                pincode: form.querySelector('input[placeholder="Pincode*"]').value,
                city: form.querySelector('input[placeholder="City*"]').value,
                state: form.querySelector('input[placeholder="State*"]').value,
                address: form.querySelector('textarea').value
            };

            // Show loading state
            const btn = this;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
            btn.disabled = true;

            // Send data to server via AJAX
            $.ajax({
                url: '<?= base_url("Alternative_flow/save_address") ?>',
                type: 'POST',
                dataType: 'json',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Redirect to payment
                      console.log("User ID:", response.user_id); // Specif
                     console.log(response.userId   );
                        window.location.href = "<?= base_url('alternative_payment_function') ?>?user_id=" + response.user_id;
                    } else {
                        showError(response.message || 'Failed to save address. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    let errorMsg = 'Network error. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMsg = xhr.responseJSON.message;
                    }
                    showError(errorMsg);
                },
                complete: function() {
                    btn.innerHTML = 'Continue';
                    btn.disabled = false;
                }
            });
        } else {
            form.classList.add('was-validated');
        }
    });
});
</script>
<script>
   document.getElementById('saveCompactAddress').addEventListener('click', function() {
      const form = document.getElementById('addressForm');
      
      if (form.checkValidity()) {
         // Collect all form data
         // const user_id = "<= $this->session->userdata('user_id') ?>";
         const formData = {
               firstName: form.querySelector('input[placeholder="First name*"]').value,
               lastName: form.querySelector('input[placeholder="Last name*"]').value,
               email: form.querySelector('input[placeholder="Email*"]').value,
               pincode: form.querySelector('input[placeholder="Pincode*"]').value,
               city: form.querySelector('input[placeholder="City*"]').value,
               state: form.querySelector('input[placeholder="State*"]').value,
               address: form.querySelector('textarea').value
               phone: userPhone.value
               // user_id: user_id
         };

         // formData.user_id = user_id;
         // Show loading state
         const btn = this;
         btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
         btn.disabled = true;
         // Send data to server via AJAX
         $.ajax({
               url: '<?= base_url("Alternative_flow/save_address") ?>',
               // url: '<= base_url("Alternative_flow/get_user_id") ?>',
               type: 'POST',
               dataType: 'json', // Expect JSON response
               data: formData,
               success: function(response) {
                  if (response.success) {
                     // Hide modal and redirect
                     console.log("Full response:", response); // Log entire response
                     console.log("User ID:", response.user_id); // Specif
                     console.log(response.userId   );
                     bootstrap.Modal.getInstance(document.getElementById('nextStepModal')).hide();
                     window.location.href = "<?= base_url('alternative_payment_function') ?>?user_id=" + response.user_id;

                  } else {
                     alert('Error saving address: ' + (response.message || 'Unknown error'));
                  }
               },
               error: function(xhr, status, error) {
                  console.error("AJAX Error:", status, error);
                  alert('Network error. Please try again.');
               },
               complete: function() {
                  // Reset button state
                  btn.innerHTML = 'Continue';
                  btn.disabled = false;
               }
         });
      } else {
         form.classList.add('was-validated');
      }
   });
</script>
