<?php
/* Smarty version 3.1.29, created on 2018-02-04 12:37:32
  from "C:\OpenServer\domains\peoples.php\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a76d45c9edc46_40144971',
  'file_dependency' => 
  array (
    'bf3b86834b8073a321d027ab44148f95668ad241' => 
    array (
      0 => 'C:\\OpenServer\\domains\\peoples.php\\templates\\tpl\\index.tpl',
      1 => 1517737051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a76d45c9edc46_40144971 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Форма для ввода данных о сотрудниках</title>
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
                        <label>Наименование подразделения (Вы можете выбрать своё подразделение, если оно было ранее добавлено кем-то из сотрудников, иначе просто впишите наименование своего подразделения и одно добавится)</label>
                        <input type="text" name="departament" list="departaments" required>
                        <datalist id="departaments">
                            <?php
$_from = $_smarty_tpl->tpl_vars['departaments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_departament_0_saved_item = isset($_smarty_tpl->tpl_vars['departament']) ? $_smarty_tpl->tpl_vars['departament'] : false;
$_smarty_tpl->tpl_vars['departament'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['departament']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['departament']->value) {
$_smarty_tpl->tpl_vars['departament']->_loop = true;
$__foreach_departament_0_saved_local_item = $_smarty_tpl->tpl_vars['departament'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['departament']->value['departament'];?>
"><?php echo $_smarty_tpl->tpl_vars['departament']->value['departament'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['departament'] = $__foreach_departament_0_saved_local_item;
}
if ($__foreach_departament_0_saved_item) {
$_smarty_tpl->tpl_vars['departament'] = $__foreach_departament_0_saved_item;
}
?>
                        </datalist>
                    </div>
                    <div class="field">
                        <fieldset>
                            <legend><h2>Сотрудники <a href="#" id="plusPeople"><i class="ui icon large plus"></i></a></h2></legend>
                            <table class="ui table">
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
                $("#peoplesList").append('<tr name="people_' + countPeoples + '"><td>' + countPeoples + '</td><td><div class="field"><label for="">Фамилия</label><input type="text" name="secondNames[]" required></div><div class="field"><label for="">Имя</label><input type="text" name="firstNames[]" required></div><div class="field"><label for="">Отчество</label><input type="text" name="patronymics[]" required></div></td><td><div class="field"><label>Должность</label><input type="text" name="posts[]" required></div></td><td><div class="field"><label>Телефон</label><input type="text" name="tels[]"></div></td><td><div class="field"><label>Email</label><input type="text" name="emails[]" required></div></td><td><div class="field"><label>Адрес (местоположение)</label><input type="text" name="locations[]"></div></td><td><a href="#" onclick="removePeople(' + countPeoples + ');"><i class="ui red icon huge trash"></i></a></td></tr>');
            });

        <?php echo '</script'; ?>
>

    </body>
</html>
<?php }
}
