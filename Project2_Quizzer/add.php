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
            <h2>Add A Question</h2>
            <form action="add.php" method="post">
                <p>
                    <label for="">Question Number: </label>
                    <input type="number" name="question_number">
                </p>
                <p>
                    <label for="">Question Text: </label>
                    <input type="text" name="question_text">
                </p>
                <p>
                    <label for="">Choise #1: </label>
                    <input type="text" name="choise1">
                </p>
                <p>
                    <label for="">Choise #2: </label>
                    <input type="text" name="choise2">
                </p>
                <p>
                    <label for="">Choise #3: </label>
                    <input type="text" name="choise3">
                </p>
                <p>
                    <label for="">Choise #4: </label>
                    <input type="text" name="choise4">
                </p>
                <p>
                    <label for="">Choise #5: </label>
                    <input type="text" name="choise5">
                </p>
                <p>
                    <label for="">Correct Number: </label>
                    <input type="number" name="correct_choice">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit">
                </p>
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