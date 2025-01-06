<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPostTopics extends Model
{
    use HasFactory;


    protected $table = 'posts_topics';


    public function blogPostsTopics(){
        return $this->hasMany(blogPosts::class,foreignKey: "blog_posts_id");
    }

       /**
     * Get the comments for the blog post.
     */
    // public function topics(): HasMany
    // {
    //     return $this->hasMany(Topics::class,foreignKey:'topics_id');
    // }
    
}
