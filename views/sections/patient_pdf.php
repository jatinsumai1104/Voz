<?php
require_once(__DIR__.'/../../helper/init.php');
$_SESSION['current_page'] = "Patient History";
Session::setSession("patient_id",1);
?>
<div id="printing_it">
<?php
    $res = $di->get("Patient")->getPreviousRecords(Session::getSession("patient_id"));
    echo "<div>".$res[0]['symptoms']."</div><div>".$res[0]['diagonsis']."</div>";
?>
</div>
<?php  
    require_once('../includes/scripts.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script>
    var doc = new jsPDF();
    doc.fromHTML($("#printing_it").html(),10,10);
    doc.addPage();
    doc.fromHTML($("#printing_it").html(),10,10);
    doc.save('tp.pdf');    
</script>