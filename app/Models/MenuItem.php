<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function children()
    {
        return $this->hasMany(Self::class, 'parent_id', 'id')
            ->with('children');
    }

}
