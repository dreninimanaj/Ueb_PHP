<?php include 'header.php'; ?>
<?php include 'config.php'; 
$user_id = $_SESSION['id'];

// Get the full name of the user from the database using references
$sql = "SELECT fullname, role FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($fullname, $role);
$stmt->fetch();
$stmt->close();
?>
<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Listen for changes in the input fields
    const daljesInput = document.getElementById("data_daljes");
    const rikthimitInput = document.getElementById("data_rikthimit");
    const totalDaysInput = document.getElementById("aprovuar_nga");

    daljesInput.addEventListener("change", updateTotalDays);
    rikthimitInput.addEventListener("change", updateTotalDays);

    function updateTotalDays() {
      const daljesDate = new Date(daljesInput.value);
      const rikthimitDate = new Date(rikthimitInput.value);
      if (daljesDate && rikthimitDate) {
        const totalDays = Math.ceil((rikthimitDate - daljesDate) / (1000 * 60 * 60 * 24));
        totalDaysInput.value = totalDays + ' dit\u00EB';
      }
    }
  });
</script>


    
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       
      <form action="process_form.php" style="width: 60%;float:right;margin-right:10%;" method="post">
  <div class="form-group">
 <center><h2>Paraqit pushim vjetor&euml;</h2></center>
  <label for="numri_begjit">Numri begjit | Emri dhe Mbiemri:</label>
		<input type="text" value="<?php echo $fullname; ?>" readonly>
  </div>
  <div class="form-group">
  <label for="data_daljes">Data e daljes:</label>
  <input type="date" id="data_daljes" name="data_daljes" required>
</div>

<div class="form-group">
  <label for="arsyeja">Arsyeja:</label>
  <textarea id="arsyeja" name="arsyeja" required></textarea>
</div>

<div class="form-group">
  <label for="data_rikthimit">Data e rikthimit:</label>
  <input type="date" id="data_rikthimit" name="data_rikthimit" required>
</div>

<div class="form-group">
    <label style="color:gray" for="aprovuar_nga">Pushim gjithsejt:</label>
    <input type="text" id="aprovuar_nga" name="aprovuar_nga" readonly>
</div>



<div class="form-group">
  <input type="submit" value="Paraqit">    
</div>

  </form>
<style>
  .form-group {
    margin-bottom: 20px;
    
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="number"],
  input[type="date"],
  select,
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    box-sizing: border-box;
  }
  
  input[type="submit"] {
    background-color: #008CBA;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: #006A8E;
  }
  input[id="aprovuar_nga"] {
    color: red;
    background-color: lightgray;
    font-size: large;
    font-weight: 800;
  }
</style>


		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Listen for changes in the input fields
            const formInputs = {
                daljesInput: document.getElementById("data_daljes"),
                rikthimitInput: document.getElementById("data_rikthimit"),
                totalDaysInput: document.getElementById("aprovuar_nga")
            };

            formInputs.daljesInput.addEventListener("change", updateTotalDays);
            formInputs.rikthimitInput.addEventListener("change", updateTotalDays);

            function updateTotalDays() {
                const daljesDate = new Date(formInputs.daljesInput.value);
                const rikthimitDate = new Date(formInputs.rikthimitInput.value);
                if (daljesDate && rikthimitDate) {
                    const totalDays = Math.ceil((rikthimitDate - daljesDate) / (1000 * 60 * 60 * 24));
                    formInputs.totalDaysInput.value = totalDays + ' dit\u00EB';
                }
            }
        });
    </script>

  </body>
</html>