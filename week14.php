<?php

	require_once 'week14-database.php';
	
	$query = 'SELECT * FROM accounts ORDER BY id';
	$statement = $db->prepare($query);
	$statement->execute();
	$results = $statement->fetchAll();
	$statement->closeCursor();



?>


    
    
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>IS218 Test</title>
</head>

<!-- the body section -->
<body>
		<main>
			
	    <?php foreach ($results as $oneLine) : ?>
	    <div>
	        <?php echo $oneLine['fname']; ?>
	        <br /><br />
	    </div>
		<?php endforeach; ?>		
			
		</main>
</body>
</html>