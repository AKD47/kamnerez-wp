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
                'label' => __('Название ссылки)', '{domain}'),
                'value' => '',
            ),
            'link' => array(
                'type' => 'text',
                'label' => __('Сcылка', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'about_photo' => array(
        'type' => 'upload',       
        'label' => __('Фотография', '{domain}'),
        'images_only' => true,
    ),
    'about_title' => array(
        'type' => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => '',
    ),
    'about_subtitle' => array(
        'type' => 'text',
        'label' => __('Подзаголовок', '{domain}'),
        'value' => '',
    ),
    'about_textblock' => array(
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
                'type' => 'textarea',
                'label' => __('Текст', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'about_title_two' => array(
        'type' => 'text',
        'label' => __('Заголовок', '{domain}'),
        'value' => '',
    ),
    'about_slogans' => array(
        'type' => 'addable-popup',
        'label' => __('Слоганы компании', '{domain}'),
        'desc'  => __('добавление слогана', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'text',
                'label' => __('Текст слогана', '{domain}'),
                'value' => '',
            )
        ),
    ),
];