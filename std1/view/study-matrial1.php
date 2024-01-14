<!DOCTYPE html>
<html>
<head>
    <title>Study Materials</title>
</head>
<body>
    <h1>Study Materials</h1>

    <!-- Form to input study material data -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="class">Class:</label>
        <input type="text" name="class" required><br>

        <label for="course">Course:</label>
        <input type="text" name="course" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="file_name">File Name:</label>
        <input type="text" name="file_name" required><br>

        <label for="file_path">File Path:</label>
        <input type="text" name="file_path" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // // Database connection parameters
    // $hostname = 'your_db_host';
    // $username = 'your_db_username';
    // $password = 'your_db_password';
    // $database = 'your_db_name';

    // // Create a database connection
    // $conn = new mysqli($hostname, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $class = $_POST['class'];
        $course = $_POST['course'];
        $subject = $_POST['subject'];
        $file_name = $_POST['file_name'];
        $file_path = $_POST['file_path'];

        // Insert data into the study_materials table
        $insert_sql = "INSERT INTO study_materials (class, course, subject, file_name, file_path) VALUES ('$class', '$course', '$subject', '$file_name', '$file_path')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<p>Data inserted successfully.</p>";
        } else {
            echo "<p>Error: " . $insert_sql . "<br>" . $conn->error . "</p>";
        }
    }

    // Retrieve and display study materials from the database
    $select_sql = "SELECT * FROM study_materials";
    $result = $conn->query($select_sql);

    if ($result->num_rows > 0) {
        echo '<h2>Study Materials</h2>';
        echo '<table>';
        echo '<tr><th>Class</th><th>Course</th><th>Subject</th><th>File Name</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['class'] . '</td>';
            echo '<td>' . $row['course'] . '</td>';
            echo '<td>' . $row['subject'] . '</td>';
            echo '<td><a href="' . $row['file_path'] . '">' . $row['file_name'] . '</a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No study materials found.</p>';
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
