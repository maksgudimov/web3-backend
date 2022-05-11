<?php 


header('Content-Type: text/html; charset=UTF-8');

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
  if (!empty($_GET['save'])) {
    // Если есть параметр save, то выводим сообщение пользователю.
    print('Спасибо, результаты сохранены.');
  }
  // Включаем содержимое файла form.php.
  include('form.php');
  // Завершаем работу скрипта.
  exit();
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.

// Проверяем ошибки.
$errors = FALSE;
if (empty($_POST['name'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}
if (empty($_POST['email'])) {
  print('Заполните mail.<br/>');
  $errors = TRUE;
}
if (empty($_POST['date1'])) {
  print('Заполните date.<br/>');
  $errors = TRUE;
}
if (empty($_POST['gender'])) {
  print('Заполните gender.<br/>');
  $errors = TRUE;
}
if (empty($_POST['hand'])) {
  print('Заполните hand.<br/>');
  $errors = TRUE;
}
if (empty($_POST['select1'])) {
  print('Заполните select.<br/>');
  $errors = TRUE;
}
if (empty($_POST['biogr'])) {
  print('Заполните biogr.<br/>');
  $errors = TRUE;
}
if (empty($_POST['form-ch'])) {
  print('Заполните ch.<br/>');
  $errors = TRUE;
}

if ($errors) {
  // При наличии ошибок завершаем работу скрипта.
  exit();
}

// Сохранение в базу данных.

//$user = 'u41732';
//$pass = '9367477';
//$dbName = 'u41732';

echo 'GOOD ERRORS!1';
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date1'];
$gender = $_POST['gender'];
$hand = $_POST['hand'];
// преобразуем данные в строку 

$select12 = implode(",",$_POST['select1']);
$biogr = $_POST['biogr'];
$formCh = $_POST['form-ch'];
$id = 1;

// Подготовленный запрос. Не именованные метки.
//подключение к базе данных 
//$db = new PDO('mysql:host=localhost; dbname=$dbName, $user, $pass, array(PDO::ATTR_PERSISTENT => true)); 
$db = new PDO('mysql:host=localhost; dbname=u41732', 'u41732', '9367477', array(PDO::ATTR_PERSISTENT => true));
try 
{
 $qu = $db->prepare("INSERT INTO application SET id = ?, name = ?, email = ?,data_1 = ?,gender = ?, hand = ?, biogr = ?,formCh = ?");
 //$query->execute(array ($_POST['name'],$_POST['email'],$_POST['date1'],$_POST['gender'],$_POST['hand'],$_POST['biogr'],$_POST['form-ch']));
 //$query->execute(array($_POST['name'],$_POST['email'],date('d-m-y', strtotime($_POST['date1'])),$_POST['gender'],$_POST['hand'],$_POST['biogr'],$_POST['form-ch']));
 $qu->execute([$id,$name,$email,$date,$gender,$hand,$biogr,$formCh]);
 $id = $db->lastInsertId();
 $qu2 = $db->prepare("INSERT INTO application2 SET id = ?,sel = ?");
 $qu2->execute([$id, $select12]);
 echo "Запрос отправлен!" . $id;

}

catch(PDOException $e)
{
print('Error : ' . $e->getMessage());
exit();
}

?>