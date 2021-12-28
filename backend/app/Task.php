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

    public function store($request) {
        return $this->create($request->all());
    }

    public function update($request) {
        return $this->update($request->all());
    }
}
