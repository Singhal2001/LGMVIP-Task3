<?php 
   $rollno = $_POST['rollno'];
   $name = $_POST['fname'];
   $math = $_POST['math'];
   $english = $_POST['english'];
   $science = $_POST['science'];
   $social_Science = $_POST['social_science'];
   $hindi = $_POST['hindi'];

   $total = $math+$english+$science+$social_Science+$hindi;
   $per = ($total/500)*100;
   $grade = "";
   if($per>=90){
        $grade = 'A+';
   }else if($per>=80 && $per<90) {
        $grade = 'A';
   }else if($per>=70 && $per<80){
       $grade = "B+";
   }else if($per>=60 && $per<70){
       $grade = 'B';
   }else{
       $grade = 'C';
   }

   $conn = mysqli_connect('localhost' , 'root','');
   mysqli_select_db($conn , 'students');
   $query = "insert into marks(rollno,name,math,english,science,social_science,hindi,total,grade)
                values('$rollno','$name','$math','$english'
                ,'$science','$social_Science','$hindi','$total','$grade')";
    
    
    $res = mysqli_query($conn , $query);
    if($res == 1){
        echo "submitted";
    } else{
        echo "Student Already Exixt";
    }

?>