<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    'top_descriptions' => array(
        'type' => 'addable-popup',
        'label' => __('Текст с описание', '{domain}'),
        'desc'  => __('добавление текста', '{domain}'),
        'template' => '{{- text_block }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text_block' => array(
                'type' => 'text',
                'label' => __('Текст', '{domain}'),
                'value' => '',
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
    'questions_block' => array(
        'type' => 'addable-popup',
        'label' => __('Вопросы-ответы', '{domain}'),
        'desc'  => __('добавление вопросов-ответов', '{domain}'),
        'template' => '{{- question }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'question' => array(
                'type' => 'text',
                'label' => __('Вопрос', '{domain}'),
                'value' => '',
            ),
            'answer' => array(
                'type' => 'text',
                'label' => __('Ответ', '{domain}'),
                'value' => '',
            ),
        )
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