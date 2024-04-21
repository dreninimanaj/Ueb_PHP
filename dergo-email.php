<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Modal</title>
	<!-- Include Bootstrap CSS and JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- Button to trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		Click to confirm
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
				</div>
				<div class="modal-body">
					<p>Click "Yes" to confirm and send email, or "No" to cancel.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					<button type="button" class="btn btn-primary" onclick="sendEmail()">Yes</button>
				</div>
			</div>
		</div>
	</div>

	<script>
        <?php 
		function sendEmail() {
            
    // Load PHPMailer library
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    // Generate email subject
    $subject = 'Kerkese e re per akses ne databaze';

    // Generate email body
    $fullName = $_SESSION['user_fullname']; // Get fullname column of the session user from table users
    $date = date('Y-m-d H:i:s'); // Get current date and time
    $ip = $_SERVER['REMOTE_ADDR']; // Get user IP address
    $body = "Pershendetje Kolonel, nje user ka kerkuar akses per qasje te mbikeqyresit ne databaze, te dhenat e tij jane te listuara me poshte:\n\nEmri Mbiemri: $fullName\nData e kerkeses: $date\nIp e qasjes: $ip";

    // Send email using SMTP
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Your SMTP server details here
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com'; // Your SMTP server username here
    $mail->Password = 'your-password'; // Your SMTP server password here
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('your-email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com');
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $body;
    if(!$mail->send()) {
        echo 'Error: ' . $mail->ErrorInfo;
    }

    // Close modal
    echo "<script>$('#myModal').modal('hide');</script>";
}
?>
	</script>

</body>
</html>
