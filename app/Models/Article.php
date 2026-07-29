<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $fillable = [
    'title',
    'subtitle',
    'content',
    'image',
];

    public function imageUrl() {

        // dd('Sono dentro imageUrl');

        if ($this->image) {
        return Storage::url($this->image);
    }

        return Storage::url('images/default.jpg');


    }






}
