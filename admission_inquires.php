<?php
$pageTitle = "Education Website";

include_once('config.php');

$sql1 = "select * from admission_inquires";
$execute1 = $conn->query($sql1);
$srno = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('includes/head.php'); ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once('includes/nav.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once('includes/sidebar.php'); ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Contact Inquires</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Contact Inquires</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Inquiry</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width:20px">#</th>
                                                <th>Name</th>
                                                <th>Inquery Date</th>
                                                <th>Intrustad Course</th>
                                                <th>Whatsapp Number</th>
                                                <th>Mobile Number</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $execute1->fetch_assoc()) {
                                                echo '  
                                                        <tr>
                                                            <td>' . $srno++ . '</td>
                                                            <td>' . $row['full_name'] . '</td>
                                                            <td>' . $row['created_at'] . '</td>
                                                            <td>' . $row['course'] . '</td>
                                                            <td>' . $row['whatsapp_number'] . '</td>
                                                            <td>' . $row['mobile_number'] . '</td>
                                                            <td>' . $row['gender'] . '</td>
                                                            <td class="text-center">
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <button 
                                                                        class="btn btn-xs btn-default btnView" 
                                                                        data-full_name="' . $row['full_name'] . '" 
                                                                        data-course="' . $row['course'] . '" 
                                                                        data-gender="' . $row['gender'] . '" 
                                                                        data-dob="' . $row['dob'] . '" 
                                                                        data-aadhar_number="' . $row['aadhar_number'] . '" 
                                                                        data-whatsapp_number="' . $row['whatsapp_number'] . '" 
                                                                        data-mobile_number="' . $row['mobile_number'] . '" 
                                                                        data-address="' . $row['address'] . '" 
                                                                        data-taluka="' . $row['taluka'] . '" 
                                                                        data-district="' . $row['district'] . '" 
                                                                        data-date="' . $row['created_at'] . '" 
                                                                        data-toggle="modal" 
                                                                        data-target="#deleteConformation">
                                                                            <i class="fas fa-eye"></i>
                                                                        </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                            
                                                    ';
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Inquery Date</th>
                                                <th>Intrustad Course</th>
                                                <th>Whatsapp Number</th>
                                                <th>Mobile Number</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- modal for view -->
        <div class="modal fade" id="modal-view">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"> <span id="v-full_name"></span></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <b>Gender :</b> <span id="v-gender"></span>
                                </div>
                                <div class="col-6">
                                    <b>Date of birth :</b> <span id="v-dob"></span>
                                </div>
                                <hr />
                                <div class="col-12">
                                    <b>Intrustad Course :</b> <span id="v-course"></span>
                                </div>
                                <div class="col-6">
                                    <b>Whatsapp Number :</b> <span id="v-whatsapp_number"></span>
                                </div>
                                <div class="col-6">
                                    <b>Mobile Number :</b> <span id="v-mobile_number"></span>
                                </div>
                                <div class="col-12">
                                    <b>address :</b> <span id="v-address"></span>
                                </div>
                                <div class="col-6">
                                    <b>Taluka :</b> <span id="v-taluka"></span>
                                </div>
                                <div class="col-6">
                                    <b>District :</b> <span id="v-district"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </form>
        </div>
        <!-- /.modal for view -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php include_once('includes/footer.php'); ?>
        <?php include_once('includes/footerjs.php'); ?>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                    "searching": true
                });
            });
            $(document).on('click', '.btnView', function() {
                var full_name = $(this).data("full_name");
                var course = $(this).data("course");
                var gender = $(this).data("gender");
                var dob = $(this).data("dob");
                var aadhar_number = $(this).data("aadhar_number");
                var whatsapp_number = $(this).data("whatsapp_number");
                var mobile_number = $(this).data("mobile_number");
                var address = $(this).data("address");
                var taluka = $(this).data("taluka");
                var district = $(this).data("district");
                $("#v-full_name").html(full_name);
                $("#v-course").html(course);
                $("#v-gender").html(gender);
                $("#v-dob").html(dob);
                $("#v-aadhar_number").html(aadhar_number);
                $("#v-whatsapp_number").html(whatsapp_number);
                $("#v-mobile_number").html(mobile_number);
                $("#v-address").html(address);
                $("#v-taluka").html(taluka);
                $("#v-district").html(district);
                $('#modal-view').modal('show');
            });
        </script>
    </div>
    <!-- ./wrapper -->
</body>

</html>