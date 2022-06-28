<!DOCTYPE html>
<html>

<body>
    <?php
    function divide($dividend)
    {

        $sign = (($dividend < 0) ^
            (2 < 0)) ? -1 : 1;

        $dividend = abs($dividend);
        $divisor = abs(2);

        $quotient = 0;
        while ($dividend >= $divisor) {
            $dividend -= $divisor;
            ++$quotient;
        }
        if ($sign == -1) $quotient = -$quotient;
        return $quotient;
    }

    if (isset($_POST['submit'])) {
        if (is_numeric($_POST['number1'])) {
            $total = divide($_POST['number1']);
            echo 'Hasil Adalah ' . $total;
        }
    }
    ?>

    <form method="post" action="3.php">
        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
    </form>

</body>

</html>