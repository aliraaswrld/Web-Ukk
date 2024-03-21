<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
     protected $table = 'foto';

     protected $fillable = [
        'judulFoto', 'deskripsiFoto','tglUnggah', 'lokasiFile'
     ];

     public function user(){
        return $this->belongsTo(User::class);
     }
}