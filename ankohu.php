
<?php
include 'config.php';
?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap">
<link rel="icon" type="image/png" href="images/ipkja.png">


	<title>Ankesat per zyrtaret e Policise se Matrix Roleplay</title>
	<style>
		body {
			background-color: #f2f2f2;
            background-size: auto;
			font-family: "Poppins", Arial, sans-serif;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
            margin: 150px;
        }
            .form-container {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		padding: 20px;
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		max-width: 700px;
		width: 100%;
		margin: 0 auto;
	}
	
    .form-container p {
  font-size: 12px;
  line-height: 1.2;
  margin: 0 0 10px;
  color: #333;
  text-align: center;
  font-family: "Poppins", Arial, sans-serif;
}


	
	.form-container p {
		font-size: 16px;
		line-height: 1.5;
		margin: 0 0 20px;
		color: #333;
		text-align: center;
        font-family: "Poppins", Arial, sans-serif;

	}
	
	.form-container label {
		display: block;
		font-size: 16px;
		font-weight: bold;
		margin: 0 0 10px;
		color: #333;
	}
	
	.form-container input[type="text"],
.form-container input[type="date"],
.form-container textarea {
  display: block;
  width: 100%;
  padding: 10px;
  margin: 0 0 20px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  color: #333;
  resize: none;
  box-sizing: border-box;
  font-family: "Poppins", Arial, sans-serif;
  font-size: 16px;
}

/* Style the date input specifically */
.form-container input[type="date"] {
  appearance: none;
  -webkit-appearance: none;
  display: block;
  width: 100%;
  padding: 10px;
  margin: 0 0 20px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  color: #333;
  resize: none;
  box-sizing: border-box;
  font-family: "Poppins", Arial, sans-serif;
  font-size: 16px;
  background-image: url("path/to/your/icon.png");
  background-size: 20px;
  background-repeat: no-repeat;
  background-position: calc(100% - 10px) center;
}


	
    .form-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form-container button[type="submit"] {
  display: inline-block;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  margin-left: 140px;
  background-color: #333;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  align-items: center;
  margin-top: 20px; /* Optional - adds some space between the last form element and the button */
}

.form-container button[type="submit"]:hover {
  background-color: #555;
  transform: scale(1.1);
}
.success-box {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  width: 80%;
  margin: 0 auto;
  text-align: center;
  padding: 20px;
  font-family: "Poppins", Arial, sans-serif;
}

.success-box h2 {
  margin-top: 0;
  font-size: 24px;
  font-weight: 600;
  color: #333;
}

.success-box p {
  font-size: 18px;
  color: #555;
  line-height: 1.5;
  margin-bottom: 20px;
}


@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}

.form-group {
  flex-basis: 100%;
}

.required {
  color: red;
}



</style>
<?php
if (isset($_GET["success"]) && $_GET["success"] == "true") {

    echo "<body style='margin: 0px;'><div class='success-box' style='font-family: 'Poppins', Arial, sans-serif; background-color: #c7f3ca; border: 2px solid #4caf50; border-radius: 10px; padding: 20px; text-align: center;'>
    <h3 style='color: #4caf50;'>Ankesa juaj u d&euml;rgua me sukses!</h3>
    <p>Faleminderit q&euml; po na ndihmoni çdo dit&euml; e m&euml; tep&euml;r n&euml; p&euml;rmir&euml;simin e cil&euml;sis&euml; s&euml; polic&euml;ve tan&euml;.!<br>
    Ankesat shqyrtoh&euml;n çdo t&euml; premte dhe ju do t&euml; merrni nj&euml; p&euml;rgjigje n&euml; Discord sapo t&euml; shikohet ankesa juaj nga nj&euml; mbik&euml;qyr&euml;s..</p>
    <p style='font-size: 0.8em; color: #666;'>Verejejte* - Ju lutem lejoni mesazhet nga t&euml; panjohurit n&euml; Discord, pasi q&euml; ndryshe nuk mund t&euml; ju kontaktojm&euml; dhe ankesa juaj hidhet posht&euml;..</p><br>
    <meta http-equiv='refresh' content='15; url=ankohu.php'>
  </div>";
} else {
?>

<div class="form-container">
<div class="logo-container">
  <img style="height: 150px; width: auto; float: left; margin-right: 70px;" src="images/ipkja.png" alt="Left Logo">
  <div style="display: inline-block; margin-top: 45px;"><ul><b>&middot; Matrix Roleplay &middot;</b></ul></div>
  <img style="height: 155px; width: auto; float: right; margin-left: 92px;" src="images/matrix_2.png" alt="Right Logo">
</div>





  <h2>Ankohu p&euml;r zyrtar&euml;t e Policis&euml; s&euml; Matrix Roleplay</h2>
  <p>Ne mundohemi q&euml; ta b&euml;jme trajnimin e zyrtar&euml;ve tan&euml; n&euml; m&euml;nyr&euml;n m&euml; t&euml; mir&euml; t&euml; mundshme, n&euml; m&euml;nyr&euml; q&euml; performanca e tyre ndaj qytetar&euml;ve t&euml; jet&euml; sa m&euml; e mir&euml; dhe produktive. Si t&euml; gjith&euml; njer&euml;zit, ne gjithashtu mund t&euml; kemi probleme dhe mund t&euml; b&euml;jm&euml; gabime, por ato duhet t&euml; ndeshkohen p&euml;r t&euml; reduktuar p&euml;rs&euml;ritjen e tyre Prandaj, n&euml;se besoni se nj&euml; zyrtar policie ka b&euml;r&euml; diçka gabim n&euml; kryerjen e detyr&euml;s zyrtare, ju lutem referohuni n&euml; formularin e m&euml;posht&euml;m p&euml;r t&euml; d&euml;rguar nj&euml; ankes&euml;.</p>
  <form method="post" action="ankohu-process.php">
    <div class="form-group">
      <label for="discord">Discordi juaj: <span class="required" >*</span></label>
      <input type="text" id="discord" name="discord" required placeholder="origami_xk">
    </div>
    <div class="form-group">
      <label for="badge_number">Numri i begjit t&euml; policit ose polic&euml;ve t&euml; involvuar (A1-01): <span class="required">*</span></label>
      <input type="text" id="badge_number" name="badge_number" required  placeholder="C2-15">
    </div>
    <div class="form-group">
      <label for="date">Data e ndodhis&euml; (DD-MM-YYYY): <span class="required">*</span></label>
      <input type="date" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="case_explanation">Shpjegimi i rastit t&euml; ndodhur: <span class="required">*</span></label>
      <textarea id="case_explanation" name="case_explanation" required placeholder="Sqarimi juaj ketu..."></textarea>
    </div>
    <div class="form-group">
      <label for="police-mistake">Pse mendoni se policia ka vepruar gabimisht? <span class="required">*</span></label>
      <textarea id="police_mistake" name="police_mistake" required placeholder="Sqarimi juaj ketu..."></textarea>
    </div>
    <div class="form-group">
      <label for="evidence">Bashkangjitni evidenc&euml;n q&euml; keni (foto, video):</label>
      <input type="text" id="evidence" name="evidence" placeholder="https://origami.net/evidence">

    </div>
    <button type="submit">D&euml;rgo ankes&euml;n</button>


  </form>
</div><?php } ?>



