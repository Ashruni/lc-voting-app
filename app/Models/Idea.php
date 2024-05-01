<?php

namespace App\Models;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory,Sluggable;
    protected $guarded=[];
    public function user(){
        $this->belongsTo(User::class);
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

}



