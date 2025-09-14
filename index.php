<?php
// index.php
// Author: Keyton
// Main page that handles form submission and displays results

include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Book Due Date Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Library Book Due Date Checker</h1>

    <?php include "form.php"; ?>

    <div class="mt-4">
        <?php
        if ($_POST) {
            $returnDate = $_POST['return_date'];
            $dueDate = $_POST['due_date'];

            $message = checkDueDate($returnDate, $dueDate);

            echo "<div class='alert alert-info'>";
            echo "<strong>Return Date:</strong> " . htmlspecialchars($returnDate) . "<br>";
            echo "<strong>Due Date:</strong> " . htmlspecialchars($dueDate) . "<br><br>";
            echo $message;
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
