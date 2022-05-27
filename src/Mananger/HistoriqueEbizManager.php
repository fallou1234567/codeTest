<?php

namespace App\Manager;
//namespace App\Manager\BaseManager;

//use App\Manager\BaseManager;
use App\Mapping\HistoriqueEbizMapping;


class HistoriqueEbizManager extends BaseManager
{

    private $histoMap;
    public function __construct(HistoriqueEbizMapping $histoMap)
    {
        $this->histoMap = $histoMap;
    }

    public function addHistorique($data) {
       
        $cod = $data['code']; $sig = $data['signature']; $datr = $data['date_request'];
        $datF = $data['date_filter']; $idMat = $data['materiel_id']; $cr = $data['cr_requestor'];

        $historique =  $this->histoMap->mappingHistorique($data);

        $this->em->persist($historique);
        $this->em->flush();

       return [$this->CODE_KEY => "500", "message"=> "send with succes"];
    }
    


    

    public function v1() {
        if(!isset($sig) || !isset($datR) || !isset($cod)){
            $data['descrip'] = "SOME OF THE SECURITY PARAMETRES ARE MISSING";
            //$this->addHistorique($data);
            return [
                $this->CODE_KEY => "ERROR SECURITY OR FILTER PARAMETERS", 
                $this->SMS=> "Veuillez renseigner le token, la date, la signature et le code SVP"
            ];
        }
    }

    public function v2 (){
        if((isset($sig) && isset($datR) && isset($cod) && (isset($datF) || isset($idMat) || isset($cr)))){
            $data['descrip'] = "SOME OF THE SECURITY PARAMETRES ARE MISSING";
            return [
                $this->CODE_KEY => "ERROR SECURITY OR FILTER PARAMETERS", 
                $this->SMS=> "Veuillez renseigner le token, la date, la signature et le code SVP"
            ];
        }
    }
}