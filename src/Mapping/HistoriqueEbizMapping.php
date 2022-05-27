<?php

namespace App\Mapping;
use App\Entity\HistoriqueEbiz;
//use DateTime;

class HistoriqueEbizMapping
{
    public function mappingHistorique($data){
        $histo = new HistoriqueEbiz();

        //$params = array();
        
        $dateDay = new \DateTime('@'.strtotime('now'));
        $histo  ->setDate($dateDay)
                ->setDateFilter(isset($data['datefilter']) ?new \DateTime($data['datefilter']) : NULL)
                ->setEtat(isset($data['etat']) ? ($data['etat']) : false)
                ->setType(isset($data['type']) ? ($data['type']) : "")
                ->setAdresseIp(isset($data['adrIp']) ? ($data['adrIp']) : "")
                ->setTransaction(isset($data['trans']) ? ($data['trans']) : "")
                ->setDescription(isset($data['descrip']) ? ($data['descrip']) : "")
                ->setSignatureOracle(isset($data['oracleSign']) ? ($data['oracleSign']) : "")
                ->setSignatureAttach(isset($data['attachSign']) ? ($data['attachSign']) : "");
                //dd($params);
        return $histo;
    }


}
