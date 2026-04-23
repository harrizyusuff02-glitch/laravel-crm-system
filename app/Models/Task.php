<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    protected $fillable = [
    'name',
    'description',
    'status',
    'due_date',
    'project_id'
    ];
}
