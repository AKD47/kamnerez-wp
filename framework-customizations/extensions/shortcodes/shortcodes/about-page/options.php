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
        'desc'  => __('Добавить название страницы', '{domain}'),
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
                'label' => __('Сcылка(путь к странице)', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'top_text' => array(
        'type' => 'addable-popup',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'text',
                'label' => __('Название ссылки)', '{domain}'),
                'value' => '<span>Компания «Рублевский камнерез» была основана 2003 году.</span>',
            )
        ),
    ),
    'about_photo' => array(
        'type' => 'upload',
        'label' => __('Фотография', '{domain}'),
        'images_only' => true,
    ),
    'about_textblocks' => array(
        'type' => 'addable-popup',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'textarea',
                'label' => __('Добавление текста', '{domain}'),
                'value' => '',
            )
        ),
    ),
];