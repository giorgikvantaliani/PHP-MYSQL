<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $name = $gvari = $kursi = $skursi = $semestri = $nishani = $shefaseba = "";

    if(isset($_POST['gagzavna'])){
        $name = $_POST['name'];
        $gvari = $_POST['gvari'];
        $kursi = $_POST['kursi'];
        $skursi = $_POST['skursi'];
        $semestri = $_POST['semestri'];
        $nishani = $_POST['nishani'];

        if($shefaseba >= 91){
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
        semestri: 1<input type="radio" name="semestri">
                  2<input type="radio" name="semestri">
        <br><br>
        s.kursi: <input type="text" name="skursi">
        <br><br>
        nishani: <input type="number" name="nishani">
        <br><br>
        <button type="submit" name="gagzavna">send</button>
    </form>

<?php if(isset($_POST['gagzavna'])){ ?>

    <table border="1">
        <tr>
            <th>saxeli</th>
            <th>gvari</th>
            <th>kursi</th>
            <th>s.kursi</th>
            <th>nishani</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $gvari; ?></td>
            <td><?php echo $kursi; ?></td>
            <td><?php echo $skursi; ?></td>
            <td><?php echo $nishani; ?></td>
            <td><?php echo $shefaseba; ?></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>