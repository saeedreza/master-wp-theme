<?php
// SIDEBARS AND WIDGETIZED AREAS
function master_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'masterwp'),
		'description' => __('The first (primary) sidebar.', 'masterwp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'masterwp'),
		'description' => __('The offcanvas sidebar.', 'masterwp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
} // don't remove this bracket!