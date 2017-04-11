<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name', 'text', 'email', 'pdf', 'image'];
    protected $fillable = ['category_id'];
}
