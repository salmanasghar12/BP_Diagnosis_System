<?php  require_once('../../private/initialize.php');
    require_patient_login();
    // this page will access only when patient is logged in
    $page_title = "View Report";
    require_once(getSharedFilePath('patient/header.php'));
    $patientId = loggedInPatientId();
    // grab all patient's appointments
    $appointments = Appointment::findConfirmedAppointmentsByPatientId($patientId);
    $prescriptions = Prescription::findPrescriptionsByPatientId($patientId);

    // print_array($appointments);
    // exit;

?>
<section class="main_content">
  <h1>Report</h1> <button onclick="printReport()" class="btn btn-danger">Print as PDF</button>
    <div id="report_content">
      <div class="card">
        <h4>Appointments Report</h4>
        <?php
        if(!$appointments){
          echo " <p>You have no any appointments</p> ";
        }else {

          foreach ($appointments  as $appointment) {
            echo "<p>* Appointment with <b>".$appointment->getDoctor()->getName()."</b> at ".$appointment->getDate()."/".$appointment->getTime()."   </p>";
          }

        }

        ?>
        <!-- <p>*** Appointment with DOCTOR_NAME at TIME</p> -->
      </div>
      <div class="card">
        <h4>Prescriptions Report</h4>
        <?php
        if(!$prescriptions){
          echo " <p>You don't asked for any prescription</p> ";
        }else {

          foreach ($prescriptions  as $prescription) {
            $prescriptionReport = "<p>* You Asked For Prescription <b>\"".$prescription->getSubject() ."\"</b>";
            $prescriptionReport .= " at ".$prescription->getCreatedOn();
            // if($prescription->getStatus() == Prescription::STATUS_ANSWERED){
            // $prescriptionReport .= ", That was replied by ".$prescription->getDoctorName();
            // }
            $prescriptionReport .= "</p>";
            echo $prescriptionReport;
          }

        }

        ?>

        <!-- <p>*** Asked For Prescription about  PROBLEM at TIME</p> -->
      </div>
    </div>



</section>


<script>
    var BODY = document.getElementsByTagName("body")[0];
    var bodyContent = BODY.innerHTML;
    var REPORT_CONTENT = document.getElementById("report_content").innerHTML;


    function printReport(){
        BODY.innerHTML = REPORT_CONTENT;
        window.print();
        BODY.innerHTML = bodyContent;
    }
</script>

<?php  require_once(getSharedFilePath('footer.php')); ?>
