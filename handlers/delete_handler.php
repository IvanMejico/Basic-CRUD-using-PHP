<?php
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $message = $student->deleteStudent($id);
    }
?>