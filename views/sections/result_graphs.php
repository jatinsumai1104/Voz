<?php 
$_SESSION['current_page'] = "Results";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>

<section class="about_us single_about_padding col-md-6"  style="margin: 50px;padding-top: 50px;width: 600px;height: 450px" id="graph_section">
</section>

<?php 
require_once('../includes/footer.php');
?>

<?php
require_once('../includes/scripts.php');
?>
<script src="<?php echo BASEASSETS;?>js/custom/js_for_graph.js"></script>
<script>
  getGraphs(<?php
    $count = 1;
    if(isset($_POST) && count($_POST) >= 1){
      $count = count($_POST);
    }
    echo $count;
  ?>);
</script>