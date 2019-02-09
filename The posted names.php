<?php
	
	$x = @new mysqli( "localhost" , "Mostafa" , "" , "test" );
	@$y = $x->query("SELECT users , num FROM form");
	if (@$y->num_rows > 0)
	{
    	while($row = $y->fetch_array()) 
    	{
        	echo "<h2>" . $row["num"] . " . " . $row["users"]. "<br>". "</h2>";
    	}
	}
	else
	{
		echo  " <h1> There Are a Problem In Connection </h1>";
	}
  ?>
 
