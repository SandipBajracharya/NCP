<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectionCommittee extends Model
{
    public function getPresentStatusAttribute()
    {
        if($this->status == 0)
        {
            return ('Inactive');
        }
        elseif($this->status == 1)
        {
            return ('Active');
        }
    }

    public function getStatusColorAttribute()
    {
        if($this->status == 0)
        {
            return ('text-danger');
        }
        elseif($this->status == 1)
        {
            return ('text-success');
        }
    }
}
