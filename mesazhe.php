<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<html>
<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="UTF-8" />
    <title>Autotext Generator</title>
    <style>
      * {
        box-sizing: border-box;
        font-family: "Poppins", Arial, sans-serif;
      }
      body {
        margin: 0;
        padding: 0;
      }
      .container {
        display: flex;
        flex-direction: row;
        height: 100vh;
      }
      .input-container {
        flex: 1;
        padding: 20px;
      }
      .input-field {
        display: block;
        margin-bottom: 10px;
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .input-field textarea {
        height: 100px;
        resize: none;
      }
      .output-container {
        flex: 1;
        padding: 20px;
        background-color: #f5f5f5;
        overflow-y: scroll;
      }
      .output-field {
        width: 100%;
        height: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .button-container {
        text-align: center;
        margin-top: 10px;
      }
      #baba {
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
      }
      select{
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border: 1px solid #ccc;
		border-radius: 5px;
		font-size: 16px;
		line-height: 1.5;
		font-family: Arial, sans-serif;
	}
      #baba:hover {
        background-color: #3e8e41;
      }
      #generatedText {
  width: 100%;
  height: 300px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  line-height: 1.5;
  overflow-y: scroll;
}



    </style>
  </head>
  <body>
    <div class="container">
      <div class="input-container">
        <h1>Mesazhe LSPD</h1>
        <textarea id="generatedText" rows="10" cols="50"></textarea>
    <button id="copyButton" style="display:none" onclick="copyToClipboard()">
      Copy to clipboard
    </button>
        <form id="form">
          <label for="format">Zgjidhe llojin:</label>
          <select name="format" id="format" class="input-field">
            <option value="ver">Verejtje me shkrim</option>
            <option value="lar">Largim nga puna</option>
          </select>
          <label for="pervrejtje">Numri begjit</label>
          <select name="pervrejtje" id="pervrejtje"><?php
				
				$sql = "SELECT number, first_last FROM members";
				$result = $conn->query($sql);
				// Display the badge numbers and names as options in the dropdown
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<option value='" . $row["number"] . "'>" . $row["number"] . " | " . $row["first_last"] . "</option>";
					}
				}
				
			?></select>

          <label for="arsyeja">Arsyeja:</label>
          <textarea id="arsyeja" class="input-field"></textarea required>
          <label for="nenshkrimi">Nenshkruar nga:</label>
          <select name="nenshkrimi" id="nenshkrimi">
<?php
$sql = "SELECT number, first_last FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Modify the value attribute to include both columns
    $value = $row["number"] . ' | ' . $row["first_last"];
    echo "<option value='" . $value . "'>" . $row["number"] . " | " . $row["first_last"] . "</option>";
  }
}

$conn->close();
?>
</select>

          <label for="data">Data:</label>
          <input type="date" id="data" class="input-field" required/>
          <div class="button-container">
            <button id="baba" type="button" onclick="generateText()">Gjenero</button>
          </div>
        </form>
    <br />
    <br />
    
    <script>
      function generateText() {
        var format = document.getElementById("format").value;
        var arsyeja = document.getElementById("arsyeja").value;
        var nenshkrimi = document.getElementById("nenshkrimi").value;
        var pervrejtje = document.getElementById("pervrejtje").value;
        var data = document.getElementById("data").value;

        var generatedText = "";
        var randomNumber = Math.floor(Math.random() * 90000) + 10000;

        if (format === "ver") {
          generatedText =
            "I/e nderuar " +
            pervrejtje +
            ",\n\nJu njoftoj se ju kemi dh\u00EBn\u00EB nj\u00EB verejtje me shkrim n\u00EB databaz\u00EB.\nArsyeja \u00EBsht\u00EB si vijon: \n\"" +
            arsyeja + "\"" +
            ".\nData: " +
            data +
            "\n\nN\u00EBnshkruar,\n" +
            nenshkrimi +
            ".\n(**Numri serik i vendimit: " +
            randomNumber +
            "**)";
        } else if (format === "lar") {
          generatedText =
            "I/e nderuar " +
            pervrejtje +
            ",\n\nJu njoftoj se ju jeni larguar nga pozita juaj si pjestar i policis\u00EB s\u00EB Nakama RP.\nArsyeja eshte si vijon: \n" +
            arsyeja +
            "\nData " +
            data +
            "\n\nN\u00EBnshkruar,\n" +
            nenshkrimi +
            ".\n(**Numri serik i vendimit: " +
            randomNumber +
            "**)";
        }

        document.getElementById("generatedText").value = generatedText;
        document.getElementById("copyButton").style.display = "block";
      }

      function copyToClipboard() {
        var copyText = document.getElementById("generatedText");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");

      }
    </script>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>