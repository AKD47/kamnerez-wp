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
    'top_text' => array(
        'type' => 'addable-popup',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(            
            'text' => array(
                'label' => __('Текст блока', '{domain}'),
                'desc'  => __('добавление текста', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
    'content' => array(
        'type' => 'addable-popup',
        'label' => __('Название камня', '{domain}'),
        'desc'  => __('добавление камея', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Ссылка на страницу типа камня', '{domain}'),
                'desc'  => __('добавление ссылки', '{domain}'),
                'value' => '',
            ),
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото камня', '{domain}'),
                'desc'  => __('добавление фото', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('Название камея', '{domain}'),
                'desc'  => __('добавление названия', '{domain}'),
                'value' => '',
            ),
        ),
    ),
];