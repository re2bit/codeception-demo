<?php

namespace AppBundle\Service;
class BlogService
{

    public function getBlogs()
    {
        return [
            'name'=>'Blog 1',
            'description'=>'nice Blog'
        ];
    }
}