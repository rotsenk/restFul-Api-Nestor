<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model{
    protected $table            = 'estudiante';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';
    protected $allowedFields    =['nombre','apellido','dui','genero','carnet','grado_id'];

    protected $useTimestamps    = true;

    protected $createdField     = 'created_at';
    protected $updateField      = 'updated_at';

    protected $validationRules  = [
        'nombre'            => 'required|alpha_space|min_length[3]|max_length[75]',
        'apellido'          => 'required|alpha_space|min_length[3]|max_length[75]',
        'genero'            => 'required|alpha_space|min_length[1]|max_length[1]',
        'carnet'            => 'required|alpha_numeric|min_length[9]|max_length[9]|"/^(u|U)20[1|2]{1}[0-9]{5}+$/"'
    ];

    protected $validationMessages = [
        'genero'        =>[
            'required'      => 'Solo se admite un caracter'
        ],

        'carnet'        =>[
            'required'      => 'Solo se admite formato correcto de carnet u20######'
        ],
    ];

    protected $skipValidation = false;
}












?>