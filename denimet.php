<?php include 'header.php'; ?>
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

  <head>
    <title>My Website</title>
    <style>
      /* Add some styles to the iframe container */
      .iframe-container {
        position: absolute;
        width: 50%;
        height: 0;
        padding-bottom: 56.25%;
        /* Set the aspect ratio to 16:9 */
        background-image: url('vothi.jpg');
      }

      /* Add some styles to the iframe itself */
      .iframe-container iframe {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
      }
    </style>
  </head>

  <body>
    <h1>Lista e denimeve</h1>
    <div class="iframe-container">
      <iframe src="http://tiny.cc/AB_denimet"></iframe>
    </div>
  </body>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>