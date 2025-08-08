<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Send Notification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f6f9;
    }
    .notification-form {
      max-width: 600px;
      margin: 80px auto;
      background: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-title {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
      font-size: 24px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="notification-form">
      <div class="form-title">Send Notification to All Users</div>
      <form id="notificationForm">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter notification title" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Enter notification message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Notification</button>
      </form>
      <div id="responseMsg" class="alert alert-success mt-3 d-none" role="alert"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
    $('#notificationForm').on('submit', function(e) {
    e.preventDefault();
    const title = $('#title').val().trim();
    const message = $('#message').val().trim();

    if (!title || !message) {
      $('#response').html('<div class="alert alert-warning">Please enter both title and message.</div>');
      return;
    }
      console.log("Notification Sent:", { title, message });

      $.ajax({
        type: "POST",
        url: "<?= base_url("Admin_dashboard/send_push_notification") ?>",
        data: { title: title, message: message },
        success: function(response) {
            $('#response').html('<div class="alert alert-success">Notification sent successfully!</div>');
            $('#notificationForm')[0].reset();
        },
        error: function(xhr, status, error) {
            $('#response').html('<div class="alert alert-danger">Error sending notification.</div>');
        }
      });      

    //   const responseMsg = document.getElementById('responseMsg');
    //   responseMsg.textContent = "Notification sent successfully!";
    //   responseMsg.classList.remove('d-none');

    //   // Clear form
    //   document.getElementById('notificationForm').reset();
    });
  </script>

</body>
</html>
