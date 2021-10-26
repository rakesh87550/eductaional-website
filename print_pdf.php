<?php
    // include database file 
    include('config/db.php');
    if(isset($_GET['c_id']))
    {
        $c_id = $_GET['c_id'];
        // Attempt select query execution
        $sql = "SELECT * FROM candidate x INNER JOIN course b ON b.id= x.id AND x.id='".$c_id."' INNER JOIN c_education a ON a.id = x.id INNER JOIN c_address r ON r.id = x.id;";
        if ($result = mysqli_query($conn, $sql)) 
        {
            if (mysqli_num_rows($result) > 0) 
            {
                // fetch all details
                while ($row = mysqli_fetch_array($result)) 
                {
                    $candidate_name = $row['candidate_name'];
                    $father_name = $row['father_name'];
                    $mother_name = $row['mother_name'];
                    $dob = $row['dob'];
                    $gender = $row['gender'];
                    $category = $row['category'];

                    $r_village = $row['r_village'];
                    $r_post_office = $row['r_post_office'];
                    $r_district = $row['r_district'];
                    $r_pin = $row['r_pin'];
                    $r_state = $row['r_state'];

                    $course_name = $row['course_name'];
                    $board = $row['board'];
                    $pass_year1 = $row['pass_year1'];
                    $pass_year2 = $row['pass_year2'];
                    $f_year = $row['f_year'];

                    $exam_name1 = $row['exam_name1'];
                    $board_name1 = $row['board_name1'];
                    $passing_year1 = $row['passing_year1'];
                    $percentage1 = $row['percentage1'];

                    $exam_name2 = $row['exam_name2'];
                    $board_name2 = $row['board_name2'];
                    $passing_year2 = $row['passing_year2'];
                    $percentage2 = $row['percentage2'];

                    $exam_name3 = $row['exam_name3'];
                    $board_name3 = $row['board_name3'];
                    $passing_year3 = $row['passing_year3'];
                    $percentage3 = $row['percentage3']; 

                    $exam_name4 = $row['exam_name4'];
                    $board_name4 = $row['board_name4'];
                    $passing_year4 = $row['passing_year4'];
                    $percentage4 = $row['percentage4']; 
                    
                    $photo_name=$row['photo_name'];
                    $signature_name=$row['signature_name'];
                    
                    

                    // create pdf
                    
                    // include fpdf file
                    include('fpdf/fpdf.php');
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    
                    $pdf->SetFont("arial","B","20");
                    // $logo = "img/logo.png";
                    // $pdf->Cell(50,6,$pdf->Image($logo,17,10,-170), 0,'L');
                    $pdf->Cell(190,6,"Demo Institute",0,1,'C');

                    $pdf->SetFont("arial","","12");
                    $pdf->Cell(0,6,"Common Admission Form",0,1,'C');
                    $pdf->Cell(0,6,"Board | University | Institute",0,1,'C');
                    
                    // $candidate_name1 = str_replace(' ', '', $candidate_name);
                    $path1 = 'documents_demo/' . $c_id ;
                    $pdf->Ln(2);
                    $img1=$path1."/".$photo_name;
                    $pdf->Cell(7, 5, "", 0, 1, 'C',$pdf->Image($img1,170,10,30,35));
                    $pdf->Cell(0,14,"",0,1,'C');

                    $pdf->SetFont("arial","B","14");
                    $pdf->Cell(0,10,"Personal Information",1,1,'C');

                    $pdf->SetFont("arial","","12");
                    $pdf->Cell(45,8,"Candidate Name :- ",0,0);
                    $pdf->Cell(50,8,$candidate_name,0,0);
                    $pdf->Cell(45,8,"Father Name :- ",0,0);
                    $pdf->Cell(50,8,$father_name,0,1);

                    $pdf->Cell(45,8,"Mother Name :- ",0,0);
                    $pdf->Cell(50,8,$mother_name,0,0);
                    $pdf->Cell(45,8,"D.O.B :- ",0,0);
                    $pdf->Cell(50,8,"$dob",0,1);

                    $pdf->Cell(45,8,"Gender :- ",0,0);
                    $pdf->Cell(50,8,$gender,0,0);
                    $pdf->Cell(45,8,"Category :- ",0,0);
                    $pdf->Cell(50,8,$category,0,1);

                    $pdf->SetFont("arial","B","14");
                    $pdf->Cell(0,10,"Residential Address",1,1,'C');

                    $pdf->SetFont("arial","","12");
                    $pdf->Cell(45,8,"Village :- ",0,0);
                    $pdf->Cell(50,8,$r_village,0,0);
                    $pdf->Cell(45,8,"Post Office :- ",0,0);
                    $pdf->Cell(50,8,$r_post_office,0,1);

                    
                    $pdf->Cell(45,8,"District :- ",0,0);
                    $pdf->Cell(50,8,$r_district,0,0);
                    $pdf->Cell(45,8,"State :- ",0,0);
                    $pdf->Cell(50,8,$r_state,0,1);

                    $pdf->Cell(45,8,"PIN :- ",0,0);
                    $pdf->Cell(50,8,$r_pin,0,1);

                    $pdf->SetFont("arial","B","14");
                    $pdf->Cell(0,10,"Course Details",1,1,'C');

                    $pdf->SetFont("arial","","12");
                    $pdf->Cell(46,8,"Course Name :- ",0,0);
                    $pdf->Cell(60,8,$course_name,0,0);
                    $pdf->Cell(46,8,"Passing Year 1:- ",0,0);
                    $pdf->Cell(60,8,"$pass_year1",0,1);
                    $pdf->Cell(46,8,"Passing Year 2:- ",0,0);
                    $pdf->Cell(60,8,"$pass_year2",0,1);
                    
                    $pdf->Cell(46,8,"Passing Board :- ",0,0);
                    $pdf->Cell(60,8,$board,0,0);
                    $pdf->Cell(46,8,"Final Year :- ",0,0);
                    $pdf->Cell(60,8,$f_year,0,1);
                    
                    
                    $pdf->SetFont("arial","B","14");
                    $pdf->Cell(0,10,"Educational Qualification",1,1,'C');

                    $pdf->SetFont("arial","B","12");
                    // 1 exam details 
                    $pdf->Cell(45,12,"Examination",0,0);
                    $pdf->Cell(50,12,"Board",0,0);
                    $pdf->Cell(50,12,"Year of Passing",0,0);
                    $pdf->Cell(40,12,"Percentage",0,1);

                    $pdf->SetFont("arial","","12");

                    // first row
                    $pdf->Cell(45,8,$exam_name1,1,0);
                    $pdf->Cell(50,8,$board_name1,1,0);
                    $pdf->Cell(50,8,$passing_year1,1,0);
                    $pdf->Cell(40,8,$percentage1."%",1,1);

                    // second row
                    $pdf->Cell(45,8,$exam_name2,1,0);
                    $pdf->Cell(50,8,$board_name2,1,0);
                    $pdf->Cell(50,8,$passing_year2,1,0);
                    $pdf->Cell(40,8,$percentage2."%",1,1);

                    // third row
                    $pdf->Cell(45,8,$exam_name3,1,0);
                    $pdf->Cell(50,8,$board_name3,1,0);
                    $pdf->Cell(50,8,$passing_year3,1,0);
                    $pdf->Cell(40,8,$percentage3."%",1,1);

                    // fourth row
                    $pdf->Cell(45,8,$exam_name4,1,0);
                    $pdf->Cell(50,8,$board_name4,1,0);
                    $pdf->Cell(50,8,$passing_year4,1,0);
                    $pdf->Cell(40,8,$percentage4."%",1,1);

                    $pdf->Cell(0,6,"",0,1);
                    $pdf->Cell(0,8,"I do hereby state that all the details mentioned above are accurate to the best of my familiarity and ",0,1);
                    $pdf->cell(0,6,"confidence. I agree with the fact that course fee is not refundable if I fail to fullfill the condition of the",0,1);
                    $pdf->cell(0,6,"course.",0,1);
                    
                    $pdf->SetFont("arial","B","14");
                    $pdf->Cell(60,6,"",0,0,'C');
                    $pdf->Cell(120,6,"Candidate Signature",0,1,'R');

                    $img2=$path1."/".$signature_name;
                    
                    $pdf->Cell(7, 5, "", 0, 1, 'C',$pdf->Image($img2,142,258,50,15));

                    $file = $candidate_name.'.pdf';
                    // $pdf->output($file,'D');
                    $pdf->output();

                }
            }
        }
    }
?>