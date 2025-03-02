<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="mb-4">Расписание работы</h1>

    <?php
    $sDayOfWeek = date('N');
    $aEmployeeSchedule = [
        'John Styles' => [
            'days' => [1, 3, 5],
            'time' => '8:00-12:00'
        ],
        'Jane Doe' => [
            'days' => [2, 4, 6],
            'time' => '12:00-16:00'
        ]
    ];
    ?>

    <table class="table table-bordered w-50 mb-5">
        <thead class="table-dark">
            <tr>
                <th>№</th>
                <th>Фамилия Имя</th>
                <th>График работы</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ([1 => 'John Styles', 2 => 'Jane Doe'] as $num => $name): ?>
                <tr>
                    <td><?= $num ?></td>
                    <td><?= $name ?></td>
                    <td>
                        <?php
                        $worker = $aEmployeeSchedule[$name];
                        echo in_array($sDayOfWeek, $worker['days'])
                            ? $worker['time']
                            : 'Нерабочий день';
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2 class="mb-3">Цикл for</h2>
    <pre class="bg-light p-3"><?php
    $a = 0;
    $b = 0;

    for ($i = 0; $i <= 5; $i++) {
        $a += 10;
        $b += 5;
        echo "Step $i: a = $a, b = $b\n";
    }
    echo "End of the loop: a = $a, b = $b";
    ?></pre>

    <h2 class="mb-3 mt-5">Цикл while</h2>
    <pre class="bg-light p-3"><?php
    $a = $b = 0;
    $i = 0;

    while ($i <= 5) {
        $a += 10;
        $b += 5;
        echo "Step $i: a = $a, b = $b\n";
        $i++;
    }
    echo "End of the loop: a = $a, b = $b";
    ?></pre>

    <h2 class="mb-3 mt-5">Цикл do-while</h2>
    <pre class="bg-light p-3"><?php
    $a = $b = 0;
    $i = 0;

    do {
        $a += 10;
        $b += 5;
        echo "Step $i: a = $a, b = $b\n";
        $i++;
    } while ($i <= 5);
    echo "End of the loop: a = $a, b = $b";
    ?></pre>

</body>

</html>