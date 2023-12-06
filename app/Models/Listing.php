<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // Allow save in DB

    protected $fillable = ['title', 'company', 'location' , 'website' , 'tags', 'description', 'email'];

    public function scopeFilter($query, array $filters) {

        // filter by tags

        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') .'%');
        }

        // search by title / description / tags

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') .'%')
                ->orWhere('description', 'like', '%' . request('search') .'%')
                ->orWhere('tags', 'like', '%' . request('search') .'%');
        }
    }
}
