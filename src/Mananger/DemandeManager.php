<?php

namespace App\Manager;

use App\Entity\Demande;

//namespace App\Manager\BaseManager;

//use App\Manager\BaseManager;
//use App\Mapping\HistoriqueEbizMapping;


class DemandeManager extends BaseManager
{
    //public static function newInstance() { return new self; }
    public function listdemande(){
        $demande = $this->em->getRepository(Demande::class)->demande(1);
        return $demande;
    }


}