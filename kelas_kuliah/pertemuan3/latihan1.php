<?php
/*
    Muhamad Rafliansyah
    203040105
    https://github.com/MuhamadRafliansyah/pw2021_203040105.git
    Pertemuan 3 
    Materi minggu ini mempelajari mengenai Control flow/Struktur kendali
*/
?>

<?php 
// pengulangan
// for 
// while
// do.. while 
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//      echo "Hello World! <br>";
// }

// $i = 10;
// while( $i < 5 ) {
//     echo "Hello World! <br>";
// $i++;
// }
// $i = 10;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
            <tr>
            <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>