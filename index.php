<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Demo Institute</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
	<nav class="navbar navbar-light bg-light">
	  	<div class="container">
	    	<a class="navbar-brand" href="javascript:voide(0)"><span>Demo Institute</span></a>
	  	</div>
	</nav>
</header>

<section class="formSec">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-12">
				<div class="formSec_title">
					<h4>Common Admission Form</h4>
					<h5>Board | University | Institute</h5>
					<p>[ PLEASE FILL UP THE APPLICATION FORM IN CAPITAL LETTER. (Except signature). ]</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<!-- <img class="profile_pic" id="output" /> -->
			</div>
			<div class="col-lg-12 col-sm-12">
				<div class="formDiv clearfix">
					<form action="form_submit.php" name="addForm" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="formTitle">
								<h4>Personal Details </h4>
							</div>

							<div class="col-lg-9 col-sm-12">
								<div class="input-group">
									<label>Candidate's Full Name*</label>
									<input type="text" name="candidate-name" placeholder="Candidate's Full Name" required="required" autocomplete="off">
								</div>
							</div>
							<div class="col-lg-3 col-sm-12">
								<div class="input-group">
									<img class="profile_pic" id="output" />
									<label for="file" class="profile_label"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Profile Picture*</label>
									<input type="file"  accept="image/*" name="photo" id="file" style="display: none;" required="required" onchange="loadFile(event)">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Father's Name*</label>
									<input type="text" name="father-name" placeholder="Father's Name" required="required">
								</div>
							</div>

							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Mother's Name*</label>
									<input type="text" name="mother-name" placeholder="Mother's Name" required="required">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Date of Birth*</label>
									<input type="date" name="dob">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Category</label>
									<select class="custom-select" name="category" required="required">
										<option>Choose Option..</option>
										<option value="general">General</option>
										<option value="sc">SC</option>
										<option value="st">ST</option>
										<option value="obc-a">OBC-A</option>
										<option value="obc-b">OBC-B</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Gender</label>
									<select class="custom-select" name="gender" required="required">
										<option>Choose Option..</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Phone Number</label>
									<input type="tel" name="phone" maxlength="10" required="required">
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-lg-6 col-sm-12 offset-lg-6 align-self-center">
								<div class="input-group mb-0 ">
									<input type="checkbox" name="address_check" id="check_address" class="address_check" onclick="checkFunction()">
									<label>Tick if permanent address same as residential address*</label> 
								</div>
							</div>

							<div class="col-lg-6 col-sm-12">
								<div class="formTitle">
									<h4 class="mt-1">Residensial Address</h4>
								</div>
								<div class="input-group">
									<label>City/Village*</label>
									<input type="text" name="village" id="village" placeholder="City/Village" required="required">
								</div>
								<div class="input-group">
									<label>Post Office*</label>
									<input type="text" name="post-office" id="post-office" placeholder="Post Office" required="required">
								</div>
								<div class="input-group">
									<label>District*</label>
									<input type="text" name="district" id="district" placeholder="District" required="required">
								</div>
								<div class="input-group">
									<label>Pin*</label>
									<input type="number" name="pin" id="pin" placeholder="Pin Code" required="required">
								</div>
								<div class="input-group">
									<label>State*</label>
									<input type="text" name="state" id="state" placeholder="State" required="required">
								</div>
							</div>
							
							<div class="col-lg-6 col-sm-12">
								<div class="formTitle">
									<h4 class="mt-1">Permanent Address</h4>
								</div>
								
								<div class="input-group">
									<label>City/Village*</label>
									<input type="text" name="p-village" id="p-village" class="permanent_data" placeholder="City/Village" required="required">
								</div>
								<div class="input-group">
									<label>Post Office*</label>
									<input type="text" class="permanent_data" name="p-post-office" id="p-post-office" placeholder="Post Office" required="required">
								</div>
								<div class="input-group">
									<label>District*</label>
									<input type="text" class="permanent_data" name="p-district" id="p-district" placeholder="District" required="required">
								</div>
								<div class="input-group">
									<label>Pin*</label>
									<input type="number" class="permanent_data" name="p-pin" id="p-pin" placeholder="Pin Code" required="required">
								</div>
								<div class="input-group">
									<label>State*</label>
									<input type="text" name="p-state" id="p-state" placeholder="State" required="required">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-sm-12">
								<div class="formTitle">
									<h4>Course Details</h4>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-group">
									<label>Course Name*</label>
									<input type="text" name="course-name" placeholder="Course Name" required="required">
								</div>
							</div>
							<div class="col-lg-3 col-sm-12">
								<div class="input-group">
									<label>Start Course Session*</label>
									<input type="month" name="pass_year1" required="required">
								</div>
							</div>
							<div class="col-lg-3 col-sm-12">
								<div class="input-group">
									<label>End Course Session*</label>
									<input type="month" name="pass_year2" required="required">
								</div>
							</div>
							<div class="col-lg-9 col-sm-12">
								<div class="input-group">
									<label>Board name/School Name/Institute Name/University Name*</label>
									<input type="text" name="board" placeholder="Board Name/School Name/Institute Name/University Name" required="required">
								</div>
							</div>
							<div class="col-lg-3 col-sm-12">
								<div class="input-group">
									<label>Final Year*</label>
									<input type="month" name="f_year" placeholder="Final Year" required="required">
								</div>
							</div>


							<div class="col-lg-12 col-sm-12">
								<div class="formTitle">
									<h4>Educational Qualification</h4>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12">
								<table class="qualification_datasheet">
									<thead>
										<tr>
											<th><label>Examination Name*</label></th>
											<th><label>Board / University*</label></th>
											<th><label>Year of Passing*</label></th>
											<th><label>Full Marks*</label></th>
											<th><label>Marks Obtained*</label></th>
											<th><label>Percentage*</label></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="text" name="exam_name1" value="Madhyamik"></td>
											<td><input type="text" name="board_name1" ></td>
											<td><input type="text" name="passing_year1" ></td>
											<td><input type="text" name="full_marks1" id="totalmarks1"></td>
											<td><input type="text" name="marks_obtained1" id="marksobtained1"></td>
											<td><input type="text" name="percentage1" id="percentage1"></td>
										</tr>
										<tr>
											<td><input type="text" name="exam_name2" value="Higher Secondary"></td>
											<td><input type="text" name="board_name2" ></td>
											<td><input type="text" name="passing_year2" ></td>
											<td><input type="text" name="full_marks2" id="totalmarks2"></td>
											<td><input type="text" name="marks_obtained2" id="marksobtained2"></td>
											<td><input type="text" name="percentage2" id="percentage2"></td>
										</tr>
										<tr>
											<td><input type="text" name="exam_name3" value="Graduation"></td>
											<td><input type="text" name="board_name3" ></td>
											<td><input type="text" name="passing_year3" ></td>
											<td><input type="text" name="full_marks3" id="totalmarks3"></td>
											<td><input type="text" name="marks_obtained3" id="marksobtained3"></td>
											<td><input type="text" name="percentage3" id="percentage3"></td>
										</tr>
										<tr>
											<td><input type="text" name="exam_name4" value="Master"></td>
											<td><input type="text" name="board_name4" ></td>
											<td><input type="text" name="passing_year4" ></td>
											<td><input type="text" name="full_marks4" id="totalmarks4"></td>
											<td><input type="text" name="marks_obtained4" id="marksobtained4"></td>
											<td><input type="text" name="percentage4" id="percentage4"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="formTitle">
								<h4>Upload Documents</h4>
							</div>


							<div class="col-lg-7 col-sm-12">
								<div class="input-group">
									<label>Madhyamik Admit Card</label>
									<input type="file" name="mp_admit" >
								</div>
							</div>
							
							<div class="col-lg-7 col-sm-12">
								<div class="input-group">
									<label>Madhyamik Marksheet*</label>
									<input type="file" name="mp_marks">
								</div>
							</div>
							<div class="col-lg-7 col-sm-12">
								<div class="input-group">
									<label>Higher Secondry Marksheet*</label>
									<input type="file" name="hs_marks">
								</div>
							</div>

							<div class="col-lg-12 col-sm-12">
								<div class="input-group">
									<label>Graduation Marksheet*</label>
									<table>
										<tr>
											<th>1st year</th>
											<th>2nd year</th>
											<th>3rd year</th>
										</tr>
										<tr>
											<td><input type="file" name="gd_first"></td>
											<td><input type="file" name="gd_second"></td>
											<td><input type="file" name="gd_third"></td>
										</tr>
									</table>
									<span class="table_gap">OR</span>
									<table class="semesterMarksheet_table">
										<tr>
											<th>1st Semester</th>
											<th>2nd Semester</th>
											<th>3rd Semester</th>
											<th>4th Semester</th>
											<th>5th Semester</th>
											<th>6th Semester</th>
										</tr>
										<tr>
											<td><input type="file" name="gd_first_sem"></td>
											<td><input type="file" name="gd_second_sem"></td>
											<td><input type="file" name="gd_third_sem"></td>
											<td><input type="file" name="gd_fourth_sem"></td>
											<td><input type="file" name="gd_fifth_sem"></td>
											<td><input type="file" name="gd_sixth_sem"></td>
										</tr>
									</table>
								</div>
							</div>

							<div class="col-lg-12 col-sm-12">
								<div class="input-group">
									<input type="checkbox" name="varification_check" id="varification_check">
									<p>I do hereby state that all the details mentioned above are accurate to the best of my familiarity and confidence. I agree with the fact that course fee is not refundable if I fail to fullfill the condition of the course.</p>
								</div>
							</div>

							</br></br></br>
							<div class="col-lg-3 col-sm-12 offset-lg-9">
								<div class="input-group sign_input">
									<img src="" class="formSignature" id="sign_img">
									<input type="file" name="student_signature" accept="image/*" id="signfile" require="required" onchange="loadSign(event)" alt="Signature">
									<label>Signature of student*</label>
								</div>
							</div>

							<div class="col-lg-12 col-sm-12 ">
								<div class="input-group">
									<input type="submit" name="submit" class="btn bttn bttn-submit submit_btn" value="Submit" disabled>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
						
		</div>
	</div>
</section>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>

