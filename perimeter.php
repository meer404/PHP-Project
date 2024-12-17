<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles/perimeter.css">
<main class="main">
    <h2>Calculate Perimeter</h2>
    <form method="POST" action="">
        <label>Shape:</label>
        <select name="shape">
            <option value="rhombus">Rhombus</option>
            <option value="parallelogram">Parallelogram</option>
            <option value="triangle">Triangle</option>
            <option value="circle">Circle</option>
            <option value="ellipse">Ellipse</option>
        </select><br>
        <label>Enter number 1:</label>
        <input type="number" name="dim1" required><br>
        <label>Enter number 2:</label>
        <input type="number" name="dim2"><br>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $shape = $_POST['shape'];
        $dim1 = $_POST['dim1'];
        $dim2 = $_POST['dim2'] ?: 0;

        switch ($shape) {
            case 'rhombus':
                $perimeter = 4 * $dim1;
            case 'parallelogram':
                $perimeter = 2 * ($dim1 + $dim2);
                break;
            case 'triangle':
                $perimeter = 3 * $dim1; // Assume equilateral
                break;
            case 'circle':
                $perimeter = 2 * pi() * $dim1;
                break;
            case 'ellipse':
                $perimeter = 2 * pi() * sqrt(($dim1 * $dim1 + $dim2 * $dim2) / 2);
                break;
        }
        echo "<p>The perimeter of the $shape is $perimeter.</p>";
    }
    ?>
</main>
<?php include 'footer.php'; ?>


