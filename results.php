<?php
 include 'header.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['name'] ?? 'Unknown';
    $email = $_POST['email'] ?? 'Unknown';
    $tel = $_POST['tel'] ?? 'Unknown';
    $date = $_POST['date'] ?? 'Unknown';
    $skills = $_POST['skills'] ?? [];
    $coding = $_POST['coding'] ?? [];
    $zanyary = $_POST['zanyary'] ?? 'None';
    $dawakary = isset($_POST['dawakary']) ? 'Yes' : 'No';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
   
</head>
<body>

<main class="main">
    <div class="title">
        <h1>فۆڕمی داوکاری کار - زانیاری نێردراو</h1>
    </div>

    <div class="container">
        <p> <?php echo htmlspecialchars($name); ?><strong>:ناوی تەواو</strong></p>
        <p> <?php echo htmlspecialchars($email); ?><strong>: ئیمەیڵ </strong></p>
        <p><strong>ژمارەی تەلەفۆن:</strong> <?php echo htmlspecialchars($tel); ?></p>
        <p><strong>بەرواری لەدایکبوون:</strong> <?php echo htmlspecialchars($date); ?></p>
        <p><strong>تواناکانت:</strong> <?php echo implode(', ', $skills); ?></p>
        <p><strong>زمانەکانی کۆدنوسی</strong> <?php echo implode(', ', $coding); ?></p>
        <p> <?php echo nl2br(htmlspecialchars($zanyary)); ?><strong>:زانیاری زیاتر</strong></p>
    
    </div>
   
    </main>
</body>




<style>
        

       .title h1 {
            text-align: center;
            background-color: #6200ea;
            color: white;
            padding: 15px 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: right;
        }

        p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        p strong {
            color: #6200ea;
        }

      
    </style>



<?php include 'footer.php'; ?>

</html>


