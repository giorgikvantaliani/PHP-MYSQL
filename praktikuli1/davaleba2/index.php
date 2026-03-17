<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST['gagzavna'])){
        $nishani = $_POST['nishani'];
        echo $nishani;

        $shefaseba = '';

        if($shefaseba >=91){
            $shefaseba = 'A-friadi';
        } elseif($shefaseba >= 81){
            $shefaseba = 'B-dzalian kargi';
        } elseif($shefaseba >= 71){
            $shefaseba = 'C-kargi';
        } elseif($shefaseba >= 61){
            $shefaseba = 'D-norm';
        } elseif($shefaseba >= 51){
            $shefaseba = 'E-araushavs';
        }
        echo $shefaseba;
    }
?>
<body>
    <form method="post">
        saxeli: <input type="text" name="name">
        <br><br>
        gvari: <input type="text" name="gvari">
        <br><br>
        kursi: <input type="text" name="kursi">
        <br><br>
        semestri: <input type="radio" name="semestri">
        <br><br>
        s.kursi: <input type="text" name="s.kursi">
        <br><br>
        nishani: <input type="number" name="nishani">
        <br><br>
        <button type="submit" value="gagzavna">send</button>
    </form>

    <table border="1">
        <tr>
            <td><?php echo $shefaseba ?></td>
            <td><?php echo $nishani ?></td>
        </tr>
    </table>
</body>
</html>