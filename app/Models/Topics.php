<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Topics extends Model
{
    use HasFactory;

    protected $table = 'topics';
        //$tag->jobs
        public function blogPosts(){
            return $this->belongsToMany(blogPosts::class, table:'posts_topics', relatedPivotKey: "blog_posts_id");
        }


        public function getAllTopicPosts(): HasMany
        {
            return $this->hasMany(BlogPostTopics::class,'topics_id');
        }

        // public function blogPostsTopics(){
        //     return $this->belongsToMany(blogPosts::class, table:'posts_topics', relatedPivotKey: "topics_id");
        // }
}
