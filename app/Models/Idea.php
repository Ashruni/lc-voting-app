<?php

namespace App\Models;
use App\Models\User;
use App\Models\Vote;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Idea extends Model
{
    use HasFactory,Sluggable;
    protected $guarded=[];
    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function link()
    {

        return '<a href="/ideas/' . $this->id . '">Link to Idea</a>';
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function idea(){
        return $this->belongsTo(Idea::class);
    }
    public function votes(){
        return $this->belongsTo(User::class,'votes');
    }



}



