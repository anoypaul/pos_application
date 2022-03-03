<?php namespace App\Models;

use CodeIgniter\Model;

class ArrayTestModel extends Model{
    protected $table = 'array_json';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'details',
    ];
}

?>