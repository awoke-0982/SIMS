<?php require_once 'auth.php';?>
<?php include 'db.php';?>
<?php include 'session.php';?>
<?php include 'function.php';?>

<?php

if(isset($_POST['submit'])){

  $_POST['regNo'] = random_string(12);
  $regNo=$_POST['regNo'];
  $ln=$_POST['lname'];
  $fn=$_POST['fname'];
  $un=$_POST['uname'];
  $gender= $_POST['gender'];
  $utype='STUDENT';
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
location.href = ''
</script>";

  }else {
   echo "<script>
  alert('Failed to Submit.');
  </script>";

  
}

}

}

?>
