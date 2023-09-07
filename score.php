<?php
    $mesMatch = array(
        1 => array("Alpha", "Beta"),
        2 => array("Alpha", "Gamma"),
        3 => array("Gamma", "Omega"),
        4 => array("Beta", "Omega"),
        5 => array("Gamma", "Beta"),
        6 => array("Alpha", "Omega")
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tournoi Score</title>
    <script src="js/score.js"></script>
</head>
<body>
    <header>
        <!-- En-tête -->
    </header>
    <section class="score-content">
        <h2>Game Score</h2>
        <div class="insert-bloc">
            <div class="first-team" id="team" style="background-color: <?php echo($_GET['color1']);?>;">
                <?php
                    echo($mesMatch[$_GET['match']][0]);
                ?>
                <button class="score-button" id="teamAButton">+1</button>
            </div>
            <div class="cadran">
                <div class="score"><span class="score-a">0</span> : <span class="score-b">0</span></div>
            </div>
            <div class="second-team" id ="team" style="background-color: <?php echo($_GET['color2']);?>;">
                <?php
                    echo($mesMatch[$_GET['match']][1]);
                ?>
                <button class="score-button" id="teamBButton">+1</button>
            </div>
        </div>
    </section> 
   <footer>
        <p>&copy; 2023 Tournoi Score</p>
    </footer>

</body>
</html>
