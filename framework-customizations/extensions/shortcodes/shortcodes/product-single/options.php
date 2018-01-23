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
    'top_descr' => array(
        'type' => 'addable-popup',
        'label' => __('Заглавный абзац', '{domain}'),
        'desc' => __('добавление абзаца', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'textarea',
                'label' => __('абзац', '{domain}'),
                'desc' => __('добавление абзаца на старницу', '{domain}'),
                'value' => '',
            ),
        )
    ),
    'top_img' => array(
        'type' => 'upload',
        'label' => __('Фото продукта', '{domain}'),
        'desc' => __('добавление фото', '{domain}'),
        'images_only' => true,
    ),
    'items' => array(
        'type' => 'addable-popup',
        'label' => __('Описание расчета стоимости изделия', '{domain}'),
        'desc' => __('добавление абзаца', '{domain}'),
        'template' => '{{- items_text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'items_text' => array(
                'type' => 'text',
                'label' => __('Описание работы', '{domain}'),
                'desc' => __('добавление абзаца на старницу', '{domain}'),
                'value' => '',
            ),
            'items_value' => array(
                'type' => 'text',
                'label' => __('цена работы', '{domain}'),
                'desc' => __('добавление абзаца на старницу', '{domain}'),
                'value' => '',
            ),
        )
    ),
    'items_img' => array(
        'type' => 'addable-popup',
        'label' => __('Варианты обработки кромки', '{domain}'),
        'desc' => __('добавление абзаца', '{domain}'),
        'template' => '{{- img }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'img' => array(
                'type' => 'upload',
                'label' => __('Фото продукта', '{domain}'),
                'desc' => __('добавление фото', '{domain}'),
                'images_only' => true,
            ),            
        )
    ),
    'clients' => array(
        'type' => 'addable-popup',
        'label' => __('Образцы камня', '{domain}'),
        'desc'  => __('добавление образца', '{domain}'),
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
                'template' => '{{- image_top }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'image_top' => array(
                        'label' => __('Изображение-верх', '{domain}'),
                        'type' => 'upload',
                        'image_only' => true,
                    ),
                    'image_bottom' => array(
                        'label' => __('Изображение-низ', '{domain}'),
                        'type' => 'upload',
                        'image_only' => true,
                    )
                ),
            )
        ),
    ),
    'works_title' => array(
        'type' => 'text',
        'label' => __('Заголовок работ', '{domain}'),
        'desc'  => __('добавление названия', '{domain}'),
        'value' => '',
    ),
    'works' => array(
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