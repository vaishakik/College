<?php
if (isset($_POST['submit'])){
 
for($i=0;$i<count( $_FILES['file']['name']);$i++){
	$file = $_FILES['file'][$i];//i am taking more than 1 image as input so [i]
	$fileName = $_FILES['file']['name'][$i];
	$fileTmpName = $_FILES['file']['tmp_name'][$i];
	$fileTmpName1 = $_FILES['file']['tmp_name'][$i];
	$fileSize = $_FILES['file']['size'][$i];
	$fileError = $_FILES['file']['error'][$i];
	$fileType = $_FILES['file']['type'][$i];


	$fileExt =explode('.', $fileName);
	$fileActualExt =strtolower(end($fileExt));

	
	$allowed = array('jpg','jpeg','png','pdf' ) ;

	if(in_array($fileActualExt,$allowed))
	{
		if($fileError === 0){
			if($fileSize <1000000){			#1GB in KBs
				//$fileNameNew = 'yes'.".".'jpg';//i have 1 folder where iam saving all image in the yes name you can ignore it
				//$fileDestination ='images0/'.$fileNameNew ;//file distination.
				
			
			    $fileNameNew1 = uniqid('',true).".".'jpg';//giving hashed names to all images here u can give the user id as name also.
			 	$fileDestination1 ='images1/'.$fileNameNew1 ;//one more folder where all image are sotred with unique name.
				move_uploaded_file($fileTmpName,$fileDestination1);
				//copy($fileDestination,$fileDestination1);			//if u want store file in more than 1 folder.	
			    
				
        
		header("Location:question.php");
							
			}else{

				echo "Your file is too big!" ;			
			}		
	
		}else{
			echo "There was an error uploading your file!" ;
		}
	
	}else {
		echo "You cannot upload files of this type!" ;
	}

}

}
?>