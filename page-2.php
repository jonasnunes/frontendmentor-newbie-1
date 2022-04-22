<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Rating Component</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon-32x32.png" type="image/x-icon">

    <!-- Overpass -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php require_once "includes/code.php"; ?>

    <main class="main">
        <div class="main-b">
            <img src="assets/illustration-thank-you.svg" alt="thank you">
            <?php echo "<p>$mensagem</p>"; ?>
            <h1>Thank you!</h1>
            <p>We appreciate you taking the time to give a rating. If you ever need more support, don't hesitate to get in touch!</p>
            <div class="link">
                <img class="arrow" src="assets/arrow.png" alt="arrow" width="15">
                <a href="index.php">Back</a>
            </div>
        </div>
    </main>
</body>
</html>