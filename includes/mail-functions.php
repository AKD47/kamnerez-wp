<?php
/*feedback form*/
add_action('wp_ajax_feedback', 'feedback');
add_action('wp_ajax_nopriv_feedback', 'feedback');

function feedback() {

    $to = fw_get_db_customizer_option('email');
    $subject = 'Вам сообщение с сайта';
    $message = 'Пользователь: ' . $_POST['name'] . ' Email - ' . $_POST['mail'] . '<br /> Текст - ' . $_POST['message'];
    $headers = 'Content-type: text/html';
    wp_mail($to, $subject, $message, $headers);
    wp_die();

}
