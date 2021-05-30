<?php


namespace Blog\Model;

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'my_db');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('LENGTH',(int)25);   //How many chars

class Blogposts
{


    /**
     * Get all posts sorted by tstamp
     * @return array
     */
    public static function getAllPosts(){
        //DB COnnection
        $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
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