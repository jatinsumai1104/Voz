<?php 

require_once(__DIR__.'/../../helper/init.php');
$res = $di->get("Patient")->getPatientData(Session::getSession("user_id"), $_GET["patient_id"]);

$doc_res = $res["doctor_details"];
unset($res["doctor_details"]);
$_SESSION['current_page'] = "Prescription History of ";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>

<section class="about_us single_about_padding" style="margin-bottom: 60px">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-12">

            <?php 
            if(count($res) >= 1){
              foreach($res as $case){ 
            ?>
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h2 class="m-0 font-weight-bold text-primary"><i class="fa fa-sticky-note-o"></i> Prescription - by <u><?php echo $doc_res["name"];?></u></h2>
                    <div>
                      <a href=" " class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mr-3"><i class="fa fa-envelope-o pr-2" aria-hidden="true"></i>Send Mail</a>
                      <a href=" " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-file-pdf-o pr-2" aria-hidden="true"></i>Download PDF</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                      <tr>
                              <th>Prescription created by VOZ</th>
                              <th> </th>
                          </tr>
                          <tr>
                              <td >Name: <u><?php echo $case["name"];?></u></td>
                              <td >Gender: <u><?php echo $case["gender"];?></u></td>
                          </tr>
                          <tr>
                              <td>Age: <u><?php echo $case["age"];?></u></td>
                              <td>Date: <u><?php echo date("Y-m-d");?></u></td>
                          </tr>
                          <tr>
                              <td>Symptoms</td>
                              <td><?php echo $case["symptoms"];?></td>
                          </tr>
                          <tr>
                              <td>Diagnosis</td>
                              <td><?php echo $case["diagnosis"];?></td>
                          </tr>
                          <tr>
                              <td>Prescription</td>
                              <td><?php echo $case["prescription"];?></td>
                          </tr>
                          <tr>
                              <td>Advice</td>
                              <td><?php echo $case["advice"];?></td>
                          </tr>             
                      </table>
                    </div>
                </div>
              </div>
            <?php }}else{
              echo "<h1 class='h3 mb-0 text-gray-800'> No History of Patient Available</h1>";
            } ?>
          </div>
        </div>
    </div>
</section>
        
    <!-- </section> -->
    <!-- about us part end-->

<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<!-- <script>
    var doc = new jsPDF();
    console.log($("#print_prescription").html());
    doc.fromHTML($("#print_prescription").html(),10,10);
    // doc.addPage();
    // doc.fromHTML($("#print_prescription").html(),10,10);
    doc.save('tp.pdf');    
</script> -->