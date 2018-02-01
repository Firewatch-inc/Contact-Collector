<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/semantic/semantic.js"></script>
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
                            <legend>Сотрудники <a href="#" id="plusPeople"><i class="ui icon large plus"></i></a></legend>
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
                    <div class="field">
                        <input type="submit" name="addPeoples" value="Отправить" class="ui massive green button">
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript">

            var countPeoples = 0;

            function removePeople(object) {
                $(object).remove();
                countPeoples--;
            }

            $("#plusPeople").on('click', function() {
                countPeoples++;
                $("#peoplesList").append('<tr id="#people_' + countPeoples + '"><td>' + countPeoples + '</td><td><div class="field"><label for="">Фамилия</label><input type="text" name="secondNames[]" required></div><div class="field"><label for="">Имя</label><input type="text" name="firstNames[]" required></div><div class="field"><label for="">Отчество</label><input type="text" name="patronymics[]" required></div></td><td><div class="field"><input type="text" name="posts[]" required></div></td><td><div class="field"><input type="text" name="tels[]"></div></td><td><div class="field"><input type="text" name="emails[]" required></div></td></tr>');
            });

        </script>

    </body>
</html>