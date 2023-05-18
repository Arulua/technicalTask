<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// This is a model class called 'Entity' which reprents a row in the 'entities' table.
class Entity extends Model
{
    use HasFactory;

    // The $table property specifies the name of the table associated with this model
    protected $table ='entities';

    // The $fillable property lists the attributes that are mass assignable
    protected $fillable = ['title','description','date'];
}
