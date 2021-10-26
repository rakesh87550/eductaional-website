<?php
require("config/db.php");
session_start();
if (isset($_POST['submit'])) {
	// personal information
	$candidate_name = mysqli_real_escape_string($conn, $_POST['candidate-name']);
	$_SESSION['name'] = $_POST['candidate-name'];
	$father_name = mysqli_real_escape_string($conn, $_POST['father-name']);
	$mother_name = mysqli_real_escape_string($conn, $_POST['mother-name']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);

	// residential address
	$village = mysqli_real_escape_string($conn, $_POST['village']);
	$post_office = mysqli_real_escape_string($conn, $_POST['post-office']);
	$district = mysqli_real_escape_string($conn, $_POST['district']);
	$pin = mysqli_real_escape_string($conn, $_POST['pin']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);

	// permanent address   
	$p_village = mysqli_real_escape_string($conn, $_POST['p-village']);
	$p_post_office = mysqli_real_escape_string($conn, $_POST['p-post-office']);
	$p_district = mysqli_real_escape_string($conn, $_POST['p-district']);
	$p_pin = mysqli_real_escape_string($conn, $_POST['p-pin']);
	$p_state = mysqli_real_escape_string($conn, $_POST['p-state']);

	$course_name = mysqli_real_escape_string($conn, $_POST['course-name']);
	$board = mysqli_real_escape_string($conn, $_POST['board']);
	$pass_year1 = mysqli_real_escape_string($conn, $_POST['pass_year1']);
	$pass_year2 = mysqli_real_escape_string($conn, $_POST['pass_year2']);
	$f_year = mysqli_real_escape_string($conn, $_POST['f_year']);

	// educational details

	$exam_name1 = mysqli_real_escape_string($conn, $_POST['exam_name1']);
	$board_name1 = !empty($_POST['board_name1']) ? mysqli_real_escape_string($conn, $_POST['board_name1']) : "NULL";
	$passing_year1 = !empty($_POST['passing_year1']) ? mysqli_real_escape_string($conn, $_POST['passing_year1']) : "NULL";
	$full_marks1 = !empty($_POST['full_marks1']) ? mysqli_real_escape_string($conn, $_POST['full_marks1']) : "NULL";
	$marks_obtained1 = !empty($_POST['marks_obtained1']) ? mysqli_real_escape_string($conn, $_POST['marks_obtained1']) : "NULL";
	$percentage1 = !empty($_POST['percentage1']) ? mysqli_real_escape_string($conn, $_POST['percentage1']) : "NULL";

	$exam_name2 = mysqli_real_escape_string($conn, $_POST['exam_name2']);
	$board_name2 = !empty($_POST['board_name2']) ? mysqli_real_escape_string($conn, $_POST['board_name2']) : "NULL";
	$passing_year2 = !empty($_POST['passing_year2']) ? mysqli_real_escape_string($conn, $_POST['passing_year2']) : "NULL";
	$full_marks2 = !empty($_POST['full_marks2']) ? mysqli_real_escape_string($conn, $_POST['full_marks2']) : "NULL";
	$marks_obtained2 = !empty($_POST['marks_obtained2']) ? mysqli_real_escape_string($conn, $_POST['marks_obtained2']) : "NULL";
	$percentage2 = !empty($_POST['percentage2']) ? mysqli_real_escape_string($conn, $_POST['percentage2']) : "NULL";

	$exam_name3 = mysqli_real_escape_string($conn, $_POST['exam_name3']);
	$board_name3 = !empty($_POST['board_name3']) ? mysqli_real_escape_string($conn, $_POST['board_name3']) : "NULL";
	$passing_year3 = !empty($_POST['passing_year3']) ? mysqli_real_escape_string($conn, $_POST['passing_year3']) : "NULL";
	$full_marks3 = !empty($_POST['full_marks3']) ?  mysqli_real_escape_string($conn, $_POST['full_marks3']) : "NULL";
	$marks_obtained3 = !empty($_POST['marks_obtained3']) ? mysqli_real_escape_string($conn, $_POST['marks_obtained3']) : "NULL";
	$percentage3 = !empty($_POST['percentage3']) ? mysqli_real_escape_string($conn, $_POST['percentage3']) : "NULL";

	$exam_name4 = mysqli_real_escape_string($conn, $_POST['exam_name4']);
	$board_name4 = !empty($_POST['board_name4']) ? mysqli_real_escape_string($conn, $_POST['board_name4']) : "NULL";
	$passing_year4 = !empty($_POST['passing_year4']) ? mysqli_real_escape_string($conn, $_POST['passing_year4']) : "NULL";
	$full_marks4 = !empty($_POST['full_marks4']) ? mysqli_real_escape_string($conn, $_POST['full_marks4']) : "NULL";
	$marks_obtained4 = !empty($_POST['marks_obtained4']) ? mysqli_real_escape_string($conn, $_POST['marks_obtained4']) : "NULL";
	$percentage4 = !empty($_POST['percentage4']) ? mysqli_real_escape_string($conn, $_POST['percentage4']) : "NULL";
	
	
	// validation start
	if (!preg_match("/^[a-zA-Z ]+$/", $candidate_name) || $candidate_name == "" || $candidate_name == null) {
		$error = true;
		$error_type = "Candidate name must contain only alphabets and space";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $father_name) || $father_name == null || $father_name == "") {
		$error = true;
		$error_type = "Father name must contain only alphabets and space";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $mother_name) || $mother_name == null || $mother_name == "") {
		$error = true;
		$error_type = "Mother name must contain only alphabets and space";
	} elseif (!preg_match("/^([0-9]{4})\-([0-9]{2})\-([0-9]{2})$/", $dob) || $dob == null || $dob == "") {
		$error = true;
		$error_type = "Invalid Date of Birth";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $gender) || $gender == null || $gender == "") {
		$error = true;
		$error_type = "Invalid Gender";
	} elseif ($category == null || $category == "") {
		$error = true;
		$error_type = "Invalid Category";
	} elseif (!preg_match("/^[0-9]{10}+$/", $phone) || $phone == null || $phone == "") {
		$error = true;
		$error_type = "Invalid phone";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $village) || !preg_match("/^[a-zA-Z ]+$/", $p_village) || $village == null || $village == "" || $p_village == null || $p_village == "") {
		$error = true;
		$error_type = "Invalid Village";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $post_office) || !preg_match("/^[a-zA-Z ]+$/", $p_post_office) || $post_office == null || $post_office == "" || $p_post_office == null || $p_post_office == "") {
		$error = true;
		$error_type = "Invalid post office";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $district) || !preg_match("/^[a-zA-Z ]+$/", $p_district) || $district == null || $district == "" || $p_district == null || $p_district == "") {
		$error = true;
		$error_type = "Invalid District";
	} elseif (!preg_match("/^[a-zA-Z ]+$/", $state) || !preg_match("/^[a-zA-Z ]+$/", $p_state) || $state == null || $state == "" || $p_state == null || $p_state == "") {
		$error = true;
		$error_type = "Invalid State";
	} elseif (!preg_match("/^([0-9]{6})$/", $pin) || !preg_match("/^([0-9]{6})$/", $p_pin) || $pin == null || $pin == "" || $p_pin == null || $p_pin == "") {
		$error = true;
		$error_type = "Invalid Pin Number";
	}
	$s_id = $candidate_name;
    // 	$path_main = 'signatures/';
	
    
	
    // 	insert into database
	mysqli_query($conn, "INSERT INTO course (s_id,course_name,board,pass_year1,pass_year2,f_year) VALUES(' " . $s_id . " ','" . $course_name . "','" . $board . "','" . $pass_year1 . "','" . $pass_year2 . "','" . $f_year . "')");
	
	//  fetch recently inserted id 	
    $last_id = mysqli_insert_id($conn);
	
    //  create folder
	$candidate_name1 = "";
	$path1 = "";
	$photo_name="";
	$signature_name="";
	$candidate_name1 = str_replace(' ', '', $_SESSION['name']);
	$path1 = 'documents_demo/' . $last_id;
	mkdir($path1, 0777, false);


	// upload documents
	move_uploaded_file($_FILES['mp_admit']['tmp_name'], $path1 . "/" . "mp_admit_" . $_FILES['mp_admit']['name']);
	move_uploaded_file($_FILES['mp_marks']['tmp_name'], $path1 . "/" . "mp_marks_" . $_FILES['mp_marks']['name']);
	move_uploaded_file($_FILES['hs_marks']['tmp_name'], $path1 . "/" . "hs_marks_" . $_FILES['hs_marks']['name']);

	/*  uploaded semester validation check  Starts */
	if (is_uploaded_file($_FILES['gd_first']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_first']['tmp_name'], $path1 . "/" . "gd_first" . $_FILES['gd_first']['name']);
	}
	if (is_uploaded_file($_FILES['gd_second']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_second']['tmp_name'], $path1 . "/" . "gd_second_" . $_FILES['gd_second']['name']);
	}
	if (is_uploaded_file($_FILES['gd_third']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_third']['tmp_name'], $path1 . "/" . "gd_third_" . $_FILES['gd_third']['name']);
	}
	if (is_uploaded_file($_FILES['gd_first_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_first_sem']['tmp_name'], $path1 . "/" . "gd_first_sem_" . $_FILES['gd_first_sem']['name']);
	}
	if (is_uploaded_file($_FILES['gd_second_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_second_sem']['tmp_name'], $path1 . "/" . "gd_second_sem_" . $_FILES['gd_second_sem']['name']);
	}
	if (is_uploaded_file($_FILES['gd_third_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_third_sem']['tmp_name'], $path1 . "/" . "gd_third_sem_" . $_FILES['gd_third_sem']['name']);
	}
	if (is_uploaded_file($_FILES['gd_fourth_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_fourth_sem']['tmp_name'], $path1 . "/" . "gd_fourth_sem_" . $_FILES['gd_fourth_sem']['name']);
	}
	if (is_uploaded_file($_FILES['gd_fifth_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_fifth_sem']['tmp_name'], $path1 . "/" . "gd_fifth_sem_" . $_FILES['gd_fifth_sem']['name']);
	}
	if (is_uploaded_file($_FILES['gd_sixth_sem']['tmp_name'])) {
		move_uploaded_file($_FILES['gd_sixth_sem']['tmp_name'], $path1 . "/" . "gd_sixth_sem_" . $_FILES['gd_sixth_sem']['name']);
	}
	
	// upload file
    move_uploaded_file($_FILES['photo']['tmp_name'], $path1 . "/" . "photo_" . $_FILES['photo']['name']);
    move_uploaded_file($_FILES['student_signature']['tmp_name'], $path1 . "/" . "student_signature_" . $_FILES['student_signature']['name']);
    $photo_name="photo_" . $_FILES['photo']['name'];
    $signature_name="student_signature_" . $_FILES['student_signature']['name'];
    
    // insert into database
    mysqli_query($conn, "INSERT INTO candidate (s_id,candidate_name,father_name,mother_name,dob,gender,category,phone,photo_name,signature_name) VALUES('".$s_id."','" . $candidate_name . "','" . $father_name . "','" . $mother_name . "','" . $dob . "','" . $gender . "','" . $category . "','" . $phone . "','".$photo_name."','".$signature_name."')");
    mysqli_query($conn, "INSERT INTO c_address (s_id,r_village,r_post_office,r_district,r_pin,r_state,p_village,p_post_office,p_district,p_pin,p_state) VALUES('".$s_id."','" . $village . "','" . $post_office . "','" . $district . "','" . $pin . "','" . $state . "','" . $p_village . "','" . $p_post_office . "','" . $p_district . "','" . $p_pin . "','" . $p_state . "')");
    $result = mysqli_query($conn, "INSERT INTO c_education (s_id,exam_name1,board_name1,passing_year1,full_marks1,marks_obtained1,percentage1,exam_name2,board_name2,passing_year2,full_marks2,marks_obtained2,percentage2,exam_name3,board_name3,passing_year3,full_marks3,marks_obtained3,percentage3,exam_name4, board_name4,passing_year4,full_marks4,marks_obtained4,percentage4) VALUES ('".$s_id."','" . $exam_name1 . "','" . $board_name1 . "','" . $passing_year1 . "',$full_marks1, $marks_obtained1, $percentage1,'" . $exam_name2 . "','" . $board_name2 . "','" . $passing_year2 . "',$full_marks2,$marks_obtained2 ,$percentage2,'" . $exam_name3 . "','" . $board_name3 . "','" . $passing_year3 . "', $full_marks3, $marks_obtained3, $percentage3,'" . $exam_name4 . "','" . $board_name4 . "','" . $passing_year4 . "', $full_marks4 ,$marks_obtained4,$percentage4)");

    if($result)
    {
        echo "<script>alert('Successfully Applied');</script>";
        // create pdf
        echo "<script> location.href='print_pdf.php?c_id='+$last_id; </script>";
        // header("Location:print_pdf.php?c_id=".$last_id);
    }
}

mysqli_close($conn); 
session_destroy();
?>

