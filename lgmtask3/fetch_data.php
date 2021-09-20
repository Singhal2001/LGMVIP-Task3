<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href='./style.css'/>
  </head>
  <body>
    <h1>Students Results</h1>
    <?php 

        $conn = mysqli_connect('localhost' , 'root');
        mysqli_select_db($conn , 'students');

        $query = "select * from marks";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          echo "<table id='customers'><tr><th>Roll Number</th><th>Name</th><th>Math</th><th>English</th><th>Science</th><th>Social Science</th><th>Hindi</th><th>Total</th><th>Grade</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["rollno"]."</td><td>".$row["name"]."</td><td>".$row["math"]."</td><td>".$row["english"]."</td><td>".$row["science"]."</td><td>".$row["social_science"]."</td><td>".$row["hindi"]."</td><td>".$row["total"]."</td><td>".$row["grade"]."</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
    ?>
  </body>
</html>


