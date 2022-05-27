<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use App\Manager\HistoriqueEbizManager;
use App\Manager\DemandeManager;

class ConsommatonController extends AbstractController
{
    private $demandeManager;

    public function __construct(DemandeManager $demandeManager)
    {
        $this->demandeManager = $demandeManager;
        
    }
    
    /**
     * @Rest\Post("/exeHistoriqueEbiz", name="exeHistoriqueEbiz")
     */
    public function exeHistoriqueEbiz(Request $request, HistoriqueEbizManager $HistoriqueEbizManager)
    {
        // $data =json_decode( $request->getContent(), true);
        // $content = $HistoriqueEbizManager->addHistorique($data);
        
        // dd($content);
        //return $this->sendResponse($content);

        
    }


    /**
     * @Rest\Post("/demande", name="demande")
     */
    public function demandelist(){
        $this->demandeManager->listdemande();
    }

    
}
