<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_emprendedor extends Model
{
    use HasFactory;

    protected $fillable = ['inversionistas_id','emprendedors_id']; 

    
}
