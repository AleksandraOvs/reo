<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Добавить в портфолио')
    ->show_on_template(array('services-template.php', 'services-template2.php'))
    ->add_fields(array(
        Field::make('image', 'crb_portfolio_placeholder', 'Изображение постера')
            ->set_width(33),
        Field::make('media_gallery', 'crb_portfolio_sources', 'Видео для поста')
            ->set_width(33)
            ->set_type('video')
    ));

Container::make('post_meta', 'Цитата для книги')
    ->show_on_post_type('books')
    ->add_fields(array(
        Field::make('rich_text', 'crb_boot_quote', 'Цитата')
    ));

Container::make('post_meta', 'Добавить в фотогалерею')
    ->show_on_template('page-gallery.php')
    ->add_fields(array(
        Field::make('complex', 'photo_sections', 'Фотографии для галереи')
            ->add_fields(array(
                Field::make('text', 'crb_pg_section_name', 'Название секции')
                    ->set_width(50),
                Field::make('text', 'crb_pg_section_id', 'Идентификатор секции (только латинскими буквами)')
                    ->set_width(50),
                Field::make('complex', 'crb_pg_photos', 'Фото для этой секции')
                    ->add_fields(array(
                        Field::make('image', 'crb_pg_image', 'Фотография')
                            ->set_width(50),
                        Field::make('rich_text', 'crb_pg_image_description', 'Описание фотографии')
                            ->set_width(50)
                    ))
            ))
    ));
