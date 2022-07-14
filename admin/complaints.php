<?php error_reporting(0); 
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

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                          
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box"> 
                                    <h4 class="page-title">Complaints</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">List of Complaints</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Listahan ng mga na aprobahang na reklamo. Maaring tawagan ang nag reklamo para sa araw ng paghaharap.
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
                                                  $sql = "SELECT * FROM table_sumbong where `Status` = 'Approved' ORDER BY `File_Name` DESC , `Date` ASC";
                                                  $result = $conn->query($sql);
                                                  while($row = $result->fetch_assoc()) { ?>


                                            <tr>
                                                <td> <?php echo  htmlentities($row["Reference"]); ?></td>
                                                <td><?php echo  htmlentities($row["Name"]); ?></td>
                                                <td><?php echo  htmlentities($row["Contact"]); ?></td>
                                                <td><?php echo  htmlentities($row["Email"]); ?></td>
                                                    <td><?php echo htmlentities(date_format(date_create($row["Date"]),"F d, Y h:i a"));?></td>
                                                <td><span class="badge bg-purple">For Schedule</span><?php if($row["File_Name"] != ''){?> <span class="badge bg-pink">With Attachment</span> <?php }  ?></td>
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


            <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Oplan ISumbong Natin</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="respondent_details">
                                                            <div class="card-body">
                                                                <h4 class="header-title">Ilagay ang impormasyon ng inirereklamo</h4>
                                                                <p class="text-muted font-14">
                                                                    Ilagay ang tamang impormasyon ng inirereklamo upang maiwasan ang aberya.
                                                                </p>

                                                                <form  method="post" id="submit_account" class="parsley-examples">
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Reference Number :</label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" readonly="" class="form-control" id="schedreference" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Full Name : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" class="form-control" id="schedname" placeholder="Enter Full Name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="street" class="col-4 col-form-label">Contact Number :</label>
                                                                        <div class="col-7">
                                                                            <input type="text" parsley-type="text" class="form-control" id="schedcontact" placeholder="Enter Contact" />
                                                                    </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="street" class="col-4 col-form-label">Street : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" class="form-control" id="schedstreet" placeholder="Enter Street" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="purok" class="col-4 col-form-label">Purok : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" class="form-control" id="schedpurok" placeholder="Enter Purok" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="datetime-datepicker" class="col-4 col-form-label">Date and Time of Summon <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required id="datetime-datepicker" class="form-control flatpickr-input active" placeholder="Date and Time" readonly="readonly">
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                                </form>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->



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
                                                       <button type="button" class="btn btn-info rounded-pill waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                                                        <span class="btn-label"><i class="mdi mdi-calendar-account"></i></span>Schedule Summon
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

          <!--Morris Chart-->
        <script src="assets/libs/morris.js06/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Validation init js-->
        <script src="assets/js/pages/form-validation.init.js"></script>

  
        <!-- Dashboar init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

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

  <script src="https://momentjs.com/downloads/moment.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-pickers.init.js"></script>


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
                    $("#schedreference").val(data.Reference);
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


 $('#incomingcomplaints').on('hidden.bs.modal', function (e) {
$('#evidence_video').trigger('pause');
        })



 $('#submit_account').on("submit", function(event) {
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
            function(){

               $.ajax({
                  url: 'connections/actions',
                  type: 'post',
                  data: {
                    'add_summon' : 1,
                    'schedreference' : $('#schedreference').val(),
                    'schedname' : $('#schedname').val(),
                    'schedstreet' : $('#schedstreet').val(),
                    'schedpurok' : $('#schedpurok').val(),
                    'schedcontact' : $('#schedcontact').val(),
                    'datetime-datepicker' : $('#datetime-datepicker').val(),
                  },
                  success: function(response){
                    if ($.trim(response) == 'saved') {  
                       setTimeout(function() {
                            swal({
                                title: "Success",
                                text: "Naitakda na ang pagkikita. Naisend na din ang schedule kong kelan magkikita ang dalawa.",
                                type: "success"
                            }, function() {                                
                                // showCustomer();
                                window.location.href = 'print_summon?ref=' +  $('#schedreference').val();
                                $('#account_id').val("");
                                $('#submit_account')[0].reset();
                                $('#bs-example-modal-lg').modal('hide');
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