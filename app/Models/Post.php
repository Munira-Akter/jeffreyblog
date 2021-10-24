<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['author' , 'category'];

    public function scopeFilter($query, array $filter){

        if(($filter['search']) ?? false){
            $query->where('title' , 'LIKE' , '%' .request('search'). '%' )
            ->orWhere('body' , 'LIKE' , '%' . request('search') . '%');
            }

    }

    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function author(){
        return $this -> belongsTo(User::class, 'user_id');
    }
}
