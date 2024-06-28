<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskModel extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
    'description',
    ];

    public function isCompleted(){
        return $this->completed_at !== null;
    }
}
