    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }

    $user_name = isset($_COOKIE['user']) ? $_COOKIE['user'] : "Guest";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>My PHP Project</title>
        <link rel="stylesheet" href="styles/style.css">
      <link rel="stylesheet" href="styles/header.css"> 
    </head>
    <body>
    <header class="header">
            <h1>Website Project PHP</h1>
        </header>

    <section class="sidebar">
        <aside>
            <div class="user-login">
                <img src="images/user-image.png" alt="User Image" />
                <div class="user-details">
                    <p><?php echo htmlspecialchars($user_name); ?></p>
                 
                </div>
            </div>

    

            <nav class="links">
                <a href="index.php">Home</a>
                <a href="area.php">Area</a>
                <a href="perimeter.php">Perimeter</a>
                <a href="math.php">Math Operation</a>
                <a href="cv.php">CV</a>
                <a href="logout.php" class="logout-link">
                <img src="images/logout.png" alt="Logout Icon">    
                Logout</a>
            </nav>
        </aside>
        </section>

    
    </body>
    </html>
