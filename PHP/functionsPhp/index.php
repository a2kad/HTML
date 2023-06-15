<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>
    <h2>Exo 1</h2>
    <?php
    function addition($x, $y)
    {
        $result = $x + $y;
        return $result;
    }

    ?>
    <h3><?= addition(22, 55) ?></h3>
    <h2>Exo 2</h2>
    <?php
    function newAddition(...$x)
    {
        $result = 0;
        foreach ($x as $num) {
            $result += $num;
        }
        return $result;
    }
    ?>
    <h3><?= newAddition(1, 1, 3, 4, 5) ?></h3>
    <h2>Exo 3</h2>
    <?php
    function calculer($option, ...$nbrs)
    {
        $result = 0;
        if ($option == '+') {
            foreach ($nbrs as $element) {
                $result += $element;
            }
        } else if ($option == '*') {
            $result += 1;
            foreach ($nbrs as $element) {
                $result *= $element;
            }
        } else if ($option == '-') {
            $result = func_get_arg(1);
            for ($i = 2; $i <func_num_args(); $i ++) {
                $result -= func_get_arg($i);
            }
        } else {
            $result = 'Error';
        }
        return $result;
    }
    ?>
    <h3><?= calculer('-', 1, 2)  ?></h3>
</body>

</html>