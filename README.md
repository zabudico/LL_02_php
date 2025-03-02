# Лабораторная работа №2: Управляющие конструкции в PHP

## Описание
Эта работа позволила мне освоить использование условных конструкций и циклов в PHP. Я научился создавать динамические таблицы на основе текущего дня недели, управлять логикой выполнения программ с помощью условий и реализовывать различные типы циклов.

## Цель работы
- Научиться работать с условными операторами (`if/else`)
- Освоить использование циклов (`for`, `while`, `do-while`)
- Интегрировать PHP с HTML и Bootstrap для стилизации
- Сформировать динамическое расписание работы

## Инструкции по запуску проекта
1. Убедитесь, что на вашем компьютере установлен PHP (версия 7.4 или выше)
2. Скопируйте файлы проекта в отдельную директорию
3. Запустите встроенный PHP-сервер командой:
```bash
php -S localhost:8000
```4.Откройте в браузере адрес: http://localhost:8000/index.php
---

## Основная часть

### 1. Динамическое расписание

**Ключевые элементы:**
- Использование `date('N')` для определения дня недели
- Условные проверки с оператором `in_array()`
- Генерация HTML-таблицы с Bootstrap

```php
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
```

```html
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
```

![EmployeeSchedule](https://github.com/user-attachments/assets/4cb9978a-c1c5-4a96-95a3-91d500912edc)


### 2. Работа с циклами

#### Цикл `for`

```php
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
```

![FOR](https://github.com/user-attachments/assets/51146904-12a6-498a-a6b3-3aece1a24e4c)

#### Цикл `while`

```php
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
```

![while](https://github.com/user-attachments/assets/454598c9-eb0a-4b90-853f-b458b2a4a52f)

#### Цикл `do-while`

```php
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
```

![do-while](https://github.com/user-attachments/assets/ee2e6487-5fa2-46b0-9037-41acc0984447)




