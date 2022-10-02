<?php     
	session_start();
	       error_reporting(0);
	       include('config.php');  
	      $uname = mysqli_real_escape_string($conn,$_POST['username']);
	    $password = mysqli_real_escape_string($conn,$_POST['password']); 
	    
	   
	
	    if ($uname != "" && $password != ""){
	
	     
	        $sql_query = "select * from tab_family where email='".$uname."' and password='".$password."'"; 
	        $result = mysqli_query($conn,$sql_query);
	        $row = mysqli_fetch_array($result);
	       $count=mysqli_num_rows($result);
	        //$count = $row['cntUser'];
	
	        if($count > 0){
	            $_SESSION['uname'] = $uname;
	            
				
	    
	            header('Location:homepage.php');
	        }else{
	           header('Location:index.php?flag=fail');
	        }
	
	    }
	
	    ?>