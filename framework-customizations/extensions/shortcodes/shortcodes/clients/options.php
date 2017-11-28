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
    'clients' => array(
        'type' => 'addable-popup',
        'label' => __('Наши клиенты', '{domain}'),
        'desc'  => __('добовление клиентов', '{domain}'),
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