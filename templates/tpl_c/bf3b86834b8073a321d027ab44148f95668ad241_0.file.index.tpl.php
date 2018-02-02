<?php
/* Smarty version 3.1.29, created on 2018-02-02 14:58:12
  from "C:\OpenServer\domains\peoples.php\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a7452540e25e1_96557319',
  'file_dependency' => 
  array (
    'bf3b86834b8073a321d027ab44148f95668ad241' => 
    array (
      0 => 'C:\\OpenServer\\domains\\peoples.php\\templates\\tpl\\index.tpl',
      1 => 1517572690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7452540e25e1_96557319 ($_smarty_tpl) {
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
                                        <th>Адрес (местоположение)</th>
                                        <th>Действие</th>
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

            function removePeople(number) {
                if (countPeoples > 0) {                
                    $("[name='people_" + number + "']").remove();
                    countPeoples--;
                }
            }
            
            $("#plusPeople").on('click', function() {
                countPeoples++;
                $("#peoplesList").append('<tr name="people_' + countPeoples + '"><td>' + countPeoples + '</td><td><div class="field"><label for="">Фамилия</label><input type="text" name="secondNames[]" required></div><div class="field"><label for="">Имя</label><input type="text" name="firstNames[]" required></div><div class="field"><label for="">Отчество</label><input type="text" name="patronymics[]" required></div></td><td><div class="field"><input type="text" name="posts[]" required></div></td><td><div class="field"><input type="text" name="tels[]"></div></td><td><div class="field"><input type="text" name="emails[]" required></div></td><td><input type="text" name="locations[]"></td><td><a href="#" onclick="removePeople(' + countPeoples + ');" class="ui red button">Удалить строку</a></td></tr>');
            });

        <?php echo '</script'; ?>
>

    </body>
</html>
<?php }
}
