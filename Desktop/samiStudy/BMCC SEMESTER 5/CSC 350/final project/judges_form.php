<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:auth-login.php");   
} 
?>
<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Judges Rating Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo/favicon.ico">

        <!-- select2 css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="light">

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?php include("include/header.php") ?>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <?php include("include/leftbar.php"); ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Judges Rating</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Judges Rating</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        
        
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <label for="Username">Group Members :</label>
                                                        <input id="productname" name="group_members" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Username">Group Number :</label>
                                                        <input id="productname" name="group_number" type="text" class="form-control" required>
                                                    </div>
                                                  
                                                    <div class="form-group">
                                                        <label for="Email">Project Title</label>
                                                        <input id="manufacturerbrand" name="project_title" type="text" class="form-control" required>
                                                    </div>



                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead class="thead-light">
                                                            <th></th>
                                                            <th scope="col">Developing(0-10)</th>
                                                            <th scope="col">Accomplished(11-15)</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Articulate requirements</td>
                                                                <td><input id="manufacturerbrand" name="dev_1" type="text" class="form-control" ></td>
                                                                <td><input id="manufacturerbrand" name="acc_1" type="text" class="form-control" ></td>
                                                                <!-- <td><input id="manufacturerbrand" name="dev_1" type="text" class="form-control" required></td>
                                                                <td><input id="manufacturerbrand" name="acc_1" type="text" class="form-control" required></td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Choose appropriate tools and methods for each task</td>
                                                                <td><input id="manufacturerbrand" name="dev_2" type="text" class="form-control" ></td>
                                                                <td><input id="manufacturerbrand" name="acc_2" type="text" class="form-control" ></td>
                                                                <!-- <td><input id="manufacturerbrand" name="dev_2" type="text" class="form-control" required></td>
                                                                <td><input id="manufacturerbrand" name="acc_2" type="text" class="form-control" required></td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Give clear and coherent orat presentation</td>
                                                                <td><input id="manufacturerbrand" name="dev_3" type="text" class="form-control" ></td>
                                                                <td><input id="manufacturerbrand" name="acc_3" type="text" class="form-control" ></td>
                                                                <!-- <td><input id="manufacturerbrand" name="dev_3" type="text" class="form-control" required></td>
                                                                <td><input id="manufacturerbrand" name="acc_3" type="text" class="form-control" required></td> -->
                                                            </tr>

                                                             <tr>
                                                                <td>Function well as a team</td>
                                                                <td><input id="manufacturerbrand" name="dev_4" type="text" class="form-control" ></td>
                                                                <td><input id="manufacturerbrand" name="acc_4" type="text" class="form-control" ></td>
                                                                <!-- <td><input id="manufacturerbrand" name="dev_4" type="text" class="form-control" required></td>
                                                                <td><input id="manufacturerbrand" name="acc_4" type="text" class="form-control" required></td> -->
                                                            </tr>
                                                            
                                                        </tbody>
                                                        
                                                    </table>
                                                    <div class="form-group">
                                                        <label for="Username">Judge's Name :</label>
                                                        <input id="productname" name="judge_name" type="text" class="form-control" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Username">Comments :</label>
                                                        <input id="productname" name="comments" type="text" class="form-control" required>
                                                    </div>
                  
                                                </div>
        
                                                
                                            </div>
        
                                            <button type="submit" name="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save</button>
                                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                                        </form>
                                        
        
                                    </div>
                                    <?php  
                                    include("include/db.php");

                                    if(isset($_POST['submit'])) 
                                    {
                                        $group_members = $_POST['group_members'];
                                        $group_number = $_POST['group_number'];
                                        $project_title = $_POST['project_title'];
                                        $judge_name = $_POST['judge_name'];
                                        $comments = $_POST['comments'];

                                        $dev_1 = $_POST['dev_1'];
                                        $dev_2 = $_POST['dev_2'];
                                        $dev_3 = $_POST['dev_3'];
                                        $dev_4 = $_POST['dev_4'];

                                        if(!$dev_1)
                                            $dev_1 = 0;
                                        if(!$dev_2)
                                            $dev_2 = 0;
                                        if(!$dev_3)
                                            $dev_3 = 0;
                                        if(!$dev_4)
                                            $dev_4 = 0;
                                        //$dev_avg =  ($dev_1 + $dev_2 + $dev_3 + $dev_4)/4;

                                        $acc_1 = $_POST['acc_1'];
                                        $acc_2 = $_POST['acc_2'];
                                        $acc_3 = $_POST['acc_3'];
                                        $acc_4 = $_POST['acc_4'];

                                        if(!$acc_1)
                                            $acc_1 = 0;
                                        if(!$acc_2)
                                            $acc_2 = 0;
                                        if(!$acc_3)
                                            $acc_3 = 0;
                                        if(!$acc_4)
                                            $acc_4 = 0;
                                        //$acc_avg =  ($acc_1 + $acc_2 + $acc_3 + $acc_4)/4;

                                        $total = ($dev_1 + $dev_2 + $dev_3 + $dev_4 + $acc_1 + $acc_2 + $acc_3 + $acc_4);

                                       // $sql =mysqli_query($db,"INSERT INTO judge_rate (group_members,group_number,project_title,judge_name,comments,dev_avg,acc_avg)VALUES('$group_members','$group_number','$project_title','$judge_name','$comments','$dev_avg','$acc_avg')");
                                        $sql =mysqli_query($db,"INSERT INTO judge_rate (group_members,group_number,project_title,judge_name,comments,total)VALUES('$group_members','$group_number','$project_title','$judge_name','$comments','$total')");




                                        ?>

                                        <div class="row">
                                                 <div class="col-sm-9">
                                                     <div class="card-box">
                                                                                     
                                                         <div class="card-body ">
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                    <thead class="thead-light">
                                                                        <!-- <th></th>
                                                                        <th scope="col">Developing(0-10)</th>
                                                                        <th scope="col">Accomplished(10-15)</th> -->
                                                                        <th scope="col">Total Grade </th>
                                                                        <th scope="col"><?php echo $total; ?></th>
                                                                    </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Note: This is what you Rated this Group</td>
                                                                <!-- <td><?php //echo $dev_avg; ?></td>
                                                                <td><?php //echo $acc_avg; ?></td> -->
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                         </div>
                                                     </div>
                                                 </div>
                                         </div>


                                        <div class="row">
                                                 <div class="col-sm-6">
                                                     <div class="card-box">
                                                                                     
                                                         <div class="card-body ">
                                                             <div class="alert alert-success">
                                                                 <strong>Rating Submitted Successfully!</strong>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                         </div>
                                        <?php 
                                    
                                    }

                                    ?>
                                </div>

                                
        
                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include("include/footer.php") ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
      
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- select 2 plugin -->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-select2.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>
