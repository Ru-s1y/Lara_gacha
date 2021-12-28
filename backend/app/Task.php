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

    public function show($id) {
        return $this->find($id);
    }

    public function store($inputs) {
        return $this->create($inputs);
    }

    public function updateTask($inputs) {
        return $this->where('id', $inputs->id)->update($inputs);
    }

    public function destroyTask($id) {
        return $this->delete();
    }
}
