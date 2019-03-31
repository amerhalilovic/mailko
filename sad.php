<?php 

   $msg='';
   $msgClass='';

   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];


   if(!empty($email) && !empty($email) && !empty($message)){
        $msg = "You fill everything correct";
        $msgClass='alert-success';

            // Passed
        $toEmail='amer.malibu@gmail.com';
        $subject='Contact Request Form'.$name;
        $body='<h2>Contact Request</h2>
         <h4>Name</h4><p>'.$name.'</p>
         <h4>Email</h4><p>'.$email.'</p>
        <h4>Messsage</h4><p>'.$message.'</p>';
        // Email Headers
        $headers= "MIME-Version:1.0"."\r\n";
        $headers.="Content-Type:text/html;charset=UTF-8"."\r\n";
        
        //Aditional Headers

        $headers.= "From: ".$name."<".$email.">"."\r\n";

        if(mail($toEmail,$subject,$body,$headers)){
            //Email sent
            $msg="Your email has been sent";
            $msgClass="alert-success";

        }else{
            $msg="Your email was not sent";
            $msgClass="alert-danger";
        }

   } else {
       $msg = "You didnt fill everything correct";
       $msgClass='alert-danger';
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact US</title>
    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>

<!-- NAVBAR -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"> My Website</a>
            </div>
        </div>
    </nav>
<!-- MAIN -->
<div class="container">
<!-- ALERT -->
<div class="alert <?php echo $msgClass ?>">  <?php echo $msg ?> </div>
<!-- kraj alerta -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
    </form>

</div>

</body>
</html>