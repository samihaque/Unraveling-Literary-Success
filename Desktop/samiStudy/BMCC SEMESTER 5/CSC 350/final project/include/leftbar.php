  <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title">Menu</li> -->

                <li>
                    <a href="index.php" class="waves-effect">
                        <!-- <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span> -->
                        <span><h3>User Dashboard</h3></span>
                    </a>
                 
                </li>
                
                

                <li class="menu-title">Rating Portal for Judges</li>


                <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span>Rating Form</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="judges_form.php">Form</a></li>  
                                    

                                    <?php 

                                    include("include/db.php");
                                    $usersession = $_SESSION['admin'];
                                    $user_permission=mysqli_query($db,"SELECT * FROM `login` where username = '$usersession'");
                                    $user_row_permission = mysqli_fetch_array($user_permission);
                                    if($user_row_permission['role'] == 'superadmin')
                                    {
                                    ?>
                                        <li><a href="judges_list.php">Rating List</a></li>
                                        <li><a href="group_rating.php">Group Rating Summary</a></li>
                                    <?php }
                                    ?>                  
                                </ul>
                            </li>
              
            </ul>
        </div>