<?

function post_data_clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

if ($_POST['type'] === 'message') {
    $name = post_data_clean($_POST['name']);
    $phone = post_data_clean($_POST['phone']);

    $mail_result = mail("betonStroy@mail.ru", "Заявка с сайта", "Имя:" . $name . ". Телефон: " . $phone, "From: otpravitel@mail.ru \r\n");
    if ($mail_result) {
        echo json_encode(array(
            'success' => true,
            'message' => "Сообщение успешно отправлено",
        ));
        die();
    } else {
        echo json_encode(array(
            'success' => false,
            'message' => "При отправке сообщения возникли ошибки",
        ));
        die();
    }
} elseif ($_POST['type'] === 'calculator') {
    $phone = post_data_clean($_POST['phone']);
    $concrete = post_data_clean($_POST['concrete']);
    $volume = post_data_clean($_POST['volume']);
    $address = post_data_clean($_POST['address']);

    $mail_result = mail(
        "betonStroy@mail.ru",
        "Калькулятор цен с сайта",
        "Телефон: " . $phone . ". Тип бетона: " . $concrete . ". Объем: " . $volume . ". Адрес: " . $address,
        "From: otpravitel@mail.ru \r\n"
    );
    if ($mail_result) {
        echo json_encode(array(
            'success' => true,
            'message' => "Сообщение успешно отправлено",
        ));
        die();
    } else {
        echo json_encode(array(
            'success' => false,
            'message' => "При отправке сообщения возникли ошибки",
        ));
        die();
    }
}

echo json_encode(array(
    'success' => false,
    'message' => "Что-то пошло не так!",
));
die();
