<?php 
  session_start();
  include ("conn.php");
    include ("fun.php");
     $userData=check_prof($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>This is my profile</title>
  <style type="text/css">
  body{
    color: darkcyan;
    border-radius: 5px;
    margin: 0px;
    display: block;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    background-color: black;
    justify-content: center;
  }
  .p{
    width: 400px;
  max-width: 400px;
  margin: 1rem;
  padding: 2rem;
  box-shadow: 0 0 45px rgba(0,0,0,0.5);
  border-radius: 5px;
  background: whitesmoke;

  }
  </style>
</head>
<body >
  <div class="p">
    <span>First-name: </span><?php echo $userData['firstName'];  ?><br>
    <span>Family-name: </span><?php echo $userData['familyName']; ?><br>
    <span>Email: </span><?php echo htmlspecialchars($_SESSION['email']); ?><br>
    <span>Gender: </span><?php echo $userData['gender']; ?><br>
    <span>County: </span><?php echo $userData['county']; ?><br>
    <span>Country: </span><?php echo $userData['country']; ?><br>
  </div>
</body>
</html>
