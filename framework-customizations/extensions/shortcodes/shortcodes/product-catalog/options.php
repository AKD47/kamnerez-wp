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
    'types' => array(
        'type' => 'addable-popup',
        'label' => __('Виды изделий', '{domain}'),
        'desc'  => __('добавление приемущества', '{domain}'),
        'template' => '{{- descr }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Ссылка на страницу изделия', '{domain}'),
                'desc'  => __('добавление ссылки', '{domain}'),
                'value' => '',
            ),
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото изделия', '{domain}'),
                'images_only' => true,
            ),
            'descr' => array(
                'label' => __('Название изделия', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
    'text_blocks' => array(
        'type' => 'addable-popup',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Заголовок блока', '{domain}'),
                'desc'  => __('добавление заголовка', '{domain}'),
                'value' => '',
            ),            
            'text' => array(
                'label' => __('Текст блока', '{domain}'),
                'desc'  => __('добавление текста', '{domain}'),
                'type' => 'textarea',
                'value' => '',
            ),
        ),
    ),
    'examples_text' => array(
        'type' => 'text',
        'label' => __('Текст примера работ', '{domain}'),
        'desc'  => __('добавление заголовка', '{domain}'),
        'value' => '',
    ),
    'content' => array(
        'type' => 'addable-popup',
        'label' => __('Название работы', '{domain}'),
        'desc'  => __('добавление работы', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото работы', '{domain}'),
                'desc'  => __('добавление фото', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('Название работы', '{domain}'),
                'desc'  => __('добавление названия', '{domain}'),
                'value' => '',
            ),
        ),
    ),
];