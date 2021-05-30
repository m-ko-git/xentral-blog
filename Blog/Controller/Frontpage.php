<?php


namespace Blog\Controller;

use Blog\View;
use Blog\Model;

/**
 * Class Frontpage
 *
 * Controller Class for Frontpage Generation
 * @package Blog\Controller
 */
class Frontpage
{
    /*
     * Function listView
     * Shows the initial view when entering the blog
     */
    public static function listView()
    {
        $allWrappedPosts='';    //all html wrapped posts
        $header = View\HtmlFragments::headerHome();   //HTML Header of the frontpage template
        $postsSortedByDate = Model\Blogposts::getAllPosts();
        foreach($postsSortedByDate as $row){
            $title = $row['title'];
            $date = date("F j, Y, g:i a",$row['tstamp']);
            $excerpt = preg_replace( '/[^ ]*$/', '', substr( $row['text'], 0, LENGTH ) ) . ' ...';
            $allWrappedPosts .= View\HtmlFragments::wrapListPost($title, $excerpt, $date);
        }
        $pagination = '';
        $footer = View\HtmlFragments::footer();   //HTML Footer
        $frontPage = $header.$postsSortedByDate.$pagination.$footer;
        echo ($frontPage);
    }


}