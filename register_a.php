<?php 
error_reporting(E_ALL);
session_start();
include 'config.php';
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$dateofbirth = $_POST['dateofbirth'];
	$place = $_POST['place'];
	$gender = $_POST['gender'];
	$mothername = $_POST['mothername'];
	$caste = $_POST['caste'];
	$pincode = $_POST['pincode'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$participated = $_POST['participated'];
	$participated = implode(",", $participated);
	$bloodgroup = $_POST['bloodgroup'];
	$spectacles = $_POST['spectacles'];
	$minority = $_POST['minority'];
	$vaccinated = $_POST['vaccinated'];
	$aadharcardno = $_POST['aadharcardno'];
	$electioncardno = $_POST['electioncardno'];
	$languages = $_POST['languages'];
	$Activity = $_POST['Activity'];
	$Activity = implode(",", $Activity);
	$skills = $_POST['skills'];
	$skills = implode(",", $skills);
	$sql = "SELECT * FROM users WHERE email='".$email."' ";
	$result = $conn->query($sql);
	if($result->rowCount()>0){
		echo "<script type='text/javascript'>alert('email id already exists try again...'); 
		window.location.href='index.php';</script>";
	}
	else {
		$stmt = "INSERT INTO users(firstname, middlename, lastename, email, dateofbirth, place, gender, mothername, caste, pincode, height, weight, participated, bloodgroup, spectacles, minority, vaccinated, aadharcardno, electioncardno, languages, Activity, skills) VALUES(:firstname, :middlename, :lastename, :email, :dateofbirth, :place, :gender, :mothername, :caste, :pincode, :height, :weight, :participated, :bloodgroup, :spectacles, :minority, :vaccinated, :aadharcardno, :electioncardno, :electioncardno, :languages, :Activity, :skills)";
		$query = $stmt->preapre($query);
		$query->bindParam(':firstname', $firstname);
		$query->bindParam(':middlename', $middlename);
		$query->bindParam(':lastname', $lastname);
		$query->bindParam(':email', $email);
		$query->bindParam(':dateofbirth', $dateofbirth);
		$query->bindParam(':place', $place);
		$query->bindParam(':gender', $gender);
		$query->bindParam(':mothername', $mothername);
		$query->bindParam(':caste', $caste);
		$query->bindParam(':pincode', $pincode);
		$query->bindParam(':height', $height);
		$query->bindParam(':weight', $weight);
		$query->bindParam(':participated', $participated);
		$query->bindParam(':bloodgroup', $bloodgroup);
		$query->bindParam(':spectacles', $spectacles);
		$query->bindParam(':minority', $minority);
		$query->bindParam(':vaccinated', $vaccinated);
		$query->bindParam(':aadharcardno', $aadharcardno);
		$query->bindParam(':electioncardno', $electioncardno);
		$query->bindParam(':languages', $languages);
		$query->bindParam(':Activity', $Activity);
		$query->bindParam(':skills', $skills);
		if($query->execute()){
			echo '<div class="alert alert-success" role="alert">Submitted Successfully</div>';
		}
		else {
			echo '<div class="alert alert-danger" role="alert">Error</div>';
		}
	}
}

?>
    
	<style type="text/css">
		table, td{
			
			border: 1px solid black;
  			border-collapse: collapse;	
		}
		td{
			width: 50%;
		}
	</style>
	<table>

	<tr ><td><img src="assets/img/NSS-symbol.jpeg" width="100px" alt=""></td><td><h3>National Service Scheme(NSS) Enrollement Form</h3></td></tr>
 	
    <tr><td>firstname:</td><td><?php echo $firstname;?></td></tr>
    <tr><td>Middlename:</td><td><?php echo $middlename;?></td></tr>
	<tr><td>Lastname:</td><td><?php echo $lastname;?></td></tr>
	<tr><td>Email:</td><td><?php echo $email;?></td></tr>
	<tr><td>Dateofbirth:</td><td><?php echo $dateofbirth;?></td></tr>
	<tr><td>Birthplace:</td><td><?php echo $place;?></td></tr>
	<tr><td>Gender:</td><td><?php echo $gender;?></td></tr>
	<tr><td>Mothername:</td><td><?php echo $mothername;?></td></tr>
	<tr><td>Caste:</td><td><?php echo $caste;?></td></tr>
	<tr><td>Pincode:</td><td><?php echo $pincode;?></td></tr>
	<tr><td>Height:</td><td><?php echo $height;?></td></tr>
	<tr><td>Particiapted:</td><td><?php echo $participated;?></td></tr>
	<tr><td>Bloodgroup:</td><td><?php echo $bloodgroup;?></td></tr>
	<tr><td>Spectacles:</td><td><?php echo $spectacles;?></td></tr>
	<tr><td>Minority:</td><td><?php echo $minority;?></td></tr>
	<tr><td>Vaccinated:</td><td><?php echo $vaccinated;?></td></tr>
	<tr><td>Aadharcardno:</td><td><?php echo $aadharcardno;?></td></tr>
	<tr><td>Electioncadno:</td><td><?php echo $electioncardno;?></td></tr>
	<tr><td>Language:</td><td><?php echo $languages;?></td></tr>
	<tr><td>Activities:</td><td><?php echo $Activity;?></td></tr>
	<tr><td>SkillsKnowns:</td><td><?php echo $skills;?></td></tr>

	</table>
	<?php

	$body = ob_get_clean();

	$body = iconv("UTF-8","UTF-8//IGNORE",$body);

	require_once  __DIR__.'/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf();

	$mpdf->WriteHTML($body);
	$mpdf->Output('Registrationform.pdf','D');


?>