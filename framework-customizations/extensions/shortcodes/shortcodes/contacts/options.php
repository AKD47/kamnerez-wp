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
    'address' => array(
        'type' => 'text',
        'label' => __('Адресс', '{domain}'),
        'desc' => __('добавление адреса', '{domain}'),
    ),
    'phone' => array(
        'type' => 'addable-popup',
        'label' => __('Телефонный номер', '{domain}'),
        'desc'  => __('добавление телефонного номера', '{domain}'),
        'template' => '{{- number }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(           
            'number' => array(
                'type' => 'text',
                'label' => __('номер', '{domain}'),
                'desc'  => __('добавление номера', '{domain}'),
                'value' => '',
            ),            
        ),  
    ),
    'mail' => array(
        'type' => 'text',
        'label' => __('E-mail', '{domain}'),
        'desc' => __('добавление e-mail', '{domain}'),
    ),
];