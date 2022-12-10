<?php

namespace App;

class Article
{
    public $title;

    public function getSlug()
    {
        $slug = trim($this->title);

        $slug = preg_replace('/\s+/', '_', $slug);
        
        $slug = preg_replace('/[^\w]+/', '', $slug);

        return $slug;
    }
}
