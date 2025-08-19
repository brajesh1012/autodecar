<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <form method="post">
  <label>New Password</label>
  <input type="password" name="password" required class="form-control">
  <label>Confirm Password</label>
  <input type="password" name="confirm_password" required class="form-control">
  <button type="submit" class="btn btn-primary mt-2">Reset Password</button>
  <?= validation_errors('<div class="text-danger">', '</div>'); ?>
</form>

</body>
</html>