<?php

namespace Theme\Controllers;

use Theme\Models\Posts;
use Themosis\Route\BaseController; 

/**
 * Pages class extends Base Controller
 */
class Pages extends BaseController
{
    
    /**
     * Handle the home page
     */
    public function home()
    {
        return view('pages.home');
    }
    
    /**
     * Handle about page request
     * 
     * @param \Theme\Modules\Posts $posts The posts model class.
     * @param \WP_Post $post The about page WP_Post instance.
     * 
     * @return string
     * */
    public function about(Posts $posts, $post)
    {
        return view('pages.about', [
            'pages' => $post,
            'members' => meta('collaborators', $post->ID),
            'latest_articles' => $posts->find(['posts_per_page' => 2])->get()
            ]);
    }
    
    /**
     * Handle the help/F&Q page request.
     * 
     * @param \Anpu\Faqs\Models\Faqs $faqs The Faqs model.
     * @param \WP_Post $post The help page WP_Post.
     * 
     * @return string
     * */
     
     public function help(Faqs $faqs, $post)
     {
         return view('pages.help', [
             'page' => $post,
             'faqs' => $faqs->find(['posts_per_page' => 25])->get()
             ]);
     }
    
    
}