<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'content',
        'person_in_change'
    ];

    public function getTaskAll() {
        return $this->all();
    }

    public function storeTask($request) {
        return $this->create($request->all());
    }
}
