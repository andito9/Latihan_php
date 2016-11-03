<?php

session_start();
	//echo"<pre>".print_r($_POST,1)."</pre>";
		$x=[];
		$x['email']="no_error";
		$x['password']="no_error";
		
	if(isset($_POST['email'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	

	if(trim($email)==""){
		$x['email']='error_empty';
	}else if(strlen($password)<=8){
		$x['password']= 'password_length';
	}else if(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
		$x['password']= 'password_restrict';
	}
		
	
	
	
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$x['email']="error_format";
	}else{
		$x['email']=="no_error";
	}
	
	if(trim($password)==""){
		$x['password'] = "password_empty";
	}
		
	
	if($email=="andito@gmail.com"){
		if($password=="test"){
			$_SESSION['isLoggedIn']=true;
			$_SESSION['email']=$email;
			header("location:index.php?l=success");
			}else{
			$_SESSION['isLoggedIn']=false;
			
			}			
	}else{
		$_SESSION['isLoggedIn']=false;
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>E-Mail</td>
				<td><input type="text"
					name="email"></td>
			</tr>
			<?php
			if($x['email']!="no_error"){ ?>
			<tr>
				<td></td>
				<td>
					<?php switch($x['email']){
							case'error_empty':
						echo'<span style="color:red">
							E-Mail Cannot Be Blank
						</span>';
						break;
						case 'error_format': 
							echo'<span style="color:red">
							E-Mail Format Error
						</span>';
						break;
					}
					?>
						
					
				</td>
			
			</tr>
			
			<?php }
			
			?>
		
			<tr>
				<td>Password</td>
				<td><input type="password"
					name="password"></td>
			</tr>
			
			
		
			<tr>
				<td></td>
				<td><button type="submit">Sign In</button></td>
			</tr>
		</table>
	</form>
</body>
</html>