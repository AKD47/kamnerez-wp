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
    'title' => array(
        'type' => 'text',
        'label' => __('Название страницы', '{domain}'),
        'desc'  => __('Название страницы', '{domain}'),
    ),
    'breadcrumbs' => array(
        'type' => 'addable-popup',
        'label' => __('Хлебные крошки', '{domain}'),
        'desc'  => __('добавление ссылки', '{domain}'),
        'template' => '{{- page }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'page' => array(
                'type' => 'text',
                'label' => __('Название ссылки', '{domain}'),
                'value' => '',
            ),
            'link' => array(
                'type' => 'text',
                'label' => __('Сcылка', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'top_text' => array(
        'type' => 'textarea',
        'label' => __('Слоган страницы', '{domain}'),
        'desc' => __('добавление слогана', '{domain}'),
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