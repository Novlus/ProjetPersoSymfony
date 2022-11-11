<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function index()
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);
        dd("Ca fonctionne");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET","POST"})
     */


    public function test(Request $request, $age)
    {
        //$age = $request->attributes->get('age');

        /*$age = 0;
        if (!empty($_GET['age'])) {
            $age = $_GET['age'];
        }*/
        return new Response("Vous avez $age ans");
    }
}
