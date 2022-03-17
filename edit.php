<?php

$connection = mysqli_connect('localhost','root','','learnphp' );
$id = $_GET['id'];




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

    $query = "UPDATE students SET fname='$fname', lname='$lname', email='$email',
     password='$enc_password', add_one='$add_one', add_two='$add_two', city='$city', 
     state='$state', zip='$zip',age='$age',m_status='$status',religion='$religion',caste='$caste',
     bloodGroup='$blood_group',mobile='$mobile',landline='$landline',about='$about' WHERE id=$id";

    $response = mysqli_query($connection, $query);
    if ($response) {
      header('Location:index.php'); //for redirecting
  }

}
$up_query = "SELECT * FROM students WHERE id=$id";
$res = mysqli_query($connection, $up_query);

$studentData = mysqli_fetch_assoc($res);


?>

<form method="POST" class="row g-3" style="padding: 10px;">
    <div class="form-group col-md-6">
      <label for="name">First Name</label>
      <input type="text" class="form-control" id="inputName" name="fname" value="<?=$studentData['fname']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Last Name</label>
      <input type="text" class="form-control" id="inputName" name="lname"value="<?=$studentData['lname']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"value="<?=$studentData['email']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password"value="<?=$studentData['password']?>">
    </div>
  </div>
    <div class="col-md-6">
      <label for="inputAddress">Address 1</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="line1" value="<?=$studentData['line1']?>">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="line2"value="<?=$studentData['line2']?>">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city"value="<?=$studentData['city']?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state"value="<?=$studentData['state']?>">
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
      <input type="text" class="form-control" id="inputZip" name="zip"value="<?=$studentData['zip']?>">
    </div>
    <div class="form-group col-md-2">
      <label for="inputage">Age</label>
      <input type="number" class="form-control" id="inputAge" name="age"vRam Prasad
      <label for="inputReligion">Religion</label>
      <select id="inputReligion" class="form-control" name="religion"value="<?=$studentData['religion']?>">
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
      <select id="inputCaste" class="form-control" name="caste"value="<?=$studentData['caste']?>">
        <option selected>Choose...</option>
        <option>Brahmin</option>
        <option>Chhetri</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputBloodGroup">Blood Group</label>
      <select id="inputBloodGroup" class="form-control" name="bgroup"value="<?=$studentData['bloodGroup']?>">
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
      <input type="text" class="form-control" id="inputZip" name="mobile"value="<?=$studentData['mobile']?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputlandline">landline no</label>
      <input type="text" class="form-control" id="inputlandline" name="landline"value="<?=$studentData['line']?>">
    </div>
  <div class="form-group">
    <label for="inputAboutYourself">About Yourself</label>
    <input type="textarea" class="form-control" id="inputAboutYourself" rows="5" placeholder="Write about yourself in short" name="about"value="<?=$studentData['about']?>">
  </div>
    <br>
  <div>
  <button type="submit" class="btn btn-primary">Update Record</button>
  </div>
</form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<br><br>

