<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter a message';
        }
 
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage) {
            $to = 'alexkmallory@gmail.com'; 
            $subject = 'Contact Form Submission - alexmallory.me ';
            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
            $headers = 'Reply-To: alexkmallory@gmail.com';
            // from address has to be hosted on dreamhost, or do some special validation
            // see http://wiki.dreamhost.com/PHP_mail()#Sending_SMTP_mail
            if (mail ($to, $subject, $body, $headers)) {
                $result='<div class="alert alert-success">Thank You! Your message has been sent.</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            }
        }
    }
?>


<div>
    <h1>Contact</h1>
    <h3>Fill out the form below to get in touch!</h3>
    
    <form role="form" class="contact" method="post" action="index.php">
        <div class="form-group">
            <?php echo $result; ?>    
        </div>
        <div class="form-group">
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo htmlspecialchars($name); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo htmlspecialchars($email); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Write me a message"><?php echo htmlspecialchars($message); ?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
        <input id="submit" name="submit" type="submit" value="Send!" class="btn btn-primary">
    </form>
</div>