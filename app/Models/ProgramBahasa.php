<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramBahasa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'program_bahasas';
}
