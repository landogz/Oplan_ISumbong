<?php
   include 'connections/database.php';


$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$contact = $_POST['contact'];
// $purok = $_POST['purok'];
// $barangay = $_POST['barangay'];

// $email_from = $visitor_email;
// $email_subject = 'New Form Submission';
// $email_body = "User Name: $name.\n".
//               "User Email: $visitor_email.\n".
//               "Subject: $subject.\n".
//               "User Message: $message.\n";

// $to = 'rolan.benavidez@gmail.com';
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
// mail($to,$email_subject,$email_body,$headers);


date_default_timezone_set('UTC');
$date = new DateTime();
$reference =  $date->getTimestamp();
$random = substr(md5(mt_rand()), 0, 10);
$target_dir = "img/";
$uploading= basename($_FILES["photo"]["name"]);

if($uploading != ''){
   $imageFileType = pathinfo($uploading,PATHINFO_EXTENSION);

      $names=$random.".".$imageFileType;
      $target_file = $target_dir .$names ;
   // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
  $query = "INSERT INTO table_sumbong(Reference,Name, Email,Subject,Contact,File_Name,Message,Date)  
                       VALUES('" . $reference . "', '" . $name . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["contact"] . "','" . $names . "', '" . $_POST["message"] . "','" . date("Y/m/d H:i:s") . "'); ";

                $results = mysqli_query($conn, $query);
                echo 'saved';
                exit();
        } 
        else {
          echo 'Sorry, there was an error uploading your files.';
        }

}
else{
  $query = "INSERT INTO table_sumbong(Reference,Name, Email,Subject,Contact,Message,Date)  
                       VALUES('" . $reference . "', '" . $name . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["contact"] . "', '" . $_POST["message"] . "','" . date("Y/m/d H:i:s") . "'); ";

                $results = mysqli_query($conn, $query);
                echo 'saved';
                exit();
}
    


?>