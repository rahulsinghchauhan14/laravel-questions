<?php include('common/header.php'); ?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/contac_us_banner.jpg');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
         <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
         </div>
      </div>
   </div>
</div>
<section class="ftco-section contact-section ftco-degree-bg">
   <div class="container">
      <div class="row d-flex mb-5 contact-info">
         <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
         </div>
         <div class="w-100"></div>
         <div class="col-md-3">
            <p><span><b>Address:</b></span> <?= $address; ?></p>
         </div>
         <div class="col-md-3">
            <p><span><b>Phone:</b></span> <a href="tel:<?= $phoneNumber; ?>"><?= $phoneNumber; ?></a></p>
         </div>
         <div class="col-md-3">
            <p><span><b>Email:</b></span> <?= $email; ?></p>
         </div>
         <div class="col-md-3">
            <p><span><b>Website: </b></span> <a href="#"><?= $websiteName; ?></a></p>
         </div>
      </div>
      <div class="row block-9">
         <div class="col-md-6 pr-md-5">
            <form class="p-5 bg-white" id="" method="post" action="#"> 
               <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
               </div>
               <div class="form-group">
                  <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
               </div>
               <div class="form-group">
                  <input type="text" name="phone" placeholder="Phone Number" id="phone" class="form-control">
               </div>
               <div class="form-group">
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
               </div>
               <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                   <span id="contactError" style="color:red;"></span>
               </div>
            </form>
         </div>
         <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.8558314460042!2d-77.33380108528134!3d34.73402818894124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89a91b29c566f9a9%3A0xb15f4c099f49fdf4!2s2683+Idlebrook+Cir%2C+Midway+Park%2C+NC+28544%2C+USA!5e0!3m2!1sen!2sin!4v1551083846402" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
</section>
<?php include('common/footer.php'); ?>
<script>
   $("form").submit(function(e){
       e.preventDefault();
       let dataForm = $( this ).serialize(); 
      
       $.ajax({
           type:'POST',
           url:'submit.php',
           data:dataForm,
           success:function(data){
               if(data=='1' || data==1){
                   alert("Thank you. Our team will contact you shortly!");
                   window.location.href='/';
               }else{
                   $("#contactError").html(data);
               }
           }
       });
   });
</script>