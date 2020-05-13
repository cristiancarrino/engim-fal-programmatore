<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <nav class="navbar">
        <h1 onclick="toggleSidebar()"><i class="fas fa-bars margin-right"></i></h1>
        <a href="index.php"><h1>Homepage</h1></a>
        <div class="menu">
            <a href="lista-studenti.php" class="navbar-link">Lista studenti</a>
            <a href="lista-prof.php" class="navbar-link">Lista professori</a>
            <a href="lista-materie.php" class="navbar-link">Lista materie</a>
            <a href="lista-voti.php" class="navbar-link">Lista voti</a>
        </div>
        <div class="clearfix"></div>
    </nav>

    <div class="sidebar"></div>
    <div class="page-content sidebar-close" id="page-content">