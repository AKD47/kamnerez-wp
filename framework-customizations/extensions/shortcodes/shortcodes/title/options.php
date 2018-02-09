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
            'link' => array(
                'type' => 'text',
                'label' => __('Ссылка на страницу', '{domain}'),
                'descr' => __('добавление ссылки', '{domain}'),
                'value' => '',
            )
        ),
    ),
    'advantages' => array(
        'type' => 'addable-popup',
        'label' => __('Наши приемущества', '{domain}'),
        'desc'  => __('добавление приемущества', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Иконка', '{domain}'),
                'images_only' => true,
            ),
            'descr' => array(
                'label' => __('Описание слайда', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
        ),
    ),
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
    ),
    'clients' => array(
        'type' => 'addable-popup',
        'label' => __('Наши клиенты', '{domain}'),
        'desc'  => __('добавление клиентов', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Название вкладки', '{domain}'),
                'value' => '',
            ),
            'tabs' => array(
                'type' => 'addable-popup',
                'label' => __('Вкладки', '{domain}'),
                'desc'  => __('добовление вкладки', '{domain}'),
                'template' => '{{- link_top }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'link_top' => array(
                        'type' => 'text',
                        'label' => __('Ссылка-верх', '{domain}'),
                        'value' => '',
                    ),
                    'image_top' => array(
                        'label' => __('Изображение-верх', '{domain}'),
                        'type' => 'upload',
                        'image_only' => true,
                    ),
                    'link_bottom' => array(
                        'type' => 'text',
                        'label' => __('Ссылка-низ', '{domain}'),
                        'value' => '',
                    ),
                    'image_bottom' => array(
                        'label' => __('Изображение-низ', '{domain}'),
                        'type' => 'upload',
                        'image_only' => true,
                    )
                ),
            )
        ),
    )
];