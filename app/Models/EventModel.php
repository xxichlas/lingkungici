<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    // ...
    protected $table      = 'events';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'category', 'description', 'date', 'admission', 'link', 'image'];

    public function getEvent($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
