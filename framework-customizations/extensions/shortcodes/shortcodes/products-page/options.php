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
                'label' => __('Название ссылки', '{domain}'),
                'value' => '',
            ),
            'link' => array(
                'type' => 'text',
                'label' => __('Сcылка(путь к странице)', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'top_descr' =>array(
        'type' => 'textarea',
        'label' => __('Заглавный абзац', '{domain}'),
        'desc'  => __('добавление текста заглавного абзаца', '{domain}'),
    ),
    'product' => array(
        'type' => 'addable-popup',
        'label' => __('Название продукта', '{domain}'),
        'desc'  => __('добавление продукта', '{domain}'),
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
                'label' => __('Фото продукта', '{domain}'),
                'desc'  => __('добавление фото', '{domain}'),
                'images_only' => true,
            ),
            'title' => array(
                'type' => 'text',
                'label' => __('Название продутка', '{domain}'),
                'desc'  => __('добавление названия', '{domain}'),
                'value' => '',
            ),
            'descr' => array(
                'type' => 'text',
                'label' => __('Описание продутка', '{domain}'),
                'desc'  => __('добавление описания', '{domain}'),
                'value' => '',
            ),
        ),
    ),
    'adv_title' => array(
        'type' => 'text',
        'label' => __('Заголовок', '{domain}'),
        'desc'  => __('добавление заголовка', '{domain}'),
        'value' => 'Преимущества наших изделий',
    ),
    'adv_text' => array(
        'type' => 'text',
        'label' => __('Текст', '{domain}'),
        'desc'  => __('добавление текста', '{domain}'),
        'value' => '',
    ),
];