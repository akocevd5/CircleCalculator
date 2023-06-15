<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Calculator</title>
</head>
<body>
    C=2πr
    <h1>Circle Calculator</h1>
    <form method="POST">
    <p>Insert radius</p>
    <input type="number" step="any" name="radius" placeholder="r">
    <button type="submit" name="submit">Calculate circumference</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            if(isset($_POST["radius"])){
                $radius = $_POST['radius'];
                $result = 2 * pi() * $radius;
                $result = number_format($result,4);

                echo "<p>C=2πr ≈ $result </p>";
            }
        }

    ?>
    
</body>
</html>