<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Object Oriented Programming</title>

<?php include("week10b-class_lib.php"); ?>

</head>

<body>

<?php 

// Using our PHP objects in our PHP pages. 


$myPerson = new person("Daryl Dixon");

echo "Person: " . $myPerson->get_name() . "<br />";

$myEmployee = new employee("Morgan Jones");

echo "Employee: " . $myEmployee->get_name();

?>


</body>
</html>
