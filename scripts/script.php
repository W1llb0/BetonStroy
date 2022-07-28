<?
$ip = $_SERVER['REMOTE_ADDR'];
$access_key = '6fddf8b4efcbf1d813291999f2ce4408';
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);
$api_result = json_decode($json, true);
$county_code = $api_result['country_code'];
$region_name = $api_result['region_name'];
$city = $api_result['city'];
print($city);
print($country_code);
// if(empty($city)){
//     print('asdasdasd');
// }
//  print($ip);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'C:\OpenServer\domains\BetonStroy-main\PHPMailer/src/Exception.php';
require_once 'C:\OpenServer\domains\BetonStroy-main\PHPMailer/src/PHPMailer.php';
require_once 'C:\OpenServer\domains\BetonStroy-main\PHPMailer/src/SMTP.php';

// require_once 'C:\OpenServer\domains\Leon_art-main\PHPMailer/src/Exception.php';
// require_once 'C:\OpenServer\domains\Leon_art-main\PHPMailer/src/PHPMailer.php';
// require_once 'C:\OpenServer\domains\Leon_art-main\PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
print($name);

$mail->isSMTP();
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'leonart01@yandex.ru';
$mail->Password = 'ktoyfhn01';
$mail->Port = 465;

$mail->setFrom('leonart01@yandex.ru');
$mail->addAddress('david.biboev@mail.ru');
$mail->isHTML(true);

$mail->Subject = 'Заявка на заказ';
$mail->Body = 'Имя:' .$name . ' телефон:' .$phone;


try{
    return $mail->send();
} 
catch (Exception $e) {
      echo "{$mail->ErrorInfo}";
      return false;
}















// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $name = htmlspecialchars($name);
// $phone = htmlspecialchars($phone);
// $name = urldecode($name);
// $phone = urldecode($phone);
// $name = trim($name);
// $phone = trim($phone);

// mail("david.biboev@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$phone ,"From: maliev-x8@mail.ru \r\n");
// if (mail("david.biboev@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$phone ,"From: maliev-x8@mail.ru \r\n"))
//  {
//     echo "сообщение успешно отправлено";
// } else {
//     echo "при отправке сообщения возникли ошибки";
// }

?>