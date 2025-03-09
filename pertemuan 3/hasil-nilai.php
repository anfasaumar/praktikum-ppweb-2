<?php
if (!isset($_POST["nama"])) {
    echo '<script>alert("Anda harus mengisi form terlebih dahulu");</script>';
}
?>
<meta http-equiv="refresh" content="0;url=form_nilai.php">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil nilai mahasiswa</title>
</head>
<body>
    <table>
    
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><?=$_POST["nama"]?></td>
        </tr>
        <tr>
            <td>nim</td>
            <td>:</td>
            <td><?=$_POST["nim"]?></td>
        </tr>
        <tr>
            <td>rombel</td>
            <td>:</td>
            <td><?=$_POST["rombel"]?></td>
        </tr>
        <tr>
            <td>mata kulia</td>
            <td>:</td>
            <td><?=$_POST["matkul"]?></td>
        </tr>
        <tr>
            <td>nilai</td>
            <td>:</td>
            <td><?=$_POST["nilai"]?></td>
        </tr>
        <tr>
            <td>nilai uts</td>
            <td>:</td>
            <td><?=$_POST["uts"]?></td>
        </tr>
        <tr>
            <td>nilai uas</td>
            <td>:</td>
            <td><?=$_POST["uas"]?></td>
        </tr>
        <>
            <?php
            $tugas = $_POST["nilai"] * (35/100);
            $uts = $_POST["uts"] * (30/100);
            $uas = $_POST["uas"] * (35/100);
            $total = $tugas + $uts + $uas;

            if ($total <= 35){
                echo "Anda tidak lulus 'E'";
            }elseif ($total <= 55){
                echo "Anda tidak lulus 'D'";
            }elseif ($total <= 69){
                echo "Anda lulus 'C'";
            }elseif ($total <= 84){
                echo "Anda lulus 'B'";
            }elseif ($total <= 100){
                echo "Anda lulus 'A'";
            }else{
                echo "Anda tidak lulus 'E'";
            }
            ?>
        </td>
    </table>   
</body>
</html>