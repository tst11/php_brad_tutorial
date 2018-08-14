<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
    // Set Question number
    $number = (int) $_GET['n'];

    // Clear session on first question
    if ($number == 1) {
        session_destroy();
    }

    /*
    *   Get Total Questions
    */
    $query = "SELECT * FROM questions";
    
    // Get results
    $results = $mysqli->query($query) or die($mysqli->error. __LINE__);
    $total = $results->num_rows;


    /*
    *   Get Question
    */
    $query = "SELECT * FROM `questions` 
                WHERE question_number = $number";
                
    // Get result
    $result = $mysqli->query($query) or die($mysqli->error. __LINE__);

    $question = $result->fetch_assoc();

    /*
    *   Get Choices
    */
    $query = "SELECT * FROM `choices` 
                WHERE question_number = $number";
    
    // Get result
    $choices = $mysqli->query($query) or die($mysqli_error. __LINE__);

    //$question = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choises">
                    <?php while ($row = $choices->fetch_assoc()): ?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text'] ?></li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" vlaue="Submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &coy; 2018, PHP Quizzer
        </div>
    </footer>
</body>
</html>