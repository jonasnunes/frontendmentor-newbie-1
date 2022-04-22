<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Rating Component</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/index.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon-32x32.png" type="image/x-icon">

    <!-- Overpass -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>

    <?php require_once "includes/code.php" ?>

    <main class="main">
        <img class="icon" src="assets/icon-star.svg" alt="icon star">
        <h1>How did we do?</h1>
        <p>Please let us know how we did with your support request. All feedback is appreciated to help us improve our offering!</p>
        <div class="main-buttons">
            <form method="get" action="page-2.php">
                <ul>
                    <li>
                        <input type="submit" name="n" value="1" class="input">
                    </li>
                    <li>
                        <input class="input" type="submit" name="n" value="2">
                    </li>
                    <li>
                        <input class="input" type="submit" name="n" value="3">
                    </li>
                    <li>
                        <input class="input" type="submit" name="n" value="4">
                    </li>
                    <li>
                        <input class="input" type="submit" name="n" value="5">
                    </li>
                </ul>
            </form>
        </div>
    </main>
</body>
</html>