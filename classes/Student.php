<?php
    class Student {
        private $con;
        private $message="No record found";
        private $id;
        private $course;
        private $firstName;
        private $middleName;
        private $lastName;
        private $gender;


        function __construct($con){
            $this->con = $con;
        }
   
        
        function getTable($queryString){
            // $queryString = "SELECT * FROM students";
            $query = mysqli_query($this->con, $queryString);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows) {
                while($row = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $row["studentid"] . "</td>"
                        . "<td>" . $row["course"] . "</td>"
                        . "<td>" . $row["firstname"] . "</td>"
                        . "<td>" . $row["middlename"] . "</td>"
                        . "<td>" . $row["lastname"] . "</td>"
                        . "<td>" . $row["gender"] . "</td>";
                    echo "<td class='td-buttons'>";
                    echo "<a href='index.php?edit=".$row['studentid']."'>Edit</a>";
                    echo "<a href='index.php?delete=".$row['studentid']."'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "<span class='message-green'>$num_rows record(s) found</span>";
            } else {
                echo "<span class='message-red'>No record found</span>";
            }
        }

        function addStudent($studentId, $course, $firstName, $middleName, $lastName, $gender) {
            $queryString = "INSERT INTO students (studentid, course, firstname, middlename, lastname, gender) VALUES ('$studentId', '$course', '$firstName', '$middleName', '$lastName', '$gender');";
            if(mysqli_query($this->con, $queryString) == TRUE) {
                return "<span class='message-green'>Student no. $studentId added.</span>";
            } else {
                return "<span class='message-red'>No data submitted.</span>";
            }
        }

        function updateStudent($studentId, $course, $firstName, $middleName, $lastName, $gender, $old_id) {
            // echo $this->id;
            $queryString = "UPDATE students SET studentid='$studentId', course='$course', firstname='$firstName', middlename='$middleName', lastname='$lastName', gender='$gender' WHERE studentid='$old_id'";
            if(mysqli_query($this->con, $queryString) == TRUE) {
                return "<span class='message-green'>Student no. $studentId updated.</span>";
            } else {
                return "<span class='message-green'>Student no. $studentId not updated.</span>";
            }
        }

        function deleteStudent($studentId) {
            $query = "DELETE FROM students WHERE studentid='$studentId'";
		    if(mysqli_query($this->con, $query) == TRUE) {
			    return "<span class='message-red'>Student no. $studentId deleted</span>";
		    } else {
			    return "<span class='message-red'>Student no. $studentId not deleted</span>";
            }
        }
    }
?>

