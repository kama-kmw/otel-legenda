<?php

$data = $_POST;
$phone = $data['phone'];
// Сообщение
$message = 'Перезвоните мне по этому номеру - '.$phone ;

// Отправляем если кнопка нажата
if(isset($data['submit_wait_call'])) {
  mail('surha_dag@mail.ru', 'Заявка с сайта Hotel-Legenda.ru', $message);
}
?>