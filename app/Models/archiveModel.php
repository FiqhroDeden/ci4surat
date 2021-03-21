<?php

namespace App\Models;

use CodeIgniter\Model;

class archiveModel extends Model
{
    protected $table = 'document';
    protected $useTimestamps = true;

    public function getarchive()
    {
        return $this->findAll();
    }
}
