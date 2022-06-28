<!DOCTYPE html>
<html>

<head>
    <title>Logical test 1</title>
</head>

<body>

    <?php

    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eoviz';


    ?>


    <h1>Logical test 1</h1>
    <?php
    $i = 1;
    echo '<ul>';
    while ($i <= count($aplikasi)) {
        echo '<li>' . $aplikasi[$i] . '</li>';
        $i++;
    }
    echo '</ul>';
    ?>
</body>

</html>