<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      .container {
        margin: 0 auto;
        max-width: 500px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        border-radius: 10px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
      }
      h1 {
        font-size: 24px;
        margin-top: 0;
        margin-bottom: 20px;
        text-align: center;
      }
      label {
        display: block;
        font-size: 16px;
        margin-bottom: 5px;
      }
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #f2f2f2;
      }
      input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
      }
      input[type="submit"]:hover {
        background-color: #0069d9;
      }
      .error-message {
        color: #dc3545;
        margin-bottom: 20px;
        font-size: 16px;
      }
      .alert {
        background-color: #dc3545;
        color: #fff;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 20px;
		font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Vendos nj&euml; fjal&euml;kalim t&euml; ri</h1>
     <center> <p class="alert">Fjal&euml;kalimi q&euml; ju vendos&euml;m ishte i p&euml;rkohsh&euml;m dhe shum&euml; i pasigurt, vendosni nj&euml; fjal&euml;kalim tjet&euml;r m&euml; t&euml; sigurt.</p> </center>
      <form action="change_password.php" method="POST">
        <label for="new_password">Fjal&euml;kalimi i ri:</label>
        <input type="password" name="new_password" id="new_password" required>
        <label for="confirm_password">Konfirmo fjal&euml;kalimin:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <input type="submit" value="Ndrysho">
      </form>
    </div>
  </body>
</html>
