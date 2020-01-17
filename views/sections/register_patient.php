<?php 
$_SESSION['current_page'] = "Register Patient";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Patient Details</h2>
        </div>
        <div class="col-lg-10">
          <form class="form-contact contact_form" action="<?php echo BASEURL?>helper/routing.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="form-contact contact_form">
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="form-control" name="gender" width="100%">
                      <option value="Male" selected>Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="dob" id="dob" type="date" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Date Of Birth'" placeholder='Enter Date Of Birth'>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  <input id="image" name="image" hidden>
                  <canvas id="myCanvas" width="400" height="350" style="border: 10px;display: none"></canvas>
                  <video onclick="snapshot(this);" id="video" width="100%" height="100%" controls autoplay></video>
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm btn_1" name="patient_register_through_doctor">Register</button>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  <script>
      //--------------------
      // GET USER MEDIA CODE
      //--------------------
      navigator.getUserMedia = ( navigator.getUserMedia ||
      navigator.webkitGetUserMedia ||
      navigator.mozGetUserMedia ||
      navigator.msGetUserMedia);

      var video;
      var webcamStream;
      startWebcam();
      function startWebcam() {
        if (navigator.getUserMedia) {
          navigator.getUserMedia (

              // constraints
              {
                video: true,
                audio: false
              },

              // successCallback
              function(localMediaStream) {
                  video = document.querySelector('video');
                  video.srcObject = localMediaStream;
                  webcamStream = localMediaStream;
              },

              // errorCallback
              function(err) {
                console.log("The following error occured: " + err);
              }
          );
        } else {
          console.log("getUserMedia not supported");
        }  
      }

      function stopWebcam() {
          webcamStream.stop();
      }
      var canvas, ctx;
      
      var image;
      function snapshot() {
        document.getElementById('video').style.display = 'none';
        canvas = document.getElementById("myCanvas");
        canvas.style.display = 'block';
        ctx = canvas.getContext('2d');

         // Draws current image from the video element into the canvas
        image = ctx.drawImage(video, 0,0, canvas.width, canvas.height);
        document.getElementById('image').value = canvas.toDataURL();
      }
      function checkDisease(){
        ctx = document.getElementById("myCanvas").getContext('2d');
        console.log(["Data", ctx.getImageData(0, 0, canvas.width, canvas.height)["data"]]);
      }

  </script>
<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');
?>