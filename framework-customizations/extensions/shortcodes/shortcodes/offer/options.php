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
    'offers' => array(
        'type' => 'addable-popup',
        'label' => __('Мы воплняем работы', '{domain}'),
        'desc'  => __('добавление работ', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото работ', '{domain}'),
                'images_only' => true,
            ),
            'descr' => array(
                'label' => __('Описание работ', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'title' => array(
                'label' => __('Название', '{domain}'),
                'type' => 'text',
                'value' => '',
            )
        ),
    )
];