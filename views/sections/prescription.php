<?php 

require_once(__DIR__.'/../../helper/init.php');
$_SESSION['current_page'] = "About Us";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');

?>
    <!-- about us part start-->
    <!-- <section class="about_us single_about_padding" style="margin-bottom: 60px"> -->
        <div class="container-fluid">
            <div id="HTMLtoPDF">
                <table class="table table-bordered">
                        <tr>
                            <th>Prescription by Voz</th>
                            <th> </th>
                        </tr>
                        <tr>
                            <th >Name: Jatin Sumai</th>
                            <th >Gender: Male</th>
                        </tr>
                        <tr>
                            <th>Age: 21</th>
                            <th>Date: 18-01-2020</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
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
        </div>
        <a href="#" onclick="HTMLtoPDF()">Download</a>
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
<script>
    function HTMLtoPDF(){
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#HTMLtoPDF')[0];
        specialElementHandlers = {
            '#bypassme': function(element, renderer){
                return true
            }
        }
        margins = {
            top: 50,
            left: 60,
            width: 545
        };
        pdf.fromHTML(
            source // HTML string or DOM elem ref.
            , margins.left // x coord
            , margins.top // y coord
            , {
                'width': margins.width // max width of content on PDF
                , 'elementHandlers': specialElementHandlers
            },
            function (dispose) {
            // dispose: object with X, Y of the last line add to the PDF
            //          this allow the insertion of new lines after html
                pdf.save('html2pdf.pdf');
            }
        )		
    }
</script>