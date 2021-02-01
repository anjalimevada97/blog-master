<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model 
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUser($query, $user)
    {
        return $query->where('user_id', $user);
    }
    
    public function scopeCategory($query, $category)
    {
        return $query->where('category_id', $category);
    }

    public function scopeDate($query, $start_date, $end_date)
    {
        return $query->whereBetween('created_at', [$start_date, $end_date]);
    }
    public function scopeApplyFilters($query, array $filters)
    {
        $filters = collect($filters);
        dd($filters);

        if ($filters->get('category_id')) {
            $query->category($filters->get('category_id'));
        }

        if ($filters->get('start_date') && $filters->get('end_date')) {
            $query->date($filters->get('start_date'), $filters->get('end_date'));
        }
        
    }
}
