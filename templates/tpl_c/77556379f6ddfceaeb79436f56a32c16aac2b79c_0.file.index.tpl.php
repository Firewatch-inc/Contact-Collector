<?php
/* Smarty version 3.1.29, created on 2018-02-01 17:01:57
  from "/var/www/html/templates/tpl/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a731dd56ec981_83127534',
  'file_dependency' => 
  array (
    '77556379f6ddfceaeb79436f56a32c16aac2b79c' => 
    array (
      0 => '/var/www/html/templates/tpl/index.tpl',
      1 => 1517493716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a731dd56ec981_83127534 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/semantic/semantic.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="ui one column centered celled grid">
            <div class="column">
                <form name="" method="POST" class="ui form">
                    <div class="field">
                        <label>Наименование подразделения</label>
                        <input type="text" name="departament">
                    </div>
                    <div class="field">
                        <fieldset>
                            <legend><h2>Сотрудники <a href="#" id="plusPeople"><i class="ui icon large plus"></i></a></h2></legend>
                            <table class="ui table">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>ФИО</th>
                                        <th>Должность</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody id="peoplesList">
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                    <div class="field" style="text-align: center;">
                       <p> <input type="submit" name="addPeoples" value="Отправить" style="font-size: 32px;" class="ui massive green button"> </p>
                    </div>
                </form>
            </div>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">

            var countPeoples = 0;

            function removePeople(object) {
                $(object).remove();
                countPeoples--;
            }

            $("#plusPeople").on('click', function() {
                countPeoples++;
                $("#peoplesList").append('<tr id="#people_' + countPeoples + '"><td>' + countPeoples + '</td><td><div class="field"><label for="">Фамилия</label><input type="text" name="secondNames[]" required></div><div class="field"><label for="">Имя</label><input type="text" name="firstNames[]" required></div><div class="field"><label for="">Отчество</label><input type="text" name="patronymics[]" required></div></td><td><div class="field"><input type="text" name="posts[]" required></div></td><td><div class="field"><input type="text" name="tels[]"></div></td><td><div class="field"><input type="text" name="emails[]" required></div></td></tr>');
            });

        <?php echo '</script'; ?>
>

    </body>
</html>
<?php }
}
