<html>
   
   <head>
      <title>IS218 Demo - Week 10B</title>
   </head>
   
   <body>
      
      
      <?php 
	      // ARRAYS
	      
	      $myArray = array(1,2,3,4,5);
	      
	      echo "Array Value: " . $myArray[2];
	      
	      //print_r($myArray);
	      
	   ?>
      
      <br /><br />
      
      <!--
      <?php
         /* Defining a PHP Function */
         function writeMessage() {
            echo "This is a message!";
         }
         
         /* Calling a PHP Function */
         writeMessage();
      ?>
      -->
      
      <br /><br />
      
      <!--
      <?php
	     /* Function with Parameters */
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         addFunction(10, 20);
      ?>
      -->
      
      <br /><br />
      
      <!--
      <?php
	     
	     /* Passing arguments by reference */
	     // Parameter == in definition
	     // Argument == in function calls
	      
         function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
      -->
      
      <br /><br />
      
      <!--
      <?php
	      /* Returning values */
         function newAddFunction($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
         }
         $return_value = newAddFunction(10, 20);
         
         echo "Returned value from the function : $return_value";
      ?>
      -->
      
      <br /><br />
      
      <!--
      <?php
	      /* Default values */
         function printMe($param = NULL) {
            print $param;
         }
         
         printMe("This is test");
         printMe();
      ?>
      -->
      
      <br /><br />
      
      <!--
      <?php
	      /* Dynamic function calls */
         function sayHello() {
            echo "Hello<br />";
         }
         
         $function_holder = "sayHello";
         $function_holder();
      ?>
      -->
      
   </body>
</html>