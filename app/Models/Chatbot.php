<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatbot extends Model
{
    use HasFactory;
    protected $table = 'chatbots';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
		'queries',
		'replies',
	];
}
