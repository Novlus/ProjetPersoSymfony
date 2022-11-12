<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    protected $twig;

    public function __construct()
    {
    }





    /**
     * @Route("/hello/{name?World}", name="hello_name", methods={"GET","POST"})
     */
    public function helloName($name = "World")
    {
        return $this->render('hello.html.twig', [
            'name' => $name
        ]);
    }

    /**
     * @Route("/example" , name="example", methods={"GET","POST"})
     */
    public function example()
    {
        return $this->render('example.html.twig', ['age' => 33]);
    }

    /* protected function render(string $path, array $variables = [])
    {
        $html = $this->twig->render($path, $variables);


        return new Response($html);
    }*/
}
