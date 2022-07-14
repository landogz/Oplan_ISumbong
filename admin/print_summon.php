<?php error_reporting(0); 
?>
<?php 
      include 'connections/database.php';
     
    

     if(isset($_GET['ref']))
     {      
          $reference = $_GET['ref'];
          $sql = "SELECT *,table_summon.Name as `Res_Name`,table_sumbong.Name as `Com_Name` FROM table_sumbong INNER JOIN table_summon ON table_sumbong.Reference = table_summon.Reference where table_sumbong.Reference = '$reference'";
          $results = mysqli_query($conn, $sql);
           if (mysqli_num_rows($results) > 0) {
                   while($row = mysqli_fetch_array($results))
                       {
                           $Complainant=$row['Com_Name'];
                           $Respondent=$row['Res_Name'];
                           $subject=$row['Subject'];
                          $datesummon = date_format(date_create($row['DateTime']),"F d, Y h:i a");
                         }
           }
           else{
              
                echo "<script type='text/javascript'>window.top.location='complaints';</script>";
             }


     
   }
     else{
                echo "<script type='text/javascript'>window.top.location='complaints';</script>";
     }
       
       
?>


<!DOCTYPE html>
<html lang="en">
    
<head>

        <meta charset="utf-8" />
        <title>Online Oplan ISumbong Natin HelpDesk System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/img-6.png">


        <!-- Plugins css -->
        <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />


        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout-color="light" data-layout-size="fluid" data-topbar-color="dark" data-leftbar-position="fixed">

        <!-- Begin page -->
        <div id="wrapper">

                    <?php include 'assets/subpage/logged.php'; ?>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown ">
                                    <a class="nav-link arrow-none" href="dashboard" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-view-dashboard me-1"></i> Dashboard
                                    </a>
                                </li>

                                <li class="nav-item dropdown active">
                                    <a class="nav-link arrow-none" href="complaints" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-clipboard-list me-1"></i> List of Complaints
                                    </a>                        
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="summon" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-calendar-clock me-1"></i> Schedule of Summon
                                    </a>
                        
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="reports" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-clipboard-list-outline me-1"></i> Reports
                                    </a>
                        
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="accounts" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-shield-account me-1"></i> Accounts
                                    </a>
                        
                                </li>

                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <div class="container">
                   <!-- Start Content-->
                   <div class="container-fluid">
                      <div class="row">
                         <div class="col-md-12">
                            <div class="card">
                               <div class="card-body">
                                  <div class="panel-body">
                                     <div class="clearfix">
                                        <div class="float-start">
                                           <h3>OFFICE OF THE LUPONG TAGAPAMAYAPA</h3>
                                        </div>
                                        <div class="float-end">
                                           <h4>Barangay Case # <br>
                                              <strong> <?php echo $reference; ?></strong>
                                           </h4>
                                        </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                        <div class="col-md-12">
                                           <div class="float-start mt-3">
                                              <address>
                                                 <strong style="
                                                    text-decoration: underline;
                                                    "> <?php echo $Complainant; ?></strong><br>Complainant<br>Against<br>
                                                 <strong style="
                                                    text-decoration: underline;
                                                    "> <?php echo $Respondent; ?></strong> <br> Respondent
                                              </address>
                                           </div>
                                           <div class="float-end mt-3">
                                              <p><strong>For :</strong> <?php echo $subject; ?></p>
                                           </div>
                                        </div>
                                        <!-- end col -->
                                     </div>
                                     <div class="row">
                                        <div class="col-md-12 text-center">
                                           <h3>SUMMONS</h3>
                                        </div>
                                        <!-- end col -->
                                     </div>
                                     <!-- end row -->
                                     <div class="row">
                                        <div class="col-md-12">
                                           <div class="float-start mt-3">
                                              <address><strong style="
                                                 text-decoration: underline;
                                                 "> <?php echo $Respondent; ?></strong> <br> Respondent
                                              </address>
                                           </div>
                                        </div>
                                        <p class="text-muted">You are hereby summoned to appear before me in person, together with your witnesses, on the <?php echo $datesummon; ?>, then and there to answer to a complaint made before me for mediation/conciliation of your dispute with complainant/s</p>
                                        <p class="text-muted">
                                           You are hereby warned that if you refuse or willfully fail to appear in obedience to this summons, you may be barred from filing any counterclaim arising from the said complaint.
                                           FAIL NOT or else faces punishment for contempt of court.
                                        </p>
                                        <!-- end col -->
                                     </div>
                                     <br><br>
                                     <div class="row">
                                        <div class="float-end mt-3">
                                           <h3 class="text-end">_______________</h3>
                                           <p class="text-end">Punong Barangay/Lupon Chairman</p>
                                        </div>
                                     </div>
                                     <hr>
                                     <div class="d-print-none">
                                        <div class="float-end">
                                           <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end row -->        
                   </div>
                   <!-- container-fluid -->
                </div>

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; All right reserved, ONLINE OPLAN ISUMBONG NATIN HELPDESK SYSTEM. BARANGAY PALANGINAN IBA ZAMBALES</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

          <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

          <!--Morris Chart-->
        <script src="assets/libs/morris.js06/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Validation init js-->
        <script src="assets/js/pages/form-validation.init.js"></script>

  
        <!-- Dashboar init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>


        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        <script type="text/javascript">
          var timeleft = 1;
          var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
              window.print();
              clearInterval(downloadTimer);
              // window.location.href = "complaints";

            }
            timeleft -= 1;
          }, 1000);

        </script>
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 10:01:58 GMT -->
</html>