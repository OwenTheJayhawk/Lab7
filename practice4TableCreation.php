
<head>

</head>
<body>
<link href="practice4.css" rel="stylesheet" type="text/css">
    <h1>Multiplication Table</h1>

    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];


        if (is_numeric($number) && $number > 0 && floor($number) == $number) {
            echo "<h2>Multiplication Table for $number</h2>";
            echo "<table border='1'>";
            echo "<tr><th>&times;</th>";
            
            for ($i = 1; $i <= $number; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            for ($i = 1; $i <= $number; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= $number; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive integer.</p>";
        }
    }
    ?>

</body>
