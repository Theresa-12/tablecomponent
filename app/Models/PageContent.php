<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;
    protected $fillable = ['Title', 'description', 'image-url','outcomes','projects','Days','schedule-Time'];
    public $timestamps = false;
    protected $table = 'page_contents';

}
