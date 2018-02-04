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
        <link rel="stylesheet" type="text/css" href="../css/semantic/semantic.css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/semantic/semantic.js"></script>
        <style rel="stylesheet" type="text/css">
            
            .ui.table tr th,
            .ui.table tr td:first-child {
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <div class="ui internally celled grid">
            <div class="row">
                <div class="fourteen wide column">
                    <h1>Список сотрудников</h1>
                </div>
                <div class="two wide column">                
                    <a href="../index.php" class="ui big button">Назад</a>
                </div>
            </div>
            <div class="row">
                <div class="sixteen wide column">
                    <?php foreach ($peoplesByDepartament as $dep => $peoples) { ?>
                        <div class="ui styled accordion" style="width: 100%;">
                            <div class="title"><?= $dep; ?></div>
                            <div class="content">            
                                <table class="ui flex celled table" cellpadding="10">
                                    <col width="5%">
                                    <col width="11%">
                                    <col width="11%">
                                    <col width="11%">
                                    <col width="14%">
                                    <col width="14%">
                                    <col width="14%">
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
                                    <?php $i = 1; foreach ($peoples as $people) {?>
                                        <tbody>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $people['second_name']; ?></td>
                                                <td><?= $people['first_name']; ?></td>
                                                <td><?= $people['patronymic']; ?></td>
                                                <td><?= $people['telephone']; ?></td>
                                                <td><a href="mailto:<?= $people['email']; ?>"><?= $people['email']; ?></a></td>
                                                <td><?= $people['post']; ?></td>
                                                <td><?= $people['location']; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php ++$i; }; ?>
                                </table>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            
            $(".ui.accordion").accordion();
            
        </script>
        
    </body>
</html>