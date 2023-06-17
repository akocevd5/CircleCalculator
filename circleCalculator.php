<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calculator</title>
</head>
<body>



<h1>Circle Calculator</h1>
    <form method="post" action="">
        <label for="choice">Select an option:</label>
        <select id="choice" name="choice">
            <option value="1">Calculate area</option>
            <option value="2">Calculate circumference</option>
            <option value="3">Exit</option>
        </select>
        <br>
        <label for="radius">Enter the radius of the circle:</label>
        <input type="number" id="radius" name="radius" min="0" step="any" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    function calculate_area($radius) {
        $result = pi() * pow($radius, 2);
        $result = number_format($result,4);
        return $result;
    }

    function calculate_circumference($radius) {
        $result = 2 * pi() * $radius;
        $result = number_format($result,4);
        return $result;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choice = $_POST["choice"];
        $radius = $_POST["radius"];

        if ($choice == 1) {
            $area = calculate_area($radius);
            echo "<p>The area of the circle is: $area</p>";
        } elseif ($choice == 2) {
            $circumference = calculate_circumference($radius);
            echo "<p>The circumference of the circle is: $circumference</p>";
        } elseif ($choice == 3) {
            echo "<p>Exiting the program.</p>";
        }
    }
    ?>

    
    
</body>
</html>
