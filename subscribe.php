<?php

if (isset($_POST["Submit"])) {
    $name= $_POST["first_name"]; 

    $email = $_POST["email"];
	
	$requirement = $_POST["detail"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $requirement = wordwrap($requirement, 70);
    // send mail
    mail("vikaspanwar16@gmail.com","Order","Name: $name\n Email id: $email\n message: $requirement\n");
    echo '<script type="text/javascript">alert("Thank you, we will contact you ASAP.");window.location=\'secureblocks/index.html\'</script>';

}
?>