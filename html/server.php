<?php
$course_objective="";
$credits="";
$textbooks="";
$prereqs="";
$fb="";
$rating="";
$deg="";
$brh="";
$sem="";
$elec="";
$id="";
$co="";
$bl="";
$un1="";
$un2="";
$un3="";
$no="";
$component="";
$count="";
$weightage="";
$hf="";
$pos="";
$cont="";
$qual="";
$exp="";
$an="";
$acomp="";
$apos="";
$aexp="";
$ayop="";
$ard="";
$sn="";
$ssem="";
$srat="";
$scr="";
$fq="";
$fa="";
$id="";
$qr="";
$stuid=$_SESSION['username'];
$_SESSION['stuid']=$_SESSION['username'];
$_SESSION['username']=$_SESSION['username'];
$sid=$_SESSION['stuid'];
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'coursereviewportal');

if (isset($_POST['explore_elective'])) {

  $deg = mysqli_real_escape_string($db, $_POST['degree']);
  $brh = mysqli_real_escape_string($db, $_POST['branch']);
  $sem = mysqli_real_escape_string($db, $_POST['semester']);
  $elec = $_POST['elective'];



  // retreive elective_id
  $elec_tb = "SELECT * from elective where Elective_Name='$elec'";
  //and Elective_Sem='$sem' and Dept_name='$brh' and Degree_name='$deg'";
  $result_tb = mysqli_query($db, $elec_tb);
  $elective_tb = mysqli_fetch_assoc($result_tb);
  if($elective_tb)
  {
    $id=$elective_tb['Elective_ID'];
    $_SESSION['id']=$elective_tb['Elective_ID'];
    $eid=$_SESSION['id'];
  }
  else
  {
    $id=0;
    $_SESSION['id']=0;
    $eid=$_SESSION['id'];
  }

  // retreive course objectives
  $elec_co = "SELECT * FROM elective WHERE Elective_ID='$id'";
  $result_co = mysqli_query($db, $elec_co);
  $elective_co = mysqli_fetch_assoc($result_co);
  $_SESSION['course_objective']=$elective_co['Course_Obj'];
  $_SESSION['credits']=$elective_co['credits'];

  // retreive prereq
  $elec_tb = "SELECT PreReq_ID from prereqcourse where Elective_ID='$id'";
  $result_tb = mysqli_query($db, $elec_tb);
  $elective_tb = mysqli_fetch_assoc($result_tb);
  if( $elective_tb)
  {
    $_SESSION['prereqs']=$elective_tb['PreReq_ID'];
  }
  else
  {
    $_SESSION['prereqs']="Not required";
  }



  // retreive textbooks
  $elec_tb = "SELECT * FROM textbooks WHERE Elective_id='$id'";
  $result_tb = mysqli_query($db, $elec_tb);
  $elective_tb = mysqli_fetch_assoc($result_tb);
  $_SESSION['textbooks']=$elective_tb['Textbook'];




//course outcomes
$cos = array();
$bly = array();
$i=0;
$elec_cot = "SELECT * FROM courseoutcomes  WHERE Elective_id='$id' order by CO_No asc";
if ($db -> multi_query($elec_cot)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        $cos[$i]=$row[2];
        $bly[$i]=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['co']=$cos;
  $_SESSION['bl']=$bly;
}



//unit syllabus - 1
$unit1 = array();
$noh1 = array();
$noh1[0]=0;
$noh1[1]=0;
$noh1[2]=0;
$i=0;
$elec_un1 = "SELECT * FROM electiveparts WHERE Elective_id='$id' and Unit_No=1";
if ($db -> multi_query($elec_un1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $unit1[$i]=$row[2];
        $noh1[0]+=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['un1']=$unit1;
}

//unit syllabus - 2
$unit2 = array();
$i=0;
$elec_un1 = "SELECT * FROM electiveparts WHERE Elective_id='$id' and Unit_No=2";
if ($db -> multi_query($elec_un1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $unit2[$i]=$row[2];
        $noh1[1]+=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['un2']=$unit2;
}

//unit syllabus - 3
$unit3 = array();
$i=0;
$elec_un1 = "SELECT * FROM electiveparts WHERE Elective_id='$id' and Unit_No=3";
if ($db -> multi_query($elec_un1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $unit3[$i]=$row[2];
        $noh1[2]+=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['un3']=$unit3;
}

$_SESSION['no']=$noh1;
//elective mark split up
$component1 = array();
$count1 = array();
$weightage1 = array();
$i=0;
$elec_in1 = "SELECT * from electivesplit natural join evaluation order by Assess_type desc,Component asc";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $component1[$i]=$row[0];
        $count1[$i]=$row[3];
        $weightage1[$i]=$row[2];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['component']=$component1;
  $_SESSION['count']=$count1;
  $_SESSION['weightage']=$weightage1;
}



//elective faculty
$hf1 = array();
$pos1 = array();
$qual1 = array();
$exp1 = array();
$cont1 = array();
$i=0;
$elec_in1 = "SELECT * from faculty where Fac_id in (select Faculty_id  from elec_fac where Elective_ID='$id')";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $hf1[$i]=$row[1];
        $pos1[$i]=$row[4];
        $qual1[$i]=$row[7];
        $exp1[$i]=$row[3];
        $cont1[$i]=$row[2];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['hf']=$hf1;
  $_SESSION['pos']=$pos1;
  $_SESSION['qual']=$qual1;
  $_SESSION['exp']=$exp1;
  $_SESSION['cont']=$cont1;
}



//alumni review
$an1 = array();
$acomp1 = array();
$apos1 = array();
$aexp1 = array();
$ayop1 = array();
$ard1 = array();
$i=0;
$elec_in1 = "SELECT Alum_Name,Alum_Company,Alum_Pos,Alum_Exp,Alum_year_passing,Review_data from alumni natural join review where elective_id='$id'";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $an1[$i]=$row[0];
        $acomp1[$i]=$row[1];
        $apos1[$i]=$row[2];
        $aexp1[$i]=$row[3];
        $ayop1[$i]=$row[4];
        $ard1[$i]=$row[5];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['an']=$an1;
  $_SESSION['acomp']=$acomp1;
  $_SESSION['apos']=$apos1;
  $_SESSION['aexp']=$aexp1;
  $_SESSION['ayop']=$ayop1;
  $_SESSION['ard']=$ard1;
}


// Student's feedback
$sn1 = array();
$ssem1 = array();
$srat1 = array();
$scr1 = array();
$i=0;
$elec_in1 = "SELECT Stud_Name,Stud_Sem,Rate_star,Feedback_data from feedback f,student s where f.Student_id=s.student_id and Elective_id='$id'";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $sn1[$i]=$row[0];
        $ssem1[$i]=$row[1];
        $srat1[$i]=$row[2];
        $scr1[$i]=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['sn']=$sn1;
  $_SESSION['ssem']=$ssem1;
  $_SESSION['srat']=$srat1;
  $_SESSION['scr']=$scr1;
}


// forums
$fq1 = array();
$fa1 = array();
$i=0;
$elec_in1 = "SELECT Question,Answer from forums where elective_id='$id' and Answer is not Null";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $fq1[$i]=$row[0];
        $fa1[$i]=$row[1];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['fq']=$fq1;
  $_SESSION['fa']=$fa1;
}

  if($id!=0)
  {
  header('location: elective.php');
  }
  else{
    echo '<script>alert("Insufficient records for this elective")</script>';
  }
}



if (isset($_POST['feedback'])) {
 // if (isset($_POST['fb'])) {
    //$_SESSION['id']=$elective_tb['Elective_ID'];
    $eid=$_SESSION['id'];
    $fb = $_POST['fb'];
    $rating = mysqli_real_escape_string($db, $_POST['rating']);
	$query_fb = "INSERT INTO feedback(Student_id,Elective_id,Feedback_data,Rate_star,Elective_status) VALUES('$sid','$eid','$fb','$rating','1')";
    mysqli_query($db, $query_fb);
  //}
// Student's feedback
$sn1 = array();
$ssem1 = array();
$srat1 = array();
$scr1 = array();
$i=0;
$elec_in1 = "SELECT stud_Name,stud_sem,Rate_star,Feedback_data from feedback f,student s where f.Student_id=s.student_id and f.Elective_id='$eid'";
if ($db -> multi_query($elec_in1)) {
  do {
    // Store first result set
    if ($result = $db -> store_result()) {
      while ($row = $result -> fetch_row()) {
        //printf("%s\n", $row[0]);
        $sn1[$i]=$row[0];
        $ssem1[$i]=$row[1];
        $srat1[$i]=$row[2];
        $scr1[$i]=$row[3];
        $i=$i+1;
      }
     $result -> free_result();
    }
     //Prepare next result set
  } while ($db -> next_result());
  $_SESSION['sn']=$sn1;
  $_SESSION['ssem']=$ssem1;
  $_SESSION['srat']=$srat1;
  $_SESSION['scr']=$scr1;
}
    header('location: elective.php#pr');

  }

  if (isset($_POST['queries'])) {
      //$_SESSION['id']=$elective_tb['Elective_ID'];
      $eid=$_SESSION['id'];

    $qr = mysqli_real_escape_string($db, $_POST['query']);
	$query_fb = "INSERT INTO forums(Elective_id, Student_id, Question, Faculty_id, Answer) VALUES ('$eid','$sid','$qr',null,null)";
    mysqli_query($db, $query_fb);
    header('location: elective.php#pq');

  }

  ?>
