<?php
include 'includes/database.php';
include 'includes/functions.php';
include 'includes/dbfunction.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $alumni_id = generateGUID();
    
    // ===== BASIC INFO =====
    $first_name  = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $last_name   = $_POST['last_name'] ?? '';
    $dob         = $_POST['dob'] ?? '';
    $gender      = $_POST['gender'] ?? '';
    $passingYear = $_POST['passing_year'] ?? '';
    $stream      = $_POST['stream'] ?? '';
    $careerPath  = $_POST['career_path'] ?? '';
    $email       = $_POST['email'] ?? '';
    $phone       = $_POST['phone'] ?? '';
    $address1    = $_POST['address1'] ?? '';
    $address2    = $_POST['address2'] ?? '';
    $country     = $_POST['country'] ?? '';
    $state       = $_POST['state'] ?? '';
    $city        = $_POST['city'] ?? '';
    $zip         = $_POST['zip'] ?? '';
	
	
	$sql = "Select count(*) as total from alumni_contact where email = ?";
	$result = GetCountOfQuery($conn, $sql, [$email], "s");
	if($result!=0)
	{
		echo "
			<script>
			alert('You are already register or something went wrong Please contact to admin ');
			window.location.href='index.php';
			</script>
		";
		exit();
	}
	
    // ===== FILES =====
    $uploadDir =  "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "alumniProfiles" . DIRECTORY_SEPARATOR;
	//$uploadDir = "uploads/";
    $profile_photo = "";
	
    // PROFILE PHOTO
	if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
		$fileTmpPath = $_FILES['profile_photo']['tmp_name'];
        $fileName = basename($_FILES['profile_photo']['name']);
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        // $newFileName = $firstName . "_pic." . $fileExt;
        $newFileName = $first_name . "_" . time() . "_pic." . $fileExt;
        $destPath = $uploadDir . $newFileName;
		if (move_uploaded_file($fileTmpPath, $destPath)) {
            $profile_photo = $newFileName; // Store relative path in DB
        } 
		else 
		{
				$error = error_get_last();
				die("Error uploading profile photo! Details: " . ($error['message'] ?? 'Unknown error'));
        }
    }


    $sql_basic = "INSERT INTO alumni_basic 
    (alumni_id, first_name, middle_name, last_name, dob, gender, profile_photo, passing_year, stream, career_path)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql_basic);
    $stmt->bind_param("ssssssssss", $alumni_id, $first_name, $middle_name, $last_name, $dob, $gender, $profile_photo, $passingYear, $stream,  $careerPath);
    $stmt->execute();

    
    // Contact Info
    $contact_id = generateGUID();
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $country  = $_POST['country'];
    $state    = $_POST['state'];
    $city     = $_POST['city'];
    $zip      = $_POST['zip'];

    $sql_contact = "INSERT INTO alumni_contact 
    (contact_id, alumni_id, email, phone, address_line1, address_line2, city, state, postal_code, country) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql_contact);
    $stmt->bind_param("ssssssssss", $contact_id, $alumni_id, $email, $phone, $address1, $address2, $city, $state, $zip, $country);
    $stmt->execute();



    // ===== HIGHER EDUCATION (Arrays) =====
    $colleges   = $_POST['college'] ?? [];
    $degrees    = $_POST['degree'] ?? [];
    $grad_years = $_POST['grad_year'] ?? [];

    $eduText = "";
    if (!empty($colleges)) {
        foreach ($colleges as $i => $college) {
            $d = $degrees[$i] ?? '';
            $y = $grad_years[$i] ?? '';
            $eduText .= "\\n  • {$college} ({$d}, {$y})";
        }
    } else {
        $eduText = "\\n  No Higher Education Added.";
    }

    if (!empty($colleges)) 
    {
      foreach ($colleges as $i => $college) {
          $degree = $degrees[$i] ?? '';
          $gradYear = $grad_years[$i] ?? '';

          $edu_id = generateGUID(); // or use uniqid()

          $sql_edu = "INSERT INTO alumni_education 
                      (edu_id, alumni_id, college, degree, grad_year) 
                      VALUES (?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($sql_edu);
          $stmt->bind_param("sssss", $edu_id, $alumni_id, $college, $degree, $gradYear);
          $stmt->execute();
          $stmt->close();
      }
    }

   // Profession or Defence
    if ($careerPath == "professional") {
        $profession_id = generateGUID();
        $profession = $_POST['profession'];
        $company = $_POST['company'];
        $experience = $_POST['experience'];
        $work_location = $_POST['work_location'];
        $linkedin = $_POST['linkedin'];

        $sql_prof = "INSERT INTO alumni_professional (prof_id, alumni_id, designation, company, exp_yrs, work_location, linkedin_profile) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql_prof);
        $stmt->bind_param("sssssss",$profession_id, $alumni_id, $profession, $company, $experience, $work_location, $linkedin);
        $stmt->execute();
    }

    if ($careerPath == "defence") {
        $defence_id = generateGUID();
        $branch = $_POST['branch'];
        $rank = $_POST['rank'];
        $join_year = $_POST['join_year'];
        $defence_position = $_POST['defence_position'];
        $service_number = $_POST['service_number'];

        $sql_def = "INSERT INTO alumni_defence (defence_id, alumni_id, branch, military_rank, join_year, current_posting, service_number) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql_def);
        $stmt->bind_param("sssssss", $defence_id, $alumni_id, $branch, $rank, $join_year, $defence_position, $service_number );
        $stmt->execute();
    }




    // ===== FINAL ALERT =====
    echo "
    <script>
      alert('Thank you for registering as an alumni! Your profile will be reviewed shortly.');
      window.location.href='index.php';
    </script>
    ";
}
?>
