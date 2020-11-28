<?php namespace App\Models;

use CodeIgniter\Model;

class GradoModel extends Model{
    protected $table            = 'grado';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';
    protected $allowedFields    =['grado','seccion','profesor_id'];

    protected $useTimestamps    = true;

    protected $createdField     = 'created_at';
    protected $updateField      = 'updated_at';

    protected $validationRules  = [
        'grado'            => 'required|alpha_space|min_length[3]|max_length[60]',
        
    ];

    protected $validationMessages = [
        'grado'        =>[
            'required'      => 'Ingrese los campos validos'
        ],
    ];

    protected $skipValidation = false;
}