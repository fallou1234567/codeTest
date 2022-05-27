<?php

namespace App\Manager;


use Doctrine\ORM\EntityManagerInterface;


class BaseManager
{
    const CODE_KEY = "code";
    const SMS = "message";
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }



    // public function save($entity){
    //     $this->em->persist($entity);
    //     $this->em->flush();
    //     return new JsonResponse('succ');
    // }

    


}