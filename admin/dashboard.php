<?php error_reporting(0); ?>
<?php
   require_once('connections/database.php');


   $getmonth = date("m");
   $sql_pros = "select count(*) as `Count` from table_sumbong";
        $results_pros = mysqli_query($conn, $sql_pros);

       if (mysqli_num_rows($results_pros) > 0) {
        while($row_cat = mysqli_fetch_array($results_pros))
                    {
                        $total = $row_cat['Count'];
                    }
                  }else{
                      $total =0;
                  }
                

  $sql_pros = "SELECT count(*) AS value_sum FROM table_sumbong WHERE DATE(`date`) = CURDATE()";
        $results_pros = mysqli_query($conn, $sql_pros);

       if (mysqli_num_rows($results_pros) > 0) {
                while($row_cat = mysqli_fetch_array($results_pros))
                    {
                        $total_today = $row_cat['value_sum'];
                    }
                     }else{
                      $total_today =0;
                  }
  
  $sql_pros = "SELECT MONTH(`Date`) as `Month` , COUNT(`Date`)  as `Count` FROM table_sumbong WHERE `Date` >= NOW() - INTERVAL 1 YEAR GROUP BY MONTH(`Date`)";

        $results_pros = mysqli_query($conn, $sql_pros);

       if (mysqli_num_rows($results_pros) > 0) {
                while($row_cat = mysqli_fetch_array($results_pros))
                    {
                        if ($getmonth == $row_cat['Month']){                          
                        $total_month = $row_cat['Count'];
                        }
                        else{
                           $total_month = 0;
                        }
                    }
                     }else{
                      $total_month =0;
                  }


$sql_pros = "SELECT MONTH(`Date`) as `Month` , COUNT(`Date`)  as `Count` FROM table_sumbong WHERE `Date` >= NOW() - INTERVAL 1 YEAR GROUP BY MONTH(`Date`)";

   $results_pros = mysqli_query($conn, $sql_pros);

       if (mysqli_num_rows($results_pros) > 0) {
                while($row_cat = mysqli_fetch_array($results_pros))
                    {
                        if (($getmonth - 1) == $row_cat['Month']){                          
                        $total_month_last = $row_cat['Count'];
                        }
                        else{
                           $total_month_last = 0;
                        }
                    }
                     }else{
                      $total_month_last =0;
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

         <!-- third party css -->
        <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />



        <style type="text/css">
            #mask {
      position: absolute;
      left: 0;
      top: 0;
      z-index: 9000;
      background-color: #000;
      display: none;
    }
     
    #boxes .window {
      position: absolute;
      left: 0;
      top: 0;
      width: 440px;
      height: 700px;
      display: none;
      z-index: 9999;
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      display:none;
    }
     
    #boxes #dialog {
      width: 750px;
      height: 700px;
      background-color: #ffffff;
      font-family: 'Segoe UI Light', sans-serif;
      font-size: 15pt;
      
    }
     
    #popupfoot {
      font-size: 16pt;
      position: absolute;
      width: 250px;
      
    }
        </style>


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
                                <li class="nav-item dropdown active">
                                    <a class="nav-link arrow-none" href="dashboard" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-view-dashboard me-1"></i> Dashboard
                                    </a>
                        
                                </li>


                                <li class="nav-item dropdown">
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
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                          
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box"> 
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Total of Complaints</h4>    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-info rounded-pill float-start mt-3"><i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1" data-plugin="counterup"> <?php echo $total;?> </h2>
                                                <p class="text-muted mb-3">Total of Complaints</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Complaints Today</h4>    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-success rounded-pill float-start mt-3"><i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1" data-plugin="counterup"> <?php echo $total_today;?> </h2>
                                                <p class="text-muted mb-3">Complaints Today</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Complaints this Month</h4>    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-warning rounded-pill float-start mt-3"><i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1" data-plugin="counterup"> <?php  echo  $total_month; ?> </h2>
                                                <p class="text-muted mb-3">Complaints this Month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                  <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Complaints Last Month</h4>    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-danger rounded-pill float-start mt-3"><i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1" data-plugin="counterup"> <?php  echo  $total_month_last; ?> </h2>
                                                <p class="text-muted mb-3">Complaints Last Month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Incoming Complaints</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Listahan ng mga bagong dumating na reklamo. Maaring suriin mabuti ang mga problema.
                                        </p>
    
                                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Date Reported</th>
                                                <th>Status</th>
                                                <th  style="width: 150px;">Actions</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                <?php 
                                                  $sql = "SELECT * FROM table_sumbong where `Status` = 2 ORDER BY `File_Name` DESC , `Date` ASC";
                                                  $result = $conn->query($sql);
                                                  while($row = $result->fetch_assoc()) { ?>


                                            <tr>
                                                <td> <?php echo  htmlentities($row["Reference"]); ?></td>
                                                <td><?php echo  htmlentities($row["Name"]); ?></td>
                                                <td><?php echo  htmlentities($row["Contact"]); ?></td>
                                                <td><?php echo  htmlentities($row["Email"]); ?></td>
                                                    <td><?php echo htmlentities(date_format(date_create($row["Date"]),"F d, Y h:i a"));?></td>
                                                <td><span class="badge bg-success">New</span><?php if($row["File_Name"] != ''){?> <span class="badge bg-pink">With Attachment</span> <?php }  ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#incomingcomplaints" onclick="show_complaint(<?php echo $row["Reference"]; ?>)">
                                                     TIGNAN ANG DETALYE
                                                    </button>
                                                   
                                                </td>
                                            </tr>
                                             <?php } $conn->close();?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div> <!-- end row -->

                    
                    </div> <!-- container -->

                </div> <!-- content -->

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

            <!-- Modal -->

 <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="incomingcomplaints" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Inspect New Complaint</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                      <div class="card-body" id="details_place">
                                                                    <h5 class="card-title placeholder-glow">
                                                                        <span class="placeholder col-6"></span>
                                                                    </h5>
                                                                    <p class="card-text placeholder-glow">
                                                                        <span class="placeholder col-7"></span>
                                                                        <span class="placeholder col-4"></span>
                                                                        <span class="placeholder col-4"></span>
                                                                        <span class="placeholder col-6"></span>
                                                                        <span class="placeholder col-8"></span>
                                                                    </p>
                                                                </div>

                                                    <div class="modal-body"  id="details_card" style="display: none">

                                                            <div class="card-body">

                                                                <form id="show_com" method="POST" enctype="multipart/form-data">

                                                                    <div class="card">
                                                                        <div class="card-body task-detail">
                                                                            
                                                                            <div class="d-flex mb-3">
                                                                                <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64" src="assets/images/users/avatars-000317336432-0vcza7-t500x500.jpg">
                                                                                <div class="flex-grow-1">
                                                                                    <h4 class="media-heading mt-0" id="showname"></h4>
                                                                                    <span class="badge bg-danger" id="showreference"></span>
                                                                                </div>
                                                                            </div>
                                        
                                                                            <h4 name="showsubject" id="showsubject"></h4>
                                        
                                                                            <p class="text-muted" id="showmessage"></p>
                                        
                                                                            
                                        
                                                                            <div class="row task-dates mb-0 mt-2">
                                                                                <div class="col-lg-4">
                                                                                    <h5 class="font-600 m-b-5">Contact</h5>
                                                                                    <p id="showcontact"></p>
                                                                                </div>
                                        
                                                                                
                                                                                <div class="col-lg-4">
                                                                                    <h5 class="font-600 m-b-5">Email Address</h5>
                                                                                    <p id="showemail"></p>
                                                                                </div><div class="col-lg-4">
                                                                                    <h5 class="font-600 m-b-5">Date Reported</h5>
                                                                                    <p id="date_reported"></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                        

                                        
                                                                            <div class="attached-files mt-3">
                                                                                <h5>Attached File</h5>
                                                                                <ul class="list-inline files-list">
                                                                                    <li class="list-inline-item file-box">
                                                                                         <img class="img-fluid z-depth-1" src="" alt="video" id="evidence_img" style="display: none;height: 250px">
                                                                                          <video id="evidence_video"  width="400" controls style="width: 100%;height: 250px;display: none;">
                                                                                            <source  id="evidence_video" src="">
                                                                                            Your browser does not support HTML video.
                                                                                            </video>
                                                                                    </li>
                                                                                    
                                                                                </ul>
                                                                                
                                                                            </div>
                                        
                                                                        </div>
                                                                    </div>
                                                           
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light" onclick="approved_account()">
                                                       Approve
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light"  onclick="declined_account()">
                                                        Decline
                                                    </button>
                                                        <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close" >Close</button>
                                                    </div>
                                                    </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->




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

  <script src="https://momentjs.com/downloads/moment.js"></script>

         <!-- third party js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->


        <!-- App js-->
        <script src="assets/js/app.min.js"></script>        

        <script type="text/javascript">

function getFileExtension(fileName){
        var  fileExtension;
        fileExtension = fileName.replace(/^.*\./, '');
        return fileExtension;
    }
function isIMage(fileName){
        var fileExt = getFileExtension(fileName);
        var imagesExtension = ["png", "jpg", "jpeg"];
        if(imagesExtension.indexOf(fileExt) !== -1){
            return true;
        } else{
            return false;
        }
    }

        
    function approved_account()
    {

          swal({
                title: "",
                text: "Sigurado kang aaprubahan ang reklamong ito?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Oo, Aaprubahan ko ito!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            },
            function() {

                $.ajax({
                    url: 'sendsms/index',
                    type: 'post',
                    data: {
                        'approved_complaint': 1,
                        'reference': $('#showreference').text(),
                    },
                     success: function(response) {
                        if ($.trim(response) == 'submitted') {
                            setTimeout(function() {
                                swal({
                                    title: "Success",
                                    text: "Naaprubahan na ang reklamong ito at makatanggap ng mensahe ang nag padala ng reklamo.",
                                    type: "success"
                                }, function() {
                                    location.reload();
                                });
                            }, 1);
                        }
                    },
      error:function(response){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
                });

            });

    }

    function declined_account()
    {

          swal({
                title: "",
                text: "Sigurado kang tatangihan ang reklamong ito?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Oo, Burahin ito sa listahan",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            },
            function() {

                $.ajax({
                    url: 'sendsms/index',
                    type: 'post',
                    data: {
                        'declined_complaint': 1,
                        'reference': $('#showreference').text(),
                    },
                     success: function(response) {
                        if ($.trim(response) == 'submitted') {
                            setTimeout(function() {
                                swal({
                                    title: "Success",
                                    text: "Naalis na ito sa listahan at makatanggap ng mensahe ang nag padala ng reklamo.",
                                    type: "success"
                                }, function() {
                                    location.reload();
                                });
                            }, 1);
                        }
                    },
      error:function(response){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
                });

            });

    }


      function show_complaint(id)
    {
        $("#details_card").css("display", "none");  
        $("#details_place").css("display", "block");  


                $.ajax({
                  url: 'connections/actions',
                  type: 'post',
                  data: {
                    'show_complaints' : 1,
                    'id' : id,
                  },
                    dataType: 'json',
                  success: function(data){
                    $("#showreference").text(data.Reference);
                    $('#showsubject').text(data.Subject);
                    $('#showmessage').text(data.Message);
                    $('#showname').text(data.Name);
                    $('#showcontact').text(data.Contact);
                    $('#showemail').text(data.Email);
                    var date = new Date(data.Date);
                    var formattedDate = moment(data.Date).format('MMMM Do YYYY, h:mm:ss a');
                    $('#date_reported').text(formattedDate);

                    if(data.File_Name){   
                     $(".attached-files").css("display", "block");      

                        if(isIMage(data.File_Name))
                        {
                         $("#evidence_img").attr("src","../img/" + data.File_Name);
                         $('#evidence_video').trigger('pause');
                         $("#evidence_video").css("display", "none");
                        $("#evidence_img").css("display", "block");
                        }
                        else
                        {
                            $("#evidence_video").css("display", "block");
                             $("#evidence_img").css("display", "none");

                         $("#evidence_video").attr("src","../img/" + data.File_Name);
                        }
                    }else{
                            $(".attached-files").css("display", "none");
                    }


                    $("#details_card").css("display", "block");  
                    $("#details_place").css("display", "none");  
                  },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
                });
    }



$(document).ready(function() {



    $('#incomingcomplaints').on('hidden.bs.modal', function (e) {
$('#evidence_video').trigger('pause');
        })

      $('#incomingcomplaints').on('shown.bs.modal', function (e) {        
            
        })

    $('#editprofile').on('shown.bs.modal', function(e) {
        $('#edit_account')[0].reset();
        $('#place').show();
        $('#account_form').hide();

        $.ajax({
            url: 'connections/actions',
            type: 'post',
            data: {
                'action_fetch_account': 1,
                'account_ID': '<?php echo $_SESSION['username']; ?>',
            },
            dataType: 'json',
            success: function(data) {

                $('#account_id').val(data.ID);
                $('#editusername').val(data.Username);
                $('#editpassword').val(data.Password);
                $('#editname').val(data.Name);
                $('#editEmail').val(data.Email);
                $('#editcontact').val(data.Contact);
                $('#place').hide();
                $('#account_form').show();
            },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
        });
    });







    $('#edit_account').on("submit", function(event) {
        event.preventDefault();
        swal({
                title: "",
                text: "Are you sure you want to save?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, save it!",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            },
            function() {

                $.ajax({
                    url: 'connections/actions',
                    type: 'post',
                    data: {
                        'action_add_account': 1,
                        'account_id': $('#account_id').val(),
                        'username': $('#editusername').val(),
                        'name': $('#editname').val(),
                        'email': $('#editEmail').val(),
                        'contact': $('#editcontact').val(),
                        'password': $('#editpassword').val(),
                    },
                    success: function(response) {
                        if ($.trim(response) == 'updated') {
                            setTimeout(function() {
                                swal({
                                    title: "Success",
                                    text: "Na-update na ang iyong profile. Mag login muli gamit ang iyong account.",
                                    type: "success"
                                }, function() {
                                    location.href = "logout";
                                });
                            }, 1);
                        }
                    },
      error:function(response){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
                });

            });
   });
});




$(document).ready(function() {
    $("#datatable").DataTable();

    var a = $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf"]
    });

    $("#key-table").DataTable({
            keys: !0
        }),
        $("#responsive-datatable").DataTable(),
        $("#selection-datatable").DataTable({
            select: {
                style: "multi"
            }
        }),
        a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $("#datatable_length select[name*='datatable_length']").addClass("form-select form-select-sm"),
        $("#datatable_length select[name*='datatable_length']").removeClass("custom-select custom-select-sm"),
        $(".dataTables_length label").addClass("form-label")
});


        </script>
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 10:01:58 GMT -->
</html>