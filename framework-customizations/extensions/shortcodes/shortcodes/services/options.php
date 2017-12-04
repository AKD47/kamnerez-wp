<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'top_slogan' => array(
        'type' => 'text',
        'label' => __('Слоган страницы', '{domain}'),
        'desc'  => __('добавление слогана', '{domain}'),
        'value' => '',
    ),
    'content' => array(
        'type' => 'addable-popup',
        'label' => __('Название услуги', '{domain}'),
        'desc'  => __('добавление услуги', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Сcылка', '{domain}'),
                'desc'  => __('добавление ссылки на старницу', '{domain}'),
                'value' => '',
            ),
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото услуги', '{domain}'),
                'desc'  => __('добавление фото', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('Название услуги', '{domain}'),
                'desc'  => __('добавление названия', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'serv_title' => array(
        'type' => 'text',
        'label' => __('Заголовок под услугами', '{domain}'),
        'desc'  => __('добавление заголовка', '{domain}'),
        'value' => ''
    ),
    'serv_text' => array(
        'type' => 'text',
        'label' => __('текст услугами', '{domain}'),
        'desc'  => __('добавление текста', '{domain}'),
        'value' => ''
    ),
];