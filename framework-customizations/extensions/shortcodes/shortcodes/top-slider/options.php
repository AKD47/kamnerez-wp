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
    'slider' => array(
        'type' => 'addable-popup',
        'label' => __('Главный слайдер', '{domain}'),
        'desc'  => __('добавление слайдов', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок слайда', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'subtitle' => array(
                'label' => __('Описание слайда', '{domain}'),
                'type' => 'text',
                'value' => '',
            ), 
            'slide' => array(
                'type' => 'upload',
                'label' => __('Фотография', '{domain}'),
                'images_only' => true,
            ),
        ),
    )
];