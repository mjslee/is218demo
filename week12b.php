<?php

	require_once 'week12-database.php';
	
	$query = 'SELECT * FROM categories ORDER BY categoryID';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
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
			
	    <?php foreach ($categories as $category) : ?>
	    <div>
	        <?php echo $category['categoryName']; ?>
	        <br /><br />
	    </div>
		<?php endforeach; ?>		
			
		</main>
</body>
</html>