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
     * Function listAction
     * Renders the initial view, if nobody is logged in
     * and no action was triggered
     */
    public static function listAction()
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
        View\Listview::showListView($allWrappedPosts);

    }


    /**
     * Function adminAction
     * checks if Admin wants to login or logout
     * @param string $action [can be login or logout]
     */
    public static function adminAction($action='')
    {
        if($action=='login'){
            /*TODO: Implement function for loginCheck
            if function result is TRUE, show AdminView with Login Status*/
        }
        $allWrappedPosts='';    //all html wrapped posts
        $header = View\HtmlFragments::headerHome();   //HTML Header of the frontpage template
        $postsSortedByDate = Model\Blogposts::getAllPosts();
        foreach($postsSortedByDate as $row){
            $title = $row['title'];
            $date = date("F j, Y, g:i a",$row['tstamp']);
            $excerpt = preg_replace( '/[^ ]*$/', '', substr( $row['text'], 0, LENGTH ) ) . ' ...';
            $allWrappedPosts .= View\HtmlFragments::wrapListPost($title, $excerpt, $date);
        }
        View\Adminview::showAdminView($allWrappedPosts);
    }


}