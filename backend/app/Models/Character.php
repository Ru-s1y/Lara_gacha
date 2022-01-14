<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function getAll() {
        return $this->all();
    }

    public function getCharacter($id) {
        return $this->find($id);
    }
}
