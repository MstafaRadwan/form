<?php
	$x = @new mysqli( "localhost" , "Mostafa" , "" , "test" );
	@$name     = $_POST["name"]  ;
	@$lastName = $_POST["last"]  ;
	@$email    = $_POST["email"] ;
	@$phone    = $_POST["phone"] ;
	@$age 	   = $_POST["age"]   ;
	@$Country  = $_POST["from"]  ; 
	@$submit   = $_POST["submit"];
	@$r = $x->query("SELECT * FROM form");
	if (@$r->num_rows > 0)
	{
		if ($name && $email && $phone && $submit && $lastName && $age && $Country)
		{
			$y = $x->query("INSERT INTO form VALUES('','$name','$lastName',
				'$email','$phone','$age','$Country')");
		}
		else
		{
			echo "Please Enter Your Real Data";
		}

  		echo '
  		<form action="test.php" method="POST">
			<h3> Your Name : </h3>
			<input type="text" name="name" placeholder="Enter Your Name" />
			<br>
			<h3> Your Last Name : </h3>
			<input type="text" name="last" placeholder="Enter Your Last Name" />
			<br>
			<h3> Your E-mail : </h3>
			<input type="text" name="email" placeholder="Enter Your E-mail" />
			<h3> Your Phone Number : </h3>
			<input type="Number" name="phone" placeholder="Enter Your Phone" />
			<br>
			<h3> Your Age : </h3>
			<input type="num" name="age" placeholder="Enter Your Age" />
			<br>
			<h3> Your  Country : </h3>
			<input type="text" name="from" placeholder="Enter Your Cuntry" />
			<br><br>
			<input type="submit" name="submit" />
		</form>';
	}
	else
	{
		echo  " <h1> There Are a Problem In Connection </h1>";
	}
?>