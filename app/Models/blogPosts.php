<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class blogPosts extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'intro',
        'body',
        'user_id',
        'category_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsTo(Categories::class);
    }

   public function topics(){
        return $this->hasMany(BlogPostTopics::class,foreignKey:"blog_posts_id");
    }

    public function blogPostsTopics(){
        return $this->belongsToMany(BlogPostTopics::class, table:'posts_topics', foreignPivotKey: "blog_posts_id");
    }


    /**
     * Get the comments for the blog post.
     */
    public function getAllPostTopics(): HasMany
    {
        return $this->hasMany(BlogPostTopics::class,'blog_posts_id');
    }
    
       /**
     * Get the comments for the blog post.
     */
    // public function comments(): HasMany
    // {
    //     return $this->hasMany(Topics::class);
    // }

    // public function category(){
    //     return $this->belongsTo(Categories::class);
    // }

    // public function authorPosts(){
    //     return $this->hasMany(User::class);
    // }
}
