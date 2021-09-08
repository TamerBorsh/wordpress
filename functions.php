<?php
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
if(function_exists('register_sidebar'))
register_sidebar(array('name' => 'sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h1>',
'after_title' => '</h1>'
));
/**number page**/
function numbering_Pagination() {
	global $wp_query;
	$all_pages = $wp_query->max_num_pages;
	$current_page = max(1, get_query_var('paged'));
	if($all_pages > 1){
		return Paginate_links(array(
			'base'      => get_pagenum_link() . '%_%',
			'format'    => 'page/%#%',
			'current'   => $current_page,
			'mid_size'  => 1,
			'end_size'  => 4,

		));

	}
}
?>

