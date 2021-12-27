<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    use HasFactory;
    protected $table = 'employee_data';
    public $timestamps = false;
    protected $fillable = ['full_name', 'email','age','salary'];

}
