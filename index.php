<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Oplan ISumbong Natin HelpDesk System</title>
    <link rel ="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@100;200;300;400;600;700&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
<link rel="icon" href="img/img-6.png">
<!-- <style type="text/css">
    @media (min-width: 992px){
.modal-lg {
    width: 1200px;
}
}
</style> -->
<style type="text/css">
    .features-icon {
    color: #1ab394;
    font-size: 30px !important;
}

@media only screen and (max-width: 600px) {
  .title{
    font-size: 25px !important;
  }
  .titlebutton{
    font-size: 14px !important;
  }
  h3{
font-size: 18px !important;
  }
  #logo{
    width: 150px !important;
  }
  }
}
</style>
</head>
<body>
<section class ="sub-header">
    <nav>
        <!-- <a href ="index.php"><img src="img/img-6.png"></a> -->
     <!--    <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onClick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">INFO</a></li>
                    <li><a href="contact.php">ISUMBONG MO</a></li>
                    <li><a href="login.php">ADMIN</a></li>

                </ul>
            </div> -->
            <!-- <i class="fa fa-bars" onClick="showMenu()"></i> -->
        </nav>
        <img id="logo" src="img/img-6.png" class="img-circle" alt="User Image" style="width: 190px;">
        <h1 class="title" style="font-weight: 600;font-size: 40px;margin-top: 24px !important;">Online Oplan ISumbong Natin HelpDesk System</h1>
            <p>
                <!-- <a class="btn btn-lg btn-warning m-t m-r b-w"  href="#" role="button" onclick="addcomplaint()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp REPORT HERE</a> -->
                <a type="button" class="btn btn-warning btn-lg titlebutton" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp REPORT HERE</a>
                 <a id="tracking" type="button" class="btn btn-info btn-lg titlebutton" data-toggle="modal" data-target="#myModal_tracking"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp COMPLAINT TRACKING</a>
                <!-- <a class="btn btn-lg btn-info m-t m-r b-w" href="#" role="button" onclick="verification()"><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp COMPLAINT TRACKING</a> -->
            </p>
    </section>
<div class="container text-center">
     <h1 style="font-weight: 600;font-size: 40px;margin-top: 24px !important;" class="title">ISumbong mo! Aksyon ko!</h1>
    <div class="row">
        <div class="col-4">
            <div>
                    <i class="fa fa-pencil-square-o features-icon" aria-hidden="true"></i>
                    <h3>E-Sumbong SMS Hotlines</h3>
                    <p><a href="tel:09151383826">0915-138-3826</a></p>
            </div>
        </div>
        <div class="col-4">
            <div>
                    <i class="fa fa-envelope features-icon" aria-hidden="true"></i>
                    <h3>E-SUMBONG OFFICIAL EMAIL ADDRESS</h3>
                    <p><a href="mailto:brgy.palanginan@gmail.com">brgy.palanginan@gmail.com</a></p>
            </div>
        </div>
         <div class="col-4">
            <div>
                    <i class="fa fa-facebook-square features-icon" aria-hidden="true"></i>
                    <h3>BARANGAY FB PAGE</h3>
                    <p><a href="https://www.facebook.com/pages/Brgy-Palanginan-Iba-Zambales/1572065599680896">https://www.facebook.com/Brgy-Palanginan-Iba-Zambales</a></p>
            </div>
        </div>
    </div>
</div>
    <!--contact us-->
<!-- 
    <section class ="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.1491782620296!2d119.992466314798!3d15.314125989351293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339424c19e7fbc3d%3A0xb2230577abaa4193!2sPalanginan%20Barangay%20Plaza!5e0!3m2!1sen!2sph!4v1654330892938!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section> -->


<!--Footer-->
<!-- 
<section class ="footer">
    <h4>ABOUT US</h4>
    
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-link"></i>
    </div>
    <p>I <i class="fa fa-heart-o"></i> Zambales</p>

</section> -->



  <!-- Modal -->
  <div class="modal fade" id="myModal"  tabindex="-1">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Oplan ISumbong Natin</h4>
        </div>
        <form id="contact-form" method="POST" enctype="multipart/form-data">
         <div class="modal-body">  
                            <div class="col-12">
                                <p>Salamat! Ang inyong sumbong ay mahalaga sa amin at ang lahat ng impormasyong inyong ibibigay ay aming pangangalagaan at mananatiling kompidensiyal.</p>
                                <label class="font-bold">Choose Complain:</span></label>
                                  <select id="subject" name="subject" class="form-control">
                                    <option value="Unlawful use of means of publication and unlawful utterances (art. 154)">Unlawful use of means of publication and unlawful utterances (art. 154)</option>
                                    <option value="Alarms and scandals (art. 155)">Alarms and scandals (art. 155)</option>
                                    <option value="Using false certificates (art. 175)">Using false certificates (art. 175)</option>
                                    <option value="Using fictitious names and concealing true names (art. 178)">Using fictitious names and concealing true names (art. 178)</option>
                                    <option value="Illegal use of uniforms and insignias (art. 179)">Illegal use of uniforms and insignias (art. 179)</option>
                                    <option value="Giving assistance to consummated suicide (art. 253)">Giving assistance to consummated suicide (art. 253)</option>
                                    <option value="Responsibility of participants in a duel if only physical injuries are inflicted or no physical injuries have been inflicted (art. 260)">Responsibility of participants in a duel if only physical injuries are inflicted or no physical injuries have been inflicted (art. 260)</option>
                                    <option value="Less serious physical injuries (art. 265)">Less serious physical injuries (art. 265)</option>
                                    <option value="Slight physical injuries and maltreatment (art. 266)">Slight physical injuries and maltreatment (art. 266)</option>
                                    <option value="Unlawful arrest (art. 269)">Unlawful arrest (art. 269)</option>
                                    <option value="Inducing a minor to abandon his/her home (art. 271)">Inducing a minor to abandon his/her home (art. 271)</option>
                                    <option value="Abandonment of a person in danger and abandonment of one’s own victim (art. 275)">Abandonment of a person in danger and abandonment of one’s own victim (art. 275)</option>
                                    <option value="Abandoning a minor (a child under seven [7] years old) (art. 276)">Abandoning a minor (a child under seven [7] years old) (art. 276)</option>
                                    <option value="Abandonment of a minor by persons entrusted with his/her custody">Abandonment of a minor by persons entrusted with his/her custody</option>
                                    <option value="Indifference of parents (art. 277)">Indifference of parents (art. 277)</option>
                                    <option value="Qualified trespass to dwelling (without the use of violence and intimidation). (art. 280)">Qualified trespass to dwelling (without the use of violence and intimidation). (art. 280)</option>
                                  </select>
                            </div>      <br>
                             <div class="col-12">
                                <label class="font-bold">Enter your message <span class="text-danger">(required)</span></label>
                                <textarea class="form-control" rows="5" name="message" id="message" required minlength="10"></textarea>
                            </div>
                             <div class="col-12">
                                <hr>
                                <legend>Contact Information</legend>
                                <p>Makakaasa po kayo na kami ay tatawag matapos naming suriin ang inyong pinadalang sumbong. Panatilihing nakabukas ang inyong telepono.</p>
                                <div class="col-12">
                                <label class="font-bold">Enter your mobile number <span class="text-danger">(required format: 09123456789)</span> </label>
                                <input type="text" class="form-control" name="contact" id="contact" autocomplete="off" placeholder="09123456789" required="" pattern="[0-9]{11}">
                                </div>
                                <div class="col-12"><br>
                                <label class="font-bold">Upload Photo or Video <span class="text-danger">(required)</span></label>
                                <input type="file" class="form-control" name="photo" id="photo" accept="audio/*,video/*,image/*">
                                </div>
                                <hr>
                                <legend>Other Contact Information</legend>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="font-bold">First Name <span class="text-danger">(required)</span></label>
                                        <input type="text" class="form-control" name="firstname" id="firstname" required autocomplete="off" maxlength="50">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="font-bold">Last Name <span class="text-danger">(required)</span></label>
                                        <input type="text" class="form-control" name="lastname" id="lastname" required autocomplete="off" maxlength="50">
                                    </div>
                                </div><br>
                                <label class="font-bold">Email Address <span class="text-success">(optional)</span></label>
                                <input type="email" class="form-control" name="email" id="email" autocomplete="off">
                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Report</button>
                    </div>
                    </form>
      </div>
      
    </div>
  </div>
  


  <!-- Modal -->
  <div class="modal inmodal fade" id="myModal_tracking" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verify Status of Complaint</h4>
        </div>
        <form id="tracking-form" method="POST">
         <div class="modal-body">   
                             <div class="col-12">  
                                <label class="font-bold">Enter the reference no.</label>
                                <input type="text" required="" class="form-control" name="verify" id="verify" autocomplete="off">                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" id="btnClosePopup" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                    </form>
      </div>
      
    </div>
  </div>
  

    <div class="modal inmodal fade" id="myModal_trackingstatus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Complaint Status</h4>
        </div>
         <div class="modal-body">   
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="30%">Reference ID</td>
                                    <td width="70%" id="refno"></td>
                                </tr>
                                <tr>
                                    <td width="30%">Date Reported</td>
                                    <td width="70%" id="compdate"></td>
                                </tr>
                                <tr>
                                    <td width="30%">Message</td>
                                    <td width="70%" id="narrative"></td>
                                </tr>
                                <tr>
                                    <td width="30%">Subject</td>
                                    <td width="70%" id="subjects"></td>
                                </tr>
                                <tr>
                                    <td width="30%">Status</td>
                                    <td width="70%" id="status"></td>
                                </tr>
                            </table>
                        </div>
      </div>
          <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    </div>
      
    </div>
  </div>
</div>
  
  
  <script src="https://momentjs.com/downloads/moment.js"></script>
<!-- <script src="css/jquery.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="css/jquery.form.js"></script>
<script src="css/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script type="text/javascript">

$(document).ready(function(){

  $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
  $.ajax({
      url:'form-handler.php', //===PHP file name====
       data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
      type:'POST',
      success:function(data){
        console.log(data);
        //Success Message == 'Title', 'Message body', Last one leave as it is
        swal("Salamat", "Panatilihing bukas ang inyong telepono upang makatanggap ng tawag mula sa amin", "success");
        $('#myModal').modal('hide');$('.modal-backdrop'). remove();$('body').removeClass( "modal-open" );
         $("#firstname").val('');
          $("#lastname").val('');
          $("#email").val('');
           $("#subject").val('');
            $("#message").val('');
            $("#contact").val('');
            $("#photo").val('');
      },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
        swal("Error", "May error. I-refresh ang pahina at ulitin muli.", "error");
      }
    });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
  });

$('#myModal_trackingstatus').on('hidden.bs.modal', function(e) {
                        $('.modal-backdrop').remove();

});

  $("#btnClosePopup").click(function () {
            $("#myModal_tracking").modal("hide");
        });


  $('#tracking-form').on('submit',function(e) {  //Don't foget to change the id form
   $.ajax({
                  url: 'admin/connections/actions.php',
                  type: 'post',
                  data: {
                    'verify_complaint' : 1,
                    'id' : $('#verify').val(),
                  },
                   dataType: 'json',
                  success: function(data){
                    if (data == null){ 
                    swal("Not Found!", "Please check your reference number", "warning");
                }
                        else{
                        $('#refno').html(data.Reference);
                        $('#narrative').html(data.Message);
                        $('#subjects').html(data.Subject);
                        $('#status').html(data.Status);
                        var date = new Date(data.Date);
                      var formattedDate = moment(data.Date).format('MMMM Do YYYY, h:mm:ss a');
                      $('#compdate').text(formattedDate);
                        $('#myModal_tracking').modal('hide');                     
                        $('#myModal_trackingstatus').modal('show');



                //         $('#myModal_tracking').modal('hide');$('.modal-backdrop'). remove();$('body').removeClass( "modal-open" );
                //          $('#myModal_trackingstatus').modal({
                //         backdrop: 'static',
                //         keyboard: true, 
                //         show: true
                // }); 

                        }
                   
                  }
                });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
  });


});
</script>
    <!---JavaScript Toggle Menu---->
    <script>
        
        var navlinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
    
</body>
</html>