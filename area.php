<?php include 'header.php'; ?>
<main class="main">
<section calass="area">
    <h2>Calculate Area</h2>
    <form method="POST" action="">
        <label>Shape:</label>
        <select name="shape">
            <option value="square">Square</option>
            <option value="rectangle">Rectangle</option>
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
            case 'square':
                $area = $dim1 * $dim1;
                break;
            case 'rectangle':
                $area = $dim1 * $dim2;
                break;
            case 'triangle':
                $area = 0.5 * $dim1 * $dim2;
                break;
            case 'circle':
                $area = pi() * $dim1 * $dim1;
                break;
            case 'ellipse':
                $area = pi() * $dim1 * $dim2;
                break;
        }
        echo "<p>The area of the $shape is $area.</p>";
    }
    ?>
</section>
</main>
<?php include 'footer.php'; ?>


<link rel="stylesheet" href="styles/area.css">