<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'title','status','user_id'];
    protected $table = 'todo';
    public $timestamps = false;
}
