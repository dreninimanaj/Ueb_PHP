<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Members List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-image: url('vothi.jpg');
      background-size: cover;
      background-repeat: repeat;
    }

    .table-container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
    }

    .table th,
    .table td {
      background-color: white;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="form-group">
      <input type="text" id="filter" class="form-control" placeholder="Search members...">
    </div>

    <div id="table-container">
      <?php include 'fetch_table.php'; ?>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <input type="hidden" id="editId">
            <div class="form-group">
              <label for="editName">Name</label>
              <input type="text" class="form-control" id="editName" required>
            </div>
            <div class="form-group">
              <label for="editNumber">Number</label>
              <input type="text" class="form-control" id="editNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this member?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Load jQuery first -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Fallback to ensure jQuery is loaded
    if (typeof jQuery === 'undefined') {
      document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><\/script>');
    }
  </script>
  <!-- Load Bootstrap and other scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
      function bindEvents() {
        $j('.edit-btn').on('click', function() {
          var id = $j(this).data('id');
          var name = $j(this).data('name');
          var number = $j(this).data('number');
          $j('#editId').val(id);
          $j('#editName').val(name);
          $j('#editNumber').val(number);
          $j('#editModal').modal('show');
        });

        $j('.delete-btn').on('click', function() {
          var id = $j(this).data('id');
          $j('#confirmDelete').data('id', id);
          $j('#deleteModal').modal('show');
        });
      }

      $j('#filter').on('input', function() {
        var search = $j(this).val();
        $j.ajax({
          url: 'fetch_table.php',
          method: 'GET',
          data: {
            search: search
          },
          success: function(response) {
            $j('#table-container').html(response);
            bindEvents(); // Re-bind events after new content is loaded
          },
          error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
          }
        });
      });

      bindEvents(); // Bind events on initial load

      $j('#editForm').on('submit', function(e) {
        e.preventDefault();
        var id = $j('#editId').val();
        var name = $j('#editName').val();
        var number = $j('#editNumber').val();
        // Implement AJAX call to update member
        console.log("Edit form submitted for ID: " + id + ", Name: " + name + ", Number: " + number);
        $j('#editModal').modal('hide');
      });

      $j('#confirmDelete').on('click', function() {
        var id = $j(this).data('id');
        // Implement AJAX call to delete member
        console.log("Delete confirmed for ID: " + id);
        $j('#deleteModal').modal('hide');
      });
    });
  </script>
  <script>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
      function bindEvents() {
        $j('.edit-btn').on('click', function() {
          var id = $j(this).data('id');
          var name = $j(this).data('name');
          var number = $j(this).data('number');
          $j('#editId').val(id);
          $j('#editName').val(name);
          $j('#editNumber').val(number);
          $j('#editModal').modal('show');
        });

        $j('.delete-btn').on('click', function() {
          var id = $j(this).data('id');
          $j('#confirmDelete').data('id', id);
          $j('#deleteModal').modal('show');
        });
      }

      $j('#filter').on('input', function() {
        var search = $j(this).val();
        $j.ajax({
          url: 'fetch_table.php',
          method: 'GET',
          data: {
            search: search
          },
          success: function(response) {
            $j('#table-container').html(response);
            bindEvents(); // Re-bind events after new content is loaded
          },
          error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
          }
        });
      });

      bindEvents(); // Bind events on initial load

      $j('#editForm').on('submit', function(e) {
        e.preventDefault();
        var id = $j('#editId').val();
        var name = $j('#editName').val();
        var number = $j('#editNumber').val();
        $j.ajax({
          url: 'edit_member.php',
          method: 'POST',
          data: {
            id: id,
            name: name,
            number: number
          },
          success: function(response) {
            console.log(response);
            $j('#editModal').modal('hide');
            // Reload the table
            $j('#filter').trigger('input');
          },
          error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
          }
        });
      });

      $j('#confirmDelete').on('click', function() {
        var id = $j(this).data('id');
        $j.ajax({
          url: 'delete_member.php',
          method: 'POST',
          data: {
            id: id
          },
          success: function(response) {
            console.log(response);
            $j('#deleteModal').modal('hide');
            // Reload the table
            $j('#filter').trigger('input');
          },
          error: function(xhr, status, error) {
            console.error("AJAX Error:", status, error);
          }
        });
      });
    });
  </script>
</body>

</html>