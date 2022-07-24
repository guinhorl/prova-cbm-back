<?php

namespace App\Services\Experiencia;

use App\Models\Experiencia;
use App\Services\Experiencia\Interfaces\IExperienciaService;
use Exception;

class ExperienciaService implements IExperienciaService
{

    public function vincularExperiencia(array $experiencias)
    {
        try {
            $da_experiencia = (new Experiencia());
            foreach ($experiencias as $experiencia) {
                $da_experiencia->perfil_id = $experiencia['perfil_id'];
                $da_experiencia->empresa = $experiencia['empresa'];
                $da_experiencia->inicio = $experiencia['inicio'];
                $da_experiencia->fim = $experiencia['fim'];
                $da_experiencia->atual_trabalho = $experiencia['atual_trabalho'];
                $da_experiencia->cargo = $experiencia['cargo'];
                $da_experiencia->save();
            }
        } catch (Exception $erro) {
            return 'Erro no vincularExperiencia(): ' . $erro->getMessage();
        }

    }
}
