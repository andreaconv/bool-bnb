<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

        // Relazione con l'appartamento
        public function apartment(){
            return $this->belongsTo(Apartment::class);
        }


    protected $fillable = [
        'image_path'
    ];
}
