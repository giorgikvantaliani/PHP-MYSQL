<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="get">
        Name: <input type="text" name="name" >
        <br><br>
        Lastname: <input type="text" name="lname">
        <br><br>
        Position: <input type="text" name="position">
        <br><br>
        Salary: <input type="number" name="salary">
        <br><br>
        Procent: <input type="number" name="procenti">
        <br><br>
        <button type="submit" name="gagzavna">send</button>
    </form>

    <?php
    if(isset($_GET['gagzavna'])){
        $name = $_GET['name'];
        $lname = $_GET['lname'];
        $position = $_GET['position'];
        $salary = $_GET['salary'];
        $procent = $_GET['procenti'];

        $salary20 = $salary - ($salary * 0.2);
        $procentcustom = $salary - ($salary * $procent/100);
    
    ?>

    <table border="1" id="cxrili">
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Salary after 20%</th>
            <th>Salary after <?php echo $procent; ?>%</th>
        </tr>

        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $lname; ?></td>
            <td><?php echo $position; ?></td>
            <td><?php echo $salary; ?></td>
            <td><?php echo $salary20; ?></td>
            <td><?php echo $procentcustom; ?></td>
        </tr>
    </table>

    <?php } ?>
    
</body>
</html>