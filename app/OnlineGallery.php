<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineGallery extends Model
{
    public function getGalleryTypeAttribute()
    {
        if($this->radio == 1)
        {
            return ('Photo');
        }
        elseif($this->radio == 2)
        {
            return ('Video');
        }
        else{
            return ('Audio');
        }
    }
}
