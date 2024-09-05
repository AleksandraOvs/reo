<?php

add_action( 'init', 'register_post_types' );

	function register_post_types(){
	
		register_post_type( 'programms', [
			'label'  => null,
			'labels' => [
				'name'               => 'Авторские программы', // основное название для типа записи
				'singular_name'      => 'Программа', // название для одной записи этого типа
				'add_new'            => 'Добавить программу', // для добавления новой записи
				'add_new_item'       => 'Добавление программы', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование программы', // для редактирования типа записи
				'new_item'           => 'Новая программа', // текст новой записи
				'view_item'          => 'Смотреть программу', // для просмотра записи этого типа.
				'search_items'       => 'Искать программу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Авторские программы', // название меню
			],
			'description'            => '',
			'public'                 => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'           => true, // показывать ли в меню админки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 4,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'elementor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );


		register_post_type( 'gallery', [
			'label'  => null,
			'labels' => [
				'name'               => 'Фотогалерея', // основное название для типа записи
				'singular_name'      => 'Страница фотогалереи', // название для одной записи этого типа
				'add_new'            => 'Добавить фотогалерею', // для добавления новой записи
				'add_new_item'       => 'Добавление фотогалереи', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование фотогалереи', // для редактирования типа записи
				'new_item'           => 'Новая фотогалерея', // текст новой записи
				'view_item'          => 'Смотреть фотогалерею', // для просмотра записи этого типа.
				'search_items'       => 'Искать фотогалерею', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фотогалереи', // название меню
			],
			'description'            => '',
			'public'                 => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'           => true, // показывать ли в меню админки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 5,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'elementor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );

        register_post_type( 'books', [
			'label'  => null,
			'labels' => [
				'name'               => 'Наши книги', // основное название для типа записи
				'singular_name'      => 'Книга', // название для одной записи этого типа
				'add_new'            => 'Добавить книгу', // для добавления новой записи
				'add_new_item'       => 'Добавление книги', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование книги', // для редактирования типа записи
				'new_item'           => 'Новая книга', // текст новой записи
				'view_item'          => 'Смотреть книгу', // для просмотра записи этого типа.
				'search_items'       => 'Искать книгу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Книги', // название меню
			],
			'description'            => '',
			'public'                 => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'           => true, // показывать ли в меню админки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 5,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'elementor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	
	}

    ?>