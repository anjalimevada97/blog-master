<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->hasMany(Post::class);
    }
 
    public function scopeCategory($query, $category)
    {
        return $query->where('id', $category);
    }

    public function scopeDate($query, $start_date, $end_date)
    {
        return $query->whereBetween('created_at', [$start_date, $end_date]);
    }
    
    public function scopeApplyFilters($query, array $filters)
    {
        $filters = collect($filters);
        //dd($filters);

        if ($filters->get('category')) {
            $query->category($filters->get('category'));
        }

        if ($filters->get('start_date') && $filters->get('end_date')) {
            $query->date($filters->get('start_date'), $filters->get('end_date'));
        }
        
    }
}
