<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // $guarded artinya mengizinkan semua request dari browser dan memasukkan ke dalam database
    // jika ada input dari user maka JANGAN GUNAKAN GUARDED
    // gunakan guarded hanya untuk input ADMIN
    // protected $guarded = [];

    // untuk pembatasan hanya list saja yg bisa di terima dan diijinkan masuk db
    // seperti model user
    protected $fillable = ['list'];
}
