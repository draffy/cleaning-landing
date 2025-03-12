<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Указываем адрес получателя
    $to = 'lukin41@yandex.ru';
    // Тема письма
    $subject = 'Запрос на консультацию с сайта';
    
    // Составляем сообщение
    $message = "Имя: $name\n";
    $message .= "Телефон: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Комментарий: $comment\n";
    
    // Заголовки письма
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Ваше сообщение успешно отправлено!";
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
}
?>
