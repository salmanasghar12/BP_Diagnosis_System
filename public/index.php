<?php  require_once('../private/initialize.php');
  $page_title =  "Home";
  require_once(getSharedFilePath('main/mainheader.php'));
?>
<style>
  .footer-distributed {
  background-color: #292c2f;
  box-sizing: border-box;
  width: 100%;
  padding: 55px 50px;
  margin-top: 100px; }
  .footer-distributed .footer-content .copyright p {
    color: rgba(255, 255, 255, 0.8); }
  .footer-distributed .footer-content .footer-left div {
    display: flex;
    align-items: center; }
  
</style>
<div class ="container">

    <img src= "home.jpg" class="img-fluid" alt="HOME">
     &nbsp; &nbsp;
  <div class="container card-group">
				<!-- Box -->
				<div class="card">
          <i align="center" class="main-card-icon fas fa-user-injured fa-5x "></i>
          <div class="card-body">
            <h4 align="center" class="card-title">Patient</h4>
            <a href="patient/login.php" style="margin:20px auto; text-align:center; display:block; width:120px;">Click Here</a>
          </div>
				</div>
				<div class="card">
          <i align="center" class="main-card-icon fas fa-user-md fa-5x"></i>
          <div class="card-body">
            <h4 align= "center" class="card-title">Doctor</h4>
            <a href="doctor/login.php" style="margin:20px auto; text-align:center; display:block; width:120px;" >Click Here</a>
          </div>
				</div>
				<div class="card">
          <i align="center" class="main-card-icon fas fa-users-cog fa-5x"></i>
          <div class="card-body">
            <h4 align="center" class="card-title">Admin</h4>
            <a href="admin/login.php" style="margin:20px auto; text-align:center; display:block; width:120px;">Click Here</a>
          </div>
				</div>
				<!-- Box -->
			</div>
	
&nbsp; &nbsp; &nbsp; &nbsp;
  <!-- Services -->

    <div class="container">

  <h2 align= "center">Our  Services</h2>
  &nbsp; &nbsp; &nbsp; 
        <div class="card-group">

        <div class="col-lg-5 col-md-6 mx-auto card">
          <h5>Ask For Prescriptions</h5>
                <p>Patients after logging in can ask for prescription that will be posted to the Doctor and as soon as the Doctor gives a reply, Patient readily receives it in his/her dashboard. </p>
                </div>
          
        <div class="col-lg-5 col-md-6 mx-auto service_col card">
        <h5>Book Appointment</h5>
                <p>Patients can easily book appointment with any doctor he/she wants.He/She can see the Doctor's detail and select accordingly.He/She will request for appointment where Doctor can approve on his ease on any specific date and time.</p>
              </div>
            </div>
            </div>
            
       



<?php require_once(getSharedFilePath('footer.php'));  ?>

<!-- 
 <footer class="footer-distributed">
<div class= "container" >
 
    &nbsp; &nbsp; <br>
    
        <h2>How we care for</h2>
        <h6>
        <p>
         Blood Pressure Diagnostics is an interactive portal for blood pressure Patients and Doctors where they can interact with each other.
         Patients can ask for prescription by uploading their details and also they can ask for appointment and Doctors can post prescriptions and confirm appointment and much more...... 
        </p>
      </h6>
  &nbsp; &nbsp; &nbsp; &nbsp;
  <h4>
      <p align="center"><i class="fa fa-envelope"></i>
        <a href="mailto:iamsalmanasghar@gmail.com"> Contact Us</a>
        &nbsp; &nbsp;
        <i class="fa fa-phone">+92 331 4548034</i> 
        <br></p>
      </h4>
      
    
      
<div class= "copyright col-11 col-sm-8 col-md-6 mx-auto text-center">
      <p>&copy; Copyright <?php echo date('Y'); ?>, All Rights Reserved </p>
    </div>
</div>

      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="<?php echo getScriptPath('main_script.js'); ?>"></script>
  </body>
</html>
 -->