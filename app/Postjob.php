<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postjob extends Model
{
    protected $table="postjobs";
    protected $fillable=['name','email','post','image'];
}
