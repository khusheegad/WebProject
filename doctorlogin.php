<?php
     $email = $_POST['email'];
	 $password = $_POST['password'];

   if ($email==("shiv@gmail.com") & $password==("admin") ) {
	    
		$_SESSION['email']= $email;
		$_SESSION['password']=$password;
		header("location:Doctorsection.html");
		
}  else if ($email==("khushee@gmail.com") & $password==("admin") ) {
	    
	$_SESSION['email']= $email;
	$_SESSION['password']=$password;
	header("location:html/Doctorsection.html");
	
}  else if ($email==("mohit@gmail.com") & $password==("admin") ) {
	    
	$_SESSION['email']= $email;
	$_SESSION['password']=$password;
	header("location:html/Doctorsection.html");
	
}
   else
	   echo 'Something went wrong! Try again.';
?>