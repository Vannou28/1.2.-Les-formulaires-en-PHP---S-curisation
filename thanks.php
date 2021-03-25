<?php
// define variables and set to empty values
$sumErr = $nameErr = $emailErr = $FirstNameErr = $lstDestinationErr = $phoneNumberErr =  $commentErr = "";
$name = $email = $FirstName = $lstDestination  = $phoneNumber = $comment = "";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  if (empty($_POST["user_name"])) {
    $nameErr = "<li>Name is required</li>";
  } else {
    $name = test_input($_POST["user_name"]);
  }

  if (empty($_POST["user_firstName"])) {
    $FirstNameErr = "<li>firstName is required</li>";
  } else {
    $FirstName = test_input($_POST["user_firstName"]);
  }
  
  if (empty($_POST["user_email"])) {
    $emailErr = "<li>Email is required</li>";
  } else  {
    $email = test_input($_POST["user_email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "<li>Email is invalid</li>";
    }
  }

  if (empty($_POST["user_phoneNumber"])) {
    $phoneNumberErr = "<li>Phone number is required</li>";
  } else {
    $phoneNumber = test_input($_POST["user_phoneNumber"]);
  }

  if (empty($_POST["lstDestination"])) {
    $lstDestinationErr = "<li>these destination is required</li>";
  } else {
    $lstDestination = test_input($_POST["lstDestination"]);
  }

  if (empty($_POST["user_message"])) {
    $commentErr = "<li>A comment is required</li>";
  } else {
    $comment = test_input($_POST["user_message"]);
  }
  $sumErr = $nameErr.$emailErr .$FirstNameErr.$lstDestinationErr.$phoneNumberErr.$commentErr;
  
 
 
 
 
 
  


}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  
<?php if ($sumErr === ''){?>
  
<p>Merci <?php echo $FirstName." ".$name ?> 
    de nous avoir contacté pour votre demande sur “<?php echo $lstDestination ?>”.
    </P>
    <P>
    Un de nos conseiller vous contactera soit à l’adresse <?php echo  $email ?> 
    ou par téléphone au <?php echo $phoneNumber ?> dans les plus brefs délais pour traiter votre demande : 
    <?php echo $comment ?></p>

<?php } else{
   echo "<div class = 'messageErreur'>";
    echo "<h1>Attention</h1>";
    echo "<ul>".$sumErr."</ul>";
    echo "</div>";

  } ?>
</body>
</html>


