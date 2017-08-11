<?php
class Model_Api extends Model
{
    var $url = 'http://localhost:3000/stories';

    function __construct() {
        require_once 'libs/rest_curl.php';
    }

    function add_story($title, $body, $image, $category = null)
    {

        $data =
            array(
                'title'       => $title,
                'body'        => $body,
                'image'       => $image,
                'category_id'    => $category
            );


        $result = RestCurl::post($this->url, $data);

        return $result['data'];

    }

    function get_stories()
    {

        $stories = RestCurl::get($this->url);


        return (array)$stories['data'];
    }



}