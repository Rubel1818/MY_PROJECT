<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Request Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f5f5f5;
    }
    form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-group label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-control {
      border-radius: 5px;
      border: none;
      padding: 10px;
    }
    .form-control:focus {
      box-shadow: none;
      outline: none;
    }
    .btn-primary {
      border-radius: 5px;
      border: none;
      padding: 10px 20px;
      background-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Post Request Form</h1>
    <form method="post" action="person.php">
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="first-name" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="last-name" required>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>
      <div class="form-group">
        <label for="sex">Sex</label>
        <select class="form-control" id="sex" name="sex" required>
          <option value="">Select your sex</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="weight">Weight</label>
        <input type="number" class="form-control" id="weight" name="weight" required>
      </div>
      <div class="form-group">
        <label for="height">Height</label>
        <input type="number" class="form-control" id="height" name="height" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>