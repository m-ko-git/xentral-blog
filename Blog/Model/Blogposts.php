<?php


namespace Blog\Model;

define('DB_HOST', 'mysql5.jadedheart.de');
define('DB_NAME', 'db168495_5');
define('DB_USER', 'db168495_5');
define('DB_PASS', 'Xentral2021!');
define('LENGTH',(int)100);   //How many chars in

class Blogposts
{


    /**
     * Get all posts sorted by tstamp
     * @return array
     */
    public static function getAllPosts(){
        //DB COnnection
        $db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
        //fetch all posts
        $res = $db->select("SELECT * from blogposts WHERE deleted=0 ORDER by tstamp");
        foreach($res as $row){
           $out[]=$row;
        }
        return $out;
    }

    public static function getSinglePostByUid(){

    }

    public static function addPost(){

    }
}