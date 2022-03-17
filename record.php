<?php
$connection = mysqli_connect('localhost','root','','learnphp' );

if(!empty($_POST)){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $enc_password = md5(($password));
  $add_one = $_POST['line1'];
  $add_two = $_POST['line2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $age = $_POST['age'];
  $status = $_POST['status'];
  // $country = $_POST['country'];
  $religion = $_POST['religion'];
  $caste = $_POST['caste'];
  $blood_group = $_POST['bgroup'];
  $mobile = $_POST['mobile'];
  $landline = $_POST['landline'];
  $about = $_POST['about'];
  $query = "INSERT INTO students (fname, lname, email, password, add_one, add_two, city, state,zip,age,m_status,religion,caste,bloodGroup,mobile,landline,about)
  VALUES('$fname', '$lname', '$email', '$enc_password', '$add_one', '$add_two', '$city', '$state', '$zip', '$age','$status','$religion','$caste','$blood_group','$mobile','$landline','$about')";
  $response = mysqli_query($connection, $query);
  if ($response) {
    header('Location:index.php'); //for redirecting
}

}
$sql_query = "SELECT * FROM students ORDER BY id DESC";
$studentRecord = mysqli_query($connection, $sql_query);



?>

<form method="POST" class="row g-3" style="padding: 10px;">
    <div class="form-group col-md-6">
      <label for="name">First Name</label>
      <input type="text" class="form-control" id="inputName" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Last Name</label>
      <input type="text" class="form-control" id="inputName" name="lname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>
    <div class="col-md-6">
      <label for="inputAddress">Address 1</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="line1">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="line2">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Bagmati Pradesh</option>
        <option>Karnali Pradesh</option>
        <option>Gandaki Pradesh</option>
        <option>Province no.2</option>
        <option>Province no.1</option>
        <option>Province no.7</option>
        <option>Province no.6</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
    <div class="form-group col-md-2">
      <label for="inputage">Age</label>
      <input type="number" class="form-control" id="inputAge" name="age">
    </div>
    <div class="form-group col-md-4">
      <label for="inputStatus">Marital Status</label>
      <select id="inputStatus" class="form-control" name="status">
        <option selected>Choose...</option>
        <option>Married</option>
        <option>Un-Married</option>
        <option>Divorced</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputReligion">Religion</label>
      <select id="inputReligion" class="form-control" name="religion">
        <option selected>Choose...</option>
        <option>Hinduism</option>
        <option>Buddism</option>
        <option>Islam</option>
        <option>Christianity</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputCaste">Caste</label>
      <select id="inputCaste" class="form-control" name="caste">
        <option selected>Choose...</option>
        <option>Brahmin</option>
        <option>Chhetri</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputBloodGroup">Blood Group</label>
      <select id="inputBloodGroup" class="form-control" name="bgroup">
        <option selected>Choose...</option>
        <option>O +ve</option>
        <option>A +ve</option>
        <option>AB +ve</option>
        <option>B +ve</option>
        <option>O -ve</option>
        <option>AB -ve</option>
        <option>A -ve</option>
        <option>B -ve</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputmobile">Mobile no</label>
      <input type="text" class="form-control" id="inputZip" name="mobile">
    </div>
    <div class="form-group col-md-4">
      <label for="inputlandline">landline no</label>
      <input type="text" class="form-control" id="inputlandline" name="landline">
    </div>
  <div class="form-group">
    <label for="inputAboutYourself">About Yourself</label>
    <input type="textarea" class="form-control" id="inputAboutYourself" rows="5" placeholder="Write about yourself in short" name="about">
  </div>
    <br>
  <div>
  <button type="submit" class="btn btn-primary">Add Record</button>
  </div>
</form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<br><br>
<table class="table">
  <thead class="table-dark">
    <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Email</th>
      <th>city</th>
      <th>Age</th>
      <th>Mobile no.</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($studentRecord as $key => $student) { ?>
    <tr>
      <td><?= ++$key ?></td>
      <td><?= $student['fname'].' '.$student['lname']?></td>
      <td><?= $student['email']?></td>
      <td><?= $student['city']?></td>
      <td><?= $student['age']?></td>
      <td><?= $student['mobile']?></td>
      <td>
      
        <a href="edit.php?id=<?=$student['id']?>" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Edit</a>
        <a href="delete.php?id=<?=$student['id']?>"class="btn btn-primary btn-sm" role="button" aria-pressed="true" onclick="return confirm('Record will be deleted')">Delete</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

