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


        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .dt-buttons{
        padding-bottom: 28px !important;
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
                          
                      <br>

  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Reports</h4>
                                        <p class="text-muted font-14">
                                            <!-- Build your advance search query using the form below. -->
                                         </p>

                                            <div class="row">
                                                <div class="col-auto">
                                                     <button type="button" class="btn btn-primary waves-effect waves-light" onclick="show_data('incoming')">INCOMING COMPLAINTS</button>
                                                </div>
                                                <div class="col-auto">
                                                     <button type="button" class="btn btn-success waves-effect waves-light" onclick="show_data('approved')">APPROVED COMPLAINTS</button>
                                                </div>
                                                <div class="col-auto">
                                                     <button type="button" class="btn btn-danger waves-effect waves-light" onclick="show_data('scheduled')">SCHEDULED COMPLAINTS</button>
                                                </div>
                                                 <div class="col-auto">
                                                     <button type="button" class="btn btn-pink waves-effect waves-light" onclick="show_data('fixed')">FIXED COMPLAINTS</button>
                                                </div>
                                                <div class="col-auto">
                                                     <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">RE-PRINT SUMMONS</button>
                                                </div>
                                                <div class="col-auto">
                                                     <button type="button" class="btn btn-warning waves-effect waves-light" onclick="show_data('accounts')">ACCOUNTS</button>
                                                </div>
                                            </div> <hr >
                                         <?php  if(isset($_GET['s']))
                                                { 
                                                    if($_GET['s'] == 'incoming' || $_GET['s'] == 'approved'){ ?>
                                        <table id="datatable-buttons" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Date Reported</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                <?php 

                                                if($_GET['s'] == 'incoming')
                                                  {
                                                      $sql = "SELECT * FROM table_sumbong where `Status` = '2' ORDER BY `File_Name` DESC , `Date` ASC";
                                                  }
                                                elseif($_GET['s'] == 'approved')
                                                  {
                                                      $sql = "SELECT * FROM table_sumbong where `Status` = 'Approved' ORDER BY `File_Name` DESC , `Date` ASC";
                                                  }
                                                  $results = mysqli_query($conn, $sql);
                                                   if (mysqli_num_rows($results) > 0) {
                                                           while($row = mysqli_fetch_array($results))
                                                               { ?>


                                            <tr>
                                                <td> <?php echo  htmlentities($row["Reference"]); ?></td>
                                                <td><?php echo  htmlentities($row["Name"]); ?></td>
                                                <td><?php echo  htmlentities($row["Contact"]); ?></td>
                                                <td><?php echo  htmlentities($row["Email"]); ?></td>
                                                    <td><?php echo htmlentities(date_format(date_create($row["Date"]),"F d, Y h:i a"));?></td>

                                                <td>
                                                    <?php if($row["Status"] == '2'){ ?>
                                                        <span class="badge bg-success">New</span>
                                                    <?php } elseif($row["Status"] == 'Approved'){ ?>
                                                        <span class="badge bg-purple">For Schedule</span>
                                                    <?php } ?>

                                                    <?php if($row["File_Name"] != ''){?> <span class="badge bg-pink">With Attachment</span> <?php }  ?></td>
                                                
                                            </tr>
                                             <?php } } $conn->close();?>
                                            </tbody>
                                        </table>
                                         <?php  } elseif($_GET['s'] == 'accounts'){?> 

                                                <table id="datatable-buttons" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Date Created</th>
                                                <th>Last Update</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                <?php 
                                                  $sql = "SELECT * FROM table_user where `Status` = 'Active'";
                                                  $result = $conn->query($sql);
                                                  while($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo  htmlentities($row["Username"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Name"]); ?></td>
                                                    <td><?php echo htmlentities($row["Contact"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Email"]); ?></td>
                                                    <td><?php echo htmlentities(date_format(date_create($row["Date_Created"]),"F d, Y h:i a"));?></td> 
                                                    <td><?php echo htmlentities(date_format(date_create($row["Last_Update"]),"F d, Y h:i a"));?></td>
                                            </tr>
                                          
                                           
                                        <?php } $conn->close();?>
                                            </tbody>
                                        </table>

                                        <?php  } elseif($_GET['s'] == 'scheduled'){?> 


                                            <table id="datatable-buttons" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Comp. Name</th>
                                                <th>Comp. Contact</th>                                           
                                                <th>Res. Name</th>
                                                <th>Res. Contact</th>
                                                <th>Date Reported</th>
                                                <th>Date of Summon</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                <?php 
                                                  $sql = "SELECT *,table_summon.Name as `Res_Name`,table_summon.Contact as `Res_Contact`,table_sumbong.Name as `com_Name`,table_sumbong.Contact as `com_contact`,table_sumbong.Email as `com_Email`
                                                            FROM table_sumbong
                                                            INNER JOIN table_summon
                                                            ON table_sumbong.Reference = table_summon.Reference where table_sumbong.Status='Scheduled' order by `DateTime` ASC";
                                                  $result = $conn->query($sql);
                                                  while($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo  htmlentities($row["Reference"]); ?></td>
                                                    <td><?php echo  htmlentities($row["com_Name"]); ?></td>
                                                    <td><?php echo htmlentities($row["com_contact"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Res_Name"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Res_Contact"]); ?></td>
                                                    <td><?php echo htmlentities($row["Date"]);?></td>
                                                    <td><?php echo htmlentities($row["DateTime"]);?></td> 
                                            </tr>
                                          
                                           
                                        <?php } $conn->close();?>
                                            </tbody>
                                        </table>




                                        <?php } elseif($_GET['s'] == 'fixed'){  ?>

                                           <table id="datatable-buttons" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Reference</th>
                                                <th>Comp. Name</th>
                                                <th>Comp. Contact</th>                                           
                                                <th>Res. Name</th>
                                                <th>Res. Contact</th>
                                                <th>Date Reported</th>
                                                <th>Date of Fixed </th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                                <?php 
                                                  $sql = "SELECT *,table_summon.Name as `Res_Name`,table_summon.Contact as `Res_Contact`,table_sumbong.Name as `com_Name`,table_sumbong.Contact as `com_contact`,table_sumbong.Email as `com_Email`
                                                            FROM table_sumbong
                                                            INNER JOIN table_summon
                                                            ON table_sumbong.Reference = table_summon.Reference where table_sumbong.Status='Fixed' order by `DateTime` ASC";
                                                  $result = $conn->query($sql);
                                                  while($row = $result->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo  htmlentities($row["Reference"]); ?></td>
                                                    <td><?php echo  htmlentities($row["com_Name"]); ?></td>
                                                    <td><?php echo htmlentities($row["com_contact"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Res_Name"]); ?></td>
                                                    <td><?php echo  htmlentities($row["Res_Contact"]); ?></td>
                                                    <td><?php echo htmlentities($row["Date"]);?></td>
                                                    <td><?php echo htmlentities($row["DateTime"]);?></td> 
                                            </tr>
                                          
                                           
                                        <?php } $conn->close();?>
                                            </tbody>
                                        </table>

                                        <?php } } ?>
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
  <div class="modal inmodal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">    
      <!-- Modal content-->
      <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Re-Print Summon</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
        <form id="tracking-form" method="POST">
         <div class="modal-body">   
                             <div class="col-12">  
                                <label class="font-bold">Enter the reference no.</label>
                                <input type="text" required="" class="form-control" name="verify" id="verify" autocomplete="off">                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white"  data-bs-dismiss="modal" aria-label="Close">Close</button>
                        <button type="submit" class="btn btn-primary">Re-Print</button>
                    </div>
                    </form>
      </div>
      
    </div>
  </div>



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

         function show_data(response)
            {
                if(response =='incoming'){
                     window.location.href = '?s=' +  response;
                }
                else if(response =='approved'){
                     window.location.href = '?s=' +  response;
                }
                else if(response =='scheduled'){
                     window.location.href = '?s=' +  response;
                }
                else if(response =='accounts'){
                     window.location.href = '?s=' +  response;
                }
                else if(response =='fixed'){
                     window.location.href = '?s=' +  response;
                }
            }


$(document).ready(function() {


  $('#tracking-form').on('submit',function(e) {  //Don't foget to change the id form
   $.ajax({
                  url: 'connections/actions.php',
                  type: 'post',
                  data: {
                    'reprint_complaint' : 1,
                    'id' : $('#verify').val(),
                  },
                   dataType: 'json',
                  success: function(data){
                    if (data == null){ 
                    swal("Not Found!", "Please check your reference number or make sure your the reference number is on scheduled", "warning");
                }
                        else{
                        window.location.href = 'print_summon?ref=' +  $('#verify').val();

                        }
                   
                  }
                });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
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
    $("#datatable").DataTable();

    // var a = $("#datatable-buttons").DataTable({
    //     lengthChange: !1,
    //     buttons: ["copy", "excel", "pdf"]
    // });

$('#datatable-buttons').DataTable( {
     dom: 'Bfrtip',
        buttons: [
            'copy',
            'print',
            {
                extend: 'spacer',
                style: 'bar',
                text: 'export files'
            },
            'csv',
            'excel',
            'spacer',
            'pdf'
        ]
    } );


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