# Лабораторная работа №2: Управляющие конструкции в PHP

## Описание
Эта работа позволила мне освоить использование условных конструкций и циклов в PHP. Я научился создавать динамические таблицы на основе текущего дня недели, управлять логикой выполнения программ с помощью условий и реализовывать различные типы циклов.

## Цель работы
- Научиться работать с условными операторами (`if/else`)
- Освоить использование циклов (`for`, `while`, `do-while`)
- Интегрировать PHP с HTML и Bootstrap для стилизации
- Сформировать динамическое расписание работы

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

