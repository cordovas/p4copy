<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function messages()
    {
        return $this->belongsToMany('App\Message')->withTimestamps();
    }

    public static function getForCheckboxes()
    {
        $tags = self::orderBy('name')->get();

        $tagsForCheckboxes = [];

        foreach ($tags as $tag) {
            $tagsForCheckboxes[$tag['id']] = $tag->name;
        }

        return $tagsForCheckboxes;
    }
}
