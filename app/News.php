<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title', 'text', 'image'];
}
