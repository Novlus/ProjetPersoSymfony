<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $logger;
    protected $calculator;

    public function __construct(LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig)
    {
        dump($slugify->slugify("Hello World"));
        dump($twig);
        $this->logger = $logger;
        $this->calculator = $calculator;
    }





    /**
     * @Route("/hello", name="hello", methods={"GET","POST"})
     */
    public function hello()
    {
        return new Response("Hello World");
    }

    /**
     * @Route("/hello/{name}", name="hello_name", methods={"GET","POST"})
     */
    public function helloName($name)
    {
        $this->logger->info("Mon message de log");
        $tva = $this->calculator->calcul(100);
        dump($tva);
        return new Response("Hello $name");
    }
}
