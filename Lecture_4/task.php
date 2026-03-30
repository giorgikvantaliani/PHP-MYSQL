<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <a href="task.php">HOME</a>
        <h1>PHP Form Validation Example</h1>
        Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];  else  echo " ";  ?>"> - *
        <br><br>
        E-mail: <input type="text" name="emial" value="<?php echo isset($_POST['email']) ? $_POST['email'] : " "; ?>"> - *
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment"></textarea>
        <br><br>
        Gender: <input type="radio" name="gender">Famale,
                <input type="radio" name="gender">Male,
        <br><br>
        <input type="submit" name="submit-form">  
    </form>

    <div class="result">
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            if(isset($_POST['submit-form'])){
                echo "<h3>Clicked</h3>";
                
                if(empty($_POST['name'])){
                    echo "<p>Name is Empty!!!!</p>";
                }

                if(empty($_POST['email'])){
                    echo "<p>Email is Empty!!!!</p>";
                }
            }
        ?>
    </div>
</body>
</html>