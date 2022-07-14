<?php error_reporting(0); ?>
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


        <!-- Plugins css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
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

                                <li class="nav-item dropdown ">
                                    <a class="nav-link arrow-none" href="complaints" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-clipboard-list me-1"></i> List of Complaints
                                    </a>
                        
                                </li>

                                <li class="nav-item dropdown active">
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
                                    <h4 class="page-title">Scheduled of Summons</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">                                      
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Search here</label>
                                                        <input type="text" id="simpleinput" class="form-control" placeholder="Search...">
                                                    </div>        
                                                </form>

                                            </div> <!-- end col -->

                                        </div>
                                        <!-- end row-->
                            </div><!-- end col -->
                        </div>

                        <div class="row" id="sheet_ingredients">

                                        <div class="col-md-4 col-lg-4 col-xl-3" id="dataloading">
                                            <div class="card placeholder-glow">
                                                <div class="card-body">
                                                    <h3 class="card-title placeholder">Reference # : 1656690010</h3>
                                                    <h5 class="card-title placeholder">Rolan Benavidez Jr  Rolan Benavidez Jr</h5>
                                                    <h6 class="card-subtitle text-muted placeholder">2022-07-01 15:13:04</h6>
                                                </div>
                                                <img class="img-fluid" src="assets/images/gallery/11.jpg" alt="Card image cap" style="filter: blur(8px);">
                                                <div class="card-body text-center">
                                                    <p class="card-text placeholder"></p>
                                                       <button type="button" class="btn btn-warning rounded-pill waves-effect waves-light placeholder disabled">
                                                        <span class="btn-label"><i class="mdi mdi-calendar-account"></i></span>Re-Schedule
                                                    </button>
                                                    <button type="button" class="btn btn-success rounded-pill waves-effect waves-light placeholder disabled">
                                                        <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Fixed
                                                    </button>
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
                                        <div class="modal fade" id="reschedule_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Oplan ISumbong Natin</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="respondent_details">
                                                            <div class="card-body">
                                                                <h4 class="header-title">Ilagay ang petsa kong kailan ulit ang paghaharap</h4><br>

                                                                <form  method="post" id="resched_form" class="parsley-examples">
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Reference Number :</label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" readonly="" class="form-control" id="reschedreference" />
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
                                                        <button type="submit" class="btn btn-primary">Re-Schedule</button>
                                                    </div>
                                                                </form>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->


  <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="fixed_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Oplan ISumbong Natin</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                                <form id="fixed_form"  method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                            <div class="card-body">
                                                                <h4 class="header-title">Congratulations!!</h4>
                                                                <h4 class="header-title">Pakibigay ang mga detalye na hinihingi sa ibaba.</h4><br>

                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Reference Number :</label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" readonly="" class="form-control" id="fixedreference" name="fixedreference" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="datetime-datepicker" class="col-4 col-form-label">Araw ng pagbabati : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" value="<?php $datetime = new DateTime(); echo date_format($datetime,"F d, Y"); ?>" id="fixed_datetime-datepicker"  name="fixed_datetime-datepicker" class="form-control" placeholder="Date" readonly="readonly">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="mt-3">
                                                                                                <input type="file" id="photo" name="photo" data-plugins="dropify" accept="image/*" required="" />
                                                                                                <p class="text-muted text-center mt-2 mb-0">Upload Image</p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-lg-6">
                                                                                            <div class="mt-3">
                                                                                               <input type="file" id="agreement" name="agreement" data-plugins="dropify" required="" />
                                                                                                <p class="text-muted text-center mt-2 mb-0">Upload Agreement</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> <!-- end row -->

                                                                                </div> <!-- end card-body-->
                                                                            </div> <!-- end card-->
                                                                        </div><!-- end col -->
                                                                    </div>
                                                                    <!-- end row --> 


                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
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

        <!-- Plugins js -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
        <script src="assets/libs/dropify/js/dropify.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-fileuploads.init.js"></script>

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


     function resched(reference)
        {
             $('#reschedule_modal').modal('show');
             $('#reschedreference').val(reference);
        }
        
     function fixed(reference)
        {
           $('#fixed_modal').modal('show');
             $('#fixedreference').val(reference);
        }




$(document).ready(function() {
     $("#datetime-datepicker").datepicker({
            minDate: 0
        });



 $("#simpleinput").on("input", function(){
        // Print entered value in a div box
    });

 var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time in ms, 5 seconds for example
var $input = $('#simpleinput');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping () {  
        fetch_summon();
}




function fetch_summon(){
            $.ajax({
                  url: 'connections/actions.php',
                  type: 'post',
                  data: {
                    'action_fetch_summon' : 1,
                    'search' : $('#simpleinput').val() ,
                  },
                  success: function(data){
              
                    document.getElementById("sheet_ingredients").innerHTML = data;

                            
                      // $("#example4").DataTable({
                      //     "responsive": true, "lengthChange": false, "autoWidth": false,"pageLength": 5 ,"searching": true,"bInfo": true,
                      //     // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                      //   });
                  },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
                });
}



 fetch_summon();


    $('#resched_form').on("submit", function(event) {
        event.preventDefault();    

         swal({
                title: "",
                text: "Are you sure?",
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
                        'resched_submit': 1,
                        'reschedreference': $('#reschedreference').val(),
                        'rescheddate': $('#datetime-datepicker').val(),
                    },
                    success: function(response) {
                        if ($.trim(response) == 'updated') {
                            setTimeout(function() {
                                swal({
                                    title: "Success",
                                    text: "Na re-Schedule na ang summon",
                                    type: "success"
                                }, function() {
                                    $('#reschedreference').val('');
                                     $('#datetime-datepicker').val('');
                                     $('#reschedule_modal').modal('hide');
                                    fetch_summon();
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



  $('#fixed_form').on('submit',function(e) {  //Don't foget to change the id form
  $.ajax({
      url:'connections/form-handler.php', //===PHP file name====
       data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
      type:'POST',
      success:function(data){
        //Success Message == 'Title', 'Message body', Last one leave as it is
         setTimeout(function() {
                                swal({
                                    title: "Success",
                                    text: "Data has been saved!",
                                    type: "success"
                                }, function() {
                                    location.reload();
                                });
                            }, 1);
       
      },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
    });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
  });



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