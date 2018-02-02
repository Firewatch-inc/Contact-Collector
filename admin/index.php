<?php
    
    require_once "../start.php";
    
    $peoples = $DB->query("SELECT * FROM `peoples` ORDER BY `departament`, `second_name`, `first_name`, `patronymic`")->fetchAll(PDO::FETCH_ASSOC);
    
    $peoplesByDepartament = array();
    foreach ($peoples as $people) {
        $peoplesByDepartament[$people['departament']][] = $people;
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Добро пожаловать</h1>
        <hr>
        <?php foreach ($peoplesByDepartament as $dep => $peoples) { ?>
        <fieldset>
            <legend><?= $dep; ?></legend>
            <table width="100%" border="1" cellpadding="10">
                <thead>
                    <th style="text-align: center;">№</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Должность</th>
                    <th>Адрес</th>
                </thead>
                <?php $i = 0; foreach ($peoples as $people) {?>
                    <tbody>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $people['second_name']; ?></td>
                            <td><?= $people['first_name']; ?></td>
                            <td><?= $people['patronymic']; ?></td>
                            <td><?= $people['telephone']; ?></td>
                            <td><?= $people['email']; ?></td>
                            <td><?= $people['post']; ?></td>
                            <td><?= $people['location']; ?></td>
                        </tr>
                    </tbody>
                <?php ++$i; }; ?>
            </table>
        </fieldset>
        <?php }; ?>
    </body>
</html>