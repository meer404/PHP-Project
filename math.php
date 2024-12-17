<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations</title>
    <link rel="stylesheet" href="styles/math.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="" method="POST">
                <label for="number1">Enter first number:</label>
                <input type="number" id="number1" name="number1" step="any" required>

                <label for="number2">Enter second number:</label>
                <input type="number" id="number2" name="number2" step="any" required>

                <label for="operation">Select operation:</label>
                <select id="operation" name="operation" required>
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select>

                <button type="submit">Calculate</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];
                $operation = $_POST['operation'];
                $result = "";

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operation) {
                        case 'add':
                            $result = $num1 + $num2;
                            break;
                        case 'subtract':
                            $result = $num1 - $num2;
                            break;
                        case 'multiply':
                            $result = $num1 * $num2;
                            break;
                        case 'divide':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = "Error: Division by zero!";
                            }
                            break;
                        default:
                            $result = "Invalid operation!";
                    }

                    echo "<div class='result'>Result: $result</div>";
                } else {
                    echo "<div class='result error'>Error: Please enter valid numbers!</div>";
                }
            }
            ?>
        </div>
    </main>
<?php include 'footer.php'; ?>

</body>
</html>
