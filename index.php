<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles/style.css">


<style>
.text{
    font-size: 40px;
    font-family: Arial, sans-serif;
    text-align: center;
   padding-top: 20px;
}



</style>

<main class="main">
    <div class="text">
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <p>Choose a functionality from the menu.</p>
    </div>
</main>




<?php

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'footer.php'; ?>






