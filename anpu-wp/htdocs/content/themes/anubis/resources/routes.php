<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

/**
 * WP routes
 */
 
 /**
  *  Home page
  * 
 */
Route::match(['get', 'post'], 'front', 'Pages@home');

/**
 * About Page
 * Display information about the "company" and its team.
 * The page is using a custom template which helps associate
 * custom fields to the "about" page only and not the other
 *
 */
Route::match(['get', 'post'], 'template', ['about', 'uses' => 'Pages@about']); 

/**
 * Help page
 * Display a list of F&Qs
 */
Route::match(['get', 'post'], 'page', ['help', 'uses' => 'Pages@help']);

/**
 * Single post.
 * 
 * @param Posts $posts The posts model instance.
 * @param \WP_Post $post The post instance.
 * 
 * @return string
 */
 
Route::match(['get', 'post'], 'singular', ['post', function(Posts $posts, \WP_Post $post)
{
    return view('blog.post', [
            'article' => $post,
            'latest_articles' => $posts->find(['posts_per_page' => 2])->get()
        ]);
}]);

/**
 * Default archive pages.
 * 
 * @param \WP_Post $post
 * @param \WP_Query $query
 * 
 * @return string
 */ 
Route::match(['get', 'post'], 'archive', function()
{
    return view('blog.archive', [
        'articles' => $query->get_posts(),
        'title' => get_the_archive_title()
        ]);
});


/**
 * Search articles page.
 * 
 * @param \WP_Post $post
 * @param \WP_Query $query
 * 
 * @return string
 */ 
Route::match(['get', 'post'], 'search', function($posts, \WP_Query $query)
{
    return view('blog.search', [
        'posts' => $query->get_posts(),
        'search_terms' => Input::get('s')
        ]);
}); 
 
/**
Route::get('/api/v2/projects', function () {
    return 'List of projects';
});

Route::post('/api/v2/projects/', function () {
    return 'Add one project';
});

Route::get('/api/v2/projects/{id}', function ($id) {
    return "Project with ID {$id}";
});*/