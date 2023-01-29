<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Таблица истинности PHP.</title>
</head>
<body>
    <div>
        <table class="table" id="table_0">
            <caption>
                <h3>Таблица истинности логических операций в PHP.</h3>
            </caption>
            <colgroup id="col" span="6"></colgroup>
            <thead>
                <tr>
                    <th class="operandA" id="opA" scope="col">A</th>
                    <th class="operandB" id="opB" scope="col">B</th>
                    <th class="operator" id="not" scope="col">!A</th>
                    <th class="operator" id="or" scope="col">A || B</th>
                    <th class="operator" id="and" scope="col">A && B</th>
                    <th class="operator" id="xor" scope="col">A xor B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php $a = 0; $b = 0; ?>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $b; ?></td>                   
                    <td><?php var_export(!$a); ?></td>
                    <td><?php var_export($a || $b); ?></td>
                    <td><?php var_export($a && $b); ?></td>
                    <td><?php var_export($a xor $b); ?></td>
                </tr>
                <tr>
                <?php $a = 0; $b = 1; ?>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $b; ?></td>
                    <td><?php var_export($c = !$a); ?></td>
                    <td><?php var_export($a || $b); ?></td>
                    <td><?php var_export($a && $b); ?></td>
                    <td><?php var_export($a xor $b); ?></td>
                </tr>
                <tr>
                <?php $a = 1; $b = 0; ?>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $b; ?></td>
                    <td><?php var_export(!$a); ?></td>
                    <td><?php var_export($a || $b); ?></td>
                    <td><?php var_export($a && $b); ?></td>
                    <td><?php var_export($a xor $b); ?></td>
                </tr>
                <tr>
                <?php $a = 1; $b = 1; ?>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $b; ?></td>
                    <td><?php var_export(!$a); ?></td>
                    <td><?php var_export($a || $b); ?></td>
                    <td><?php var_export($a && $b); ?></td>
                    <td><?php var_export($a xor $b); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <table class="table" id="table_1">
            <caption>
                <h3>Гибкое сравнение "==" в PHP.</h3>
            </caption>
            <colgroup id="col" span="9"></colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">true</th>
                    <th scope="col">false</th>
                    <th scope="col">1</th>
                    <th scope="col">0</th>
                    <th scope="col">-1</th>
                    <th scope="col">"1"</th>
                    <th scope="col">null</th>
                    <th scope="col">"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="raw">true</th>

                    <?php $a = true; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = true; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                <tr>
                    <th scope="raw">false</th>
                    <?php $a = false; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = false; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                <tr>
                    <th scope="raw">1</th>
                    <?php $a = 1; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 1; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                    <th scope="raw">0</th>
                    <?php $a = 0; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = 0; $b = "php"; ?>
                    <td><?= var_export((int) $a == $b); ?></td>
                </tr>
                    <th scope="raw">-1</th>
                    <?php $a = -1; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = -1; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                    <th scope="raw">"1"</th>
                    <?php $a = "1"; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "1"; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                    <th scope="raw">null</th>
                    <?php $a = null; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = 0; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = null; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
                    <th scope="raw">"php"</th>
                    <?php $a = "php"; $b = true; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = false; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = 1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = 0; ?>
                    <td><?= var_export($a == (int)$b); ?></td>

                    <?php $a = "php"; $b = -1; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = "1"; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = null; ?>
                    <td><?= var_export($a == $b); ?></td>

                    <?php $a = "php"; $b = "php"; ?>
                    <td><?= var_export($a == $b); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <table class="table" id="table_2">
            <caption>
                <h3>Жёсткое сравнение "===" в PHP.</h3>
            </caption>
            <colgroup id="col" span="9"></colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">true</th>
                    <th scope="col">false</th>
                    <th scope="col">1</th>
                    <th scope="col">0</th>
                    <th scope="col">-1</th>
                    <th scope="col">"1"</th>
                    <th scope="col">null</th>
                    <th scope="col">"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="raw">true</th>
                    <?php $a = true; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = true; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                <tr>
                    <th scope="raw">false</th>
                    <?php $a = false; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = false; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                <tr>
                    <th scope="raw">1</th>
                    <?php $a = 1; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 1; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                    <th scope="raw">0</th>
                    <?php $a = 0; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = 0; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                    <th scope="raw">-1</th>
                    <?php $a = -1; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = -1; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                    <th scope="raw">"1"</th>
                    <?php $a = "1"; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "1"; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                    <th scope="raw">null</th>
                    <?php $a = null; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = null; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
                    <th scope="raw">"php"</th>
                    <?php $a = "php"; $b = true; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = false; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = 1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = 0; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = -1; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = "1"; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = null; ?>
                    <td><?= var_export($a === $b); ?></td>

                    <?php $a = "php"; $b = "php"; ?>
                    <td><?= var_export($a === $b); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <p>И в заключение... В задании написано, что нужно сделать вывод о сравнении в PHP. Ну надо так надо…</p>
        <p>На мой взгляд человека, только слегка « прикоснувшегося » к изучению этого языка программирования, 
        но уже познакомившегося с особенностями строгой и нестрогой типизации в нём - нужно <s>проклясть</s> хорошо изучить « гибкое » сравнение
        и относиться к нему с большой осторожностью и вниманием. А также внимательно относиться к источникам информации,
        ввиду заметных и важных различий между крайней и предыдущими версиями языка. В качестве примера можно привести сравнение <strong>0 со строкой</strong> 
        - результат в PHP 7 и PHP 8 диаметрально противоположен.</p>
    </div>
    <br>
    <br>
</body>
</html>