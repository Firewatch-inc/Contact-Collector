<?php
	ini_set('display_errors', true);

    require_once "start.php";

    if (!empty($_POST['addPeoples'])) {
        $departament = $_POST['departament'];
        $secondNames = $_POST['secondNames'];
        $firstNames  = $_POST['firstNames'];
        $patronymics = $_POST['patronymics'];
        $posts       = $_POST['posts'];
        $telephones  = $_POST['tels'];
        $emails      = $_POST['emails'];
        
        $count = count($posts);
        $peoples = array();
        for ($i = 0; $i < $count; $i++) {
            $peoples[] = [
                "dep"   => $departament, 
                "fio"   => [
                    "sn" => $secondNames[$i], 
                    "fn" => $firstNames[$i], 
                    "pt" => $patronymics[$i]
                ],
                "post"  => $posts[$i],
                "tel"   => $telephones[$i],
                "email" => $emails[$i]
            ];
        }

        $result = true;
        $add_query = $DB->prepare("INSERT INTO `peoples` (`departament`, `second_name`, `first_name`, `patronymic`, `telephone`, `email`, `post`) VALUES (:departament, :sn, :fn, :pt, :tel, :email, :post)");
        for ($i = 0; $i < $count; $i++) {

            $add_query->bindValue(":departament", $peoples[$i]['dep']);
            $add_query->bindValue(":sn", $peoples[$i]['fio']['sn']);
            $add_query->bindValue(":fn", $peoples[$i]['fio']['fn']);
            $add_query->bindValue(":pt", $peoples[$i]['fio']['pt']);
            $add_query->bindValue(":tel", $peoples[$i]['tel']);
            $add_query->bindValue(":email", $peoples[$i]['email']);
            $add_query->bindValue(":post", $peoples[$i]['post']);
            
            $result *= $add_query->execute();
        }

        if ($result) {
            CTools::Message("Данные успешно записаны");
            CTools::Redirect("index.php");
        } else {
            CTools::Message("Произошла ошибка при записи данных ");
        }

    }

    $CT->show("index.tpl");

?>
