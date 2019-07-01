<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

  

class Post extends Model

{

    use SoftDeletes;

  


  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = ['title', 'summary', 'body'];

   

    /**

     * The has Many Relationship

     *

     * @var array

     */

    public function comments()

    {

        return $this->hasMany(Comment::class)->whereNull('parent_id');

    }

}