<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'state',
        'user_id',
        'due_date',
        'due_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
