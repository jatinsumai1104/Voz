<?php 

require_once(__DIR__.'/../../helper/init.php');
$_SESSION['current_page'] = "About Us";
require_once('../includes/header.php');
require_once('../includes/navigation.php');
require_once('../includes/header-bp.php');
?>

    <!-- about us part start-->
    <section class="about_us single_about_padding" style="margin-bottom: 60px">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-12">
                <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-cog"></i>  Manage Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Last Prescription Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $patients = $di->get("Doctor")->getPatientsList(Session::getSession("user_id"));
                                foreach($patients as $patient){
                            ?>
                            <tr>
                                <td><img src="<?php echo $patient['image']?>" alt=""></td>
                                <td><?php echo $patient['name']?></td>
                                <td><?php echo $patient['full_address']?></td>
                                <td><?php echo $patient['gender']?></td>
                                <td><?php echo $patient['email']?></td>
                                <td><?php echo $patient['dob']?></td>
                                <td><?php echo $patient['case_date']?></td>
                            </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

<?php 
require_once('../includes/footer.php');
require_once('../includes/scripts.php');
?>
<script>
    var table = $("#dataTable");
    table.DataTable();
</script>