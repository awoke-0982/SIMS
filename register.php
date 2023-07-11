

<!-- <?php include 'db.php';?> -->
<?php include 'session.php';?>
<?php include 'function.php';?>


<?php


include 'db.php';
if(isset($_POST['submit'])){

  $_POST['regNo'] = random_string(12);
  $regNo=$_POST['regNo'];
  $ln=$_POST['lname'];
  $fn=$_POST['fname'];
  $un=$_POST['uname'];
  $gender= $_POST['gender'];
  $utype= 'STUDENT';
  $bp=$_POST['bp'];
  $dob=$_POST['dob'];
  $sadd=$_POST['sadd'];
  $pg=$_POST['pg'];
  $pga=$_POST['pg_add'];
  $icc=$_POST['icc'];
  $sy=$_POST['sy'];
  $ave=$_POST['ave'];
  $pwd=$_POST['pwd'];
  $prog =$_POST['prog'];
  
  
  if(strlen($regNo)>15){
    
    $_SESSION['ErrorMessage'] = "Unexpected reg key";
    
    
  }elseif(!preg_match('/^[a-zA-Z]+$/', $ln)){

    $_SESSION['ErrorMessage'] = "Last name cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $fn)){

    $_SESSION['ErrorMessage'] = "first name cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $un)){

    $_SESSION['ErrorMessage'] = "User name cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $bp)){

    $_SESSION['ErrorMessage'] = "Birth place cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $sadd)){

    $_SESSION['ErrorMessage'] = "Student Address cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $pg)){

    $_SESSION['ErrorMessage'] = "parent name cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $pga)){

    $_SESSION['ErrorMessage'] = "Parent address cannot contain numbers";
  }elseif(!preg_match('/^[a-zA-Z]+$/', $icc)){

    $_SESSION['ErrorMessage'] = "The name of your previous school cannot contain numbers";
  }elseif(strlen($pwd)<8){

    $_SESSION['ErrorMessage'] = "The password must be atleast 8 characters";
  }elseif(empty($prog)){

    $_SESSION['ErrorMessage'] = "Please select a program to enroll";
  }else{
    $pwde= md5($pwd);
    $regNo = $_POST['regNo'];
    

     $sql = "INSERT INTO student_info (REG_NO,LASTNAME,FIRSTNAME,GENDER,DATE_OF_BIRTH,ADDRESS,BIRTH_PLACE,PARENT_GUARDIAN,P_ADDRESS,INT_COURSE_COMP,SCHOOL_YEAR,GEN_AVE,PROGRAM,USER,USER_TYPE,PASSWORD) 
    VALUES('$regNo','$ln','$fn','$gender','$dob','$sadd','$bp','$pg','$pga','$icc','$sy','$ave','$prog','$un','$utype','$pwde')";

if (mysqli_query($conn, $sql)) {
  
  echo "<script>
alert('Registered successfully!');
location.href = 'login.php'
</script>";

  }else {
   echo "<script>
  alert('Failed to Submit.');
  </script>";

  
}

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <title>Document</title>
</head>
<body>

      
<form class="form-horizontal" method="post" action="#">

 <fieldset>
<div class="container">

<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4><b>Student's Personal Details </b></h4>
</div>

<br>
<br>
<?=ErrorMessage()?>
<div class="col-md-4">
<br>
<div class="form-group">
  <label class="col-xs-4 control-label" for="regNo">reg Number</label>  
  <div class="col-xs-6">
  <input id="regNo" name="regNo" type="integer" placeholder="Reg_No will be generated" maxlength="12" class="form-control input-xs" required="" disabled>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-xs-4 control-label" for="name">Name</label>
  <div class="col-xs-8">
    <div class="input-group">

      <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="fname" placeholder="First name"  type="text" required=""> 
            <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="lname" placeholder="Last name"  type="text" required="">
      <input id="name" class="form-control input-xs"
      style="text-transform: capitalize;" name="uname" placeholder="User name"  type="text" required="">

      


      
    </div>
  </div>
 
</div>

<div class="form-group">
  <label class="col-xs-4 control-label" for="gender">Gender</label>
  <div class="col-xs-4">
    <select id="gender" name="gender" class="form-control input-xs">
    <option value="">Select</option>
      <option value="MALE">Male</option>
      <option value="FEMALE">Female</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-xs-4 control-label" for="utype">User type</label>
  <div class="col-xs-4">
    <select id="utype" name="utype" class="form-control input-xs" disabled>
      <option value="STUDENT">Student</option>
    </select>
  </div>
</div>



<div class="form-group">
  <label class="col-xs-4 control-label" for="address">Birth Place</label>
  <div class="col-xs-8">
    <div class="input-group">
      <input id="address" class="form-control"
      style="text-transform: capitalize;" name="bp" placeholder="Birth Place"  type="text" required="">    </div>
  </div>
</div>
</div>


<div class="col-md-4">
<br>
<br>
<br>

<div class="form-group">
  <label class="col-xs-5 control-label" for="dob">Date of Birth</label>  
  <div class="col-xs-7">
  <input id="dob" name="dob" type="date" placeholder="YYYY-MM-DD" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-xs-5 control-label" for="pob">Student Address</label>  
  <div class="col-xs-7">
  <input id="pob" name="sadd" type="text" style="text-transform: capitalize;" placeholder="Enter Student Address" class="form-control input-xs" required="">
  </div>
</div>


<div class="form-group">
  <label class="col-xs-5 control-label" for="pg">Parent/Guardian</label>
  <div class="col-xs-7">
    <div class="input-group">
      <input id="pg" name="pg" class="form-control" style="text-transform: capitalize;" placeholder="Enter Full Name" type="text" required="">
      <input id="pg" name="pg_add" class="form-control" style="text-transform: capitalize;" placeholder="Enter Address" type="text" required="">

    </div>
  </div>
</div>
</div>
<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4><b>Other information </b></h4>
</div>
<br>
<br>
<div class="col-md-12">
<br>
<div class="form-group">
  <label class="col-xs-2 control-label" for="icc">Where completed</label> 
  <br>
  <div class="col-xs-6">
  <input id="icc" name="icc" type="text"
  style="text-transform: capitalize;"
   placeholder="Enter School Graduated " class="form-control input-xs" required="">
  </div>
</div>


  <div class="form-group">
    <label class="col-xs-2 control-label" for="sy">School Year</label>
  
  <div class="col-xs-10">
    <input class="form-control" style="width:150px" id="sy" name="sy" type="text"
     placeholder="Total year">

  </div>
  </div>
  

  

<div class="form-group">
  <label class="col-xs-2 control-label" for="ave">General Average</label> 
  <div class="col-xs-6">
  <input id="ave" name="ave" type="text" style="width:100px;text-align:right"
   class="form-control input-xs" required="">

  </div>
</div>
</div>

<div class="form-group">
              <label for="sub" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="password" class="form-control"" id="fname" name="pwd" placeholder="New password" required>
                </div>
              </div>
            </div>


            <div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4><b>Program to Enroll </b></h4>
</div>
<br><br> 

<div class="form-group">
  <label class="col-xs-4 control-label" for="Prog">Program</label>

  <div class="col-xs-4">
    <select id="prog" name="prog" class="form-control input-xs" required="">
    <option value="">Select a program</option>
    <?php
    include 'db.php';
    $sql = mysqli_query($conn,"SELECT * from program Order by PROGRAM ASC");
    while($row=mysqli_fetch_assoc($sql)){
    ?>
      <option value="<?php echo $row['PROGRAM_ID'] ?>"><?php echo $row['PROGRAM'] ?></option>
      <?php
    }
    mysqli_close($conn);
      ?>
    </select>
  </div>
</div> 

</div>
</fieldset>





        </div>
        <div class="modal-footer">
        <!--<input type="reset" class="btn btn-success " id="reset" name="reset" value="Reset Form">-->
      <input type="submit" class="btn btn-success " name="submit" value="submit">
      
        </form>
          <button type="button" class="btn btn-success" data-dismiss="modal"><a style="color:white" href="home.html">Cancel</a></button>

         

</body>
</html>
