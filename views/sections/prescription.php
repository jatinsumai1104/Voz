<?php 

require_once(__DIR__.'/../../helper/init.php');
$_SESSION['current_page'] = "About Us";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');

$res = $di->
?>
    <!-- about us part start-->
    <!-- <section class="about_us single_about_padding" style="margin-bottom: 60px"> -->
        <div class="container-fluid">
            <div id="print_prescription">
                <table class="table table-bordered">
                        <tr>
                            <th >Name:</th>
                            <th >Gender:</th>
                        </tr>
                        <tr>
                            <td>Symptoms</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Diagnosis</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Prescription</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Advice</td>
                            <td></td>
                        </tr>             
                </table>
            </div>
    <!-- </section> -->
    <!-- about us part end-->

<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script>
    var doc = new jsPDF();
    console.log($("#print_prescription").html());
    doc.fromHTML($("#print_prescription").html(),10,10);
    // doc.addPage();
    // doc.fromHTML($("#print_prescription").html(),10,10);
    doc.save('tp.pdf');    
</script>