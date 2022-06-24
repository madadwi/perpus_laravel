<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')->orWhere('nis', 'like', '%' . $search . '%')->orWhere('rombel', 'like', '%' . $search . '%')->orWhere('rayon', 'like', '%' . $search . '%');
        });
    }
}
