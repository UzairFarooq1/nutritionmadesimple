<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>

<body>
<?php
include 'menu.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_6.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Contact us</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section bg-light">
<div class="container">
<div class="row no-gutters justify-content-center">
<div class="col-md-12">
<div class="wrapper">
<div class="row g-0">
<div class="col-lg-6 order-lg-last">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3>Contact us</h3>
<p class="mb-4">Feel Free To Reach Out! We Will Get In Touch Shortly!</p>
<div class="row mb-4">
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Email:</span><a href="mailto:rdbenazir@nutritionmadesimple.uk">enquiries@nutritionmadesimple.uk</a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">

</div>


<p></div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Phone:</span> <a href="tel:+44 7460 817116">+44 7518 526921</a></p>
      </div>
      </div>
<div class="w-500 social-media mt-15">
<h3>Follow us here</h3>
<p>
<a href="https://www.facebook.com/profile.php?id=61555583855023">Facebook</a>

<a href="https://www.instagram.com/nutritionmadesimple23?igsh=NDlkdzN2bTRuYzIz&utm_source=qr">Instagram</a>
</p>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>
<div class="container-xl">
<div class="row g-lg-5">
<div class="col-md-6 d-flex align-items-center order-lg-last pl-lg-5">
<div class="heading-section heading-section-white" data-aos="fade-up">

<h2 class="mb-2">Your Trusted Dietitian</h2>
<p style= font-size:120%;>Get started with a free discovery call to discuss further about your goals and how we can help you reach them. We will also find the best dietitian fit on our team to suit your needs</p>
<div class="row mt-md-5">
<div class="col-lg-12">
<div class="services-3 d-flex w-100">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-plan"></span>
</div>
<div class="text ps-4">
<h2>Weight Management Programs</h2>
<p style= font-size:120%;>Designed weight loss or weight gain programs tailored to individual needs, incorporating both diet and lifestyle recommendations.</p>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="services-3 d-flex w-100">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-dairy-products"></span>
</div>
<div class="text ps-4">
<h2>Nutritional Counseling</h2>
<p style= font-size:120%;>Offer one-on-one consultations to discuss and address clients' unique health concerns and challenges.</p>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="services-3 d-flex w-100">
<div class="icon d-flex align-items-center justify-content-center">
<span class="flaticon-diet-1"></span>
</div>
<div class="text ps-4">
<h2>Nutrition Workshops &amp;Seminars</h2>
<p style= font-size:120%;>Conduct educational sessions for groups, schools, or community organizations to raise awareness about the importance of good nutrition.</p>



</div>
</div>
</div>
</div>
</div>
</div>


<!-- onsubmit="return validateForm();" -->
<div class="col-md-6 d-flex align-items-center">
<form action="sendmail.php" method="POST" target="hidden_iframe" class="appointment" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
<span class="subheading">Drop A Message</span>
<h2 class="mb-4 appointment-head">Book a Free Discovery Call!</h2>
<!-- <script type="text/javascript">var submitted=false;</script> -->
    
    <!--Update the URL for thank you page on form submit -->
    <!-- <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"      
    
    onload="if(submitted) {window.location='thankyou.php';}"></iframe> 
     -->
    <!-- Update the Google forms URL in action-->



<div class="row">
<div class="col-md-12 col-lg-6">
<div class="form-group">
<label for="name">Your Full Name</label>
<input class="form-control" type="text" placeholder="Name" id="name" required name="name">
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="form-group">
<label for="email">Email Address</label>
<input  class="form-control" type="email" placeholder="Email" id="email" required name="email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="phone">Phone Number</label>

<input class="form-control" type="phone" placeholder="Phone" id="phone" required name="phone">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="message">Message</label>
<textarea  id="message" cols="30" rows="7" class="form-control" placeholder="Message" required name="message" ></textarea>

</div>
</div>
<div class="w3-section">
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="submitForm">SEND</button>
      </div>


</div>
</div>
</form>
<script type="text/javascript">
    function validateName() {
            var name = document.getElementById('name').value;
            if(name.length == 0) {
              alert("Name can't be blank") ;
              return false;

            }
            if (!name.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
              alert("Please enter your correct name") ;//Validation Message
              return false;
            }
            return true;
          }
          function validateEmail () {

var email = document.getElementById('email').value;
if(email.length == 0) {
  alert("Email can't be blank") ;//Validation Message
  return false;

}

if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
  alert("Please enter a correct email address") ;//Validation Message
  return false;

}

return true;

}


          function validatePhone() {
            var phone = document.getElementById('phone').value;
            if(phone.length == 0) {
              alert("Phone number can't be blank") ;//Validation Message
              return false;
            }

            if(!phone.match(/^\+\d{1,4}\d{10}$/)) {
             alert("Please enter a correct phone number") ;//Validation Message
             return false;
           }

           return true;

         }

         

function validateMessage() {
            var message = document.getElementById('message').value;
            if(message.length == 0) {
              alert("Message can't be blank") ;
              return false;

            }
            if (!message.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
              alert("Please enter your correct Message") ;//Validation Message
              return false;
            }
            return true;
          }



        function validateForm() {
          if (!validateName() || !validateEmail() || !validatePhone() || !validateMessage()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        </script>
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var messageText = "<?= $_SESSION['status'] ?? '' ?>"; 
    if (messageText != '') {
      Swal.fire({
        title: "Thank you",
        text: messageText,
        icon: "success"
      });
      <?php unset ($_SESSION['status']);?>
    }


</script>


<?php
include 'footer.php';
?>


<?php
include 'copyrights.php';
?>
