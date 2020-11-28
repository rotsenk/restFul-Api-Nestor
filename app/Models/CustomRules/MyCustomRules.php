<?php
    namespace App\Models\CustomRules;
    use App\Models\ProfesroModel;
    use App\Models\GradoModel;

    class MyCustomRules{
        //valida profesor para grado
        public function is_valid_profesor(int $id): bool{
            $model = new ProfesorModel();
            $profesor = $model->find($id);

            return $profesor == null ? false:true;

        }

        //valifa de grado para alumno
        public function is_calid_grado(int $id){
            $model = new GradoModel();
            $grado = $model->find($id);

            return $grado == null ? false : true;

        }

    }
?>