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
                                    <h4 class="page-title">Accounts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="text-muted font-14 mb-3">
                                            Listahan ng mga tagapangasiwa ng sistema &nbsp
                                            <button type="button"  data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg" class="btn btn-success rounded-pill waves-effect waves-light">
                                                        <span class="btn-label"><i class="mdi mdi-new-box"></i></span>New Account
                                                    </button>
                                        </p>
    
                                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap table-hover">
                                            <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Date Created</th>
                                                <th>Last Update</th>
                                                <th  style="width: 150px;">Actions</th>
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
                                                    <td class="project-actions text-right">
                                                        <?php if($row["Username"] != $_SESSION['username']){ ?>
                                                      <button class="btn btn-warning rounded-pill waves-effect waves-light edit_account" name="edit" id="<?php echo $row["Username"]; ?>"><span class="btn-label"><i class="mdi mdi-pencil-box"></i></span>Modify</button>
                                                      <button type="button" class="btn btn-danger rounded-pill waves-effect waves-light" onclick="delete_account(<?php echo $row["ID"]; ?>)">  <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span>Remove</button>
                                                       <?php } ?>
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
                                                        <h4 class="modal-title" id="myLargeModalLabel">Online Oplan ISumbong Natin HelpDesk System</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="card-body">
                                                                <h4 class="header-title">Ilagay ang impormasyon ng account</h4>
                                                                <p class="text-muted font-14">
                                                                    Ilagay ang tamang impormasyon ng account at wag kakalimutan.
                                                                </p>

                                                                <form method="post" id="submit_account" class="parsley-examples">
                                                                     <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Username : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" class="form-control" id="Username" placeholder="Enter Username"  />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Full Name : <span class="text-danger">*</span></label>
                                                                        <div class="col-7">
                                                                            <input type="text" required parsley-type="text" class="form-control" id="name" placeholder="Enter Full Name" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Email : </label>
                                                                        <div class="col-7">
                                                                            <input type="Email"  parsley-type="Email" class="form-control" id="Email" placeholder="Enter Email" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="name" class="col-4 col-form-label">Contact Number : </label>
                                                                        <div class="col-7">
                                                                            <input type="text"  parsley-type="text" class="form-control" id="contact" placeholder="Enter Contact Number (required format: 09123456789)" autocomplete="off"  pattern="[0-9]{11}"/>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="row mb-3">
                                                                    
                                                                    <label for="name" class="col-4 col-form-label">Enter Password : <span class="text-danger">*</span></label>
                                                                        <div class="col-4">
                                                                        <input type="text" required autocomplete="false" parsley-type="text" class="form-control" id="password" placeholder="Enter Password" />
                                                                        </div>
                                                                        <div class="col-3">
                                                                             <button type="button" class="btn btn-warning waves-effect waves-light" onclick="genPassword()">Generate Password</button>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="account_id_moddify" id="account_id_moddify" /> 
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
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

var password=document.getElementById("password");

 function genPassword() {
    var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var passwordLength = 12;
    var password = "";
 for (var i = 0; i <= passwordLength; i++) {
   var randomNumber = Math.floor(Math.random() * chars.length);
   password += chars.substring(randomNumber, randomNumber +1);
  }
        document.getElementById("password").value = password;
 }

        </script>
        <script type="text/javascript">
$(document).ready(function() {

$('#bs-example-modal-lg').on('hidden.bs.modal', function (e) {
                    $('#account_id_moddify').val('');
                    $('#Username').val('');
                    $('#password').val('');
                    $('#name').val('');
                    $('#Email').val('');
                    $('#contact').val('');
})


       $(document).on('click', '.edit_account', function() {
        var account_ID = $(this).attr("id");
            $.ajax({
                url: 'connections/actions',
                type: 'post',
                data: {
                    'action_fetch_account': 1,
                    'account_ID': account_ID,
                },
                dataType: 'json',
                success: function(data) {
                     console.log(data);
                    $('#account_id_moddify').val(data.ID);
                    $('#Username').val(data.Username);
                    $('#password').val(data.Password);
                    $('#name').val(data.Name);
                    $('#Email').val(data.Email);
                    $('#contact').val(data.Contact);
                    $('#bs-example-modal-lg').modal('show');
                },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
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
                    'action_add_account' : 1,
                    'account_id' : $('#account_id_moddify').val(),
                    'Username' : $('#Username').val(),
                    'name' : $('#name').val(),
                    'Email' : $('#Email').val(),
                    'contact' : $('#contact').val(),
                    'password' : $('#password').val(),
                  },
                  success: function(response){
                    if ($.trim(response) == 'saved') {  
                       setTimeout(function() {
                            swal({
                                title: "Success",
                                text: "The account has been saved.",
                                type: "success"
                            }, function() {                                
                                // showCustomer();
                                location.reload();
                                $('#account_id').val("");
                                $('#submit_account')[0].reset();
                                $('#bs-example-modal-lg').modal('hide');
                            });
                        }, 1);
                    }
                    else if ($.trim(response) == 'updated') {  
                       setTimeout(function() {
                            swal({
                                title: "Success",
                                text: "The account has been updated.",
                                type: "success"
                            }, function() {                                
                                // showCustomer();
                                location.reload();
                                $('#insert_account').val("Save");
                                $('#account_id').val("");
                                $('#submit_account')[0].reset();
                                $('#account_Modal').modal('hide');
                            });
                        }, 1);
                    }
                    else if ($.trim(response) == 'duplicate')
                    {
                         setTimeout(function() {
                            swal({
                                title: "Duplicated!",
                                text: "Username already exist!",
                                type: "error"
                            }, function() {              
                            });
                        }, 1);
                    }
                  }
                });


            });


    });



     function delete_account(id)
    {

         swal({
              title: "Sigurado ka ba?",
              text: "Kapag na-delete na, hindi mo na mababawi ang account na ito!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Oo, tanggalin ito!",
              closeOnConfirm: false,
              showLoaderOnConfirm: true,
            },
            function(){
                $.ajax({
                  url: 'connections/actions',
                  type: 'post',
                  data: {
                    'action_delete_accounts' : 1,
                    'id' : id,
                  },
                  success: function(response){
                    if ($.trim(response) == 'deleted') {  

                       setTimeout(function() {
                            swal({
                                title: "Success",
                                text: "The account has been deleted.",
                                type: "success"
                            }, function() {                                
                                // showCustomer();
                                location.reload();
                            });
                        }, 1);


                    }
                  }
                });
            });
    }





        </script>
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 10:01:58 GMT -->
</html>