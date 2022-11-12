<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EntityManagerInterface $em, ProductRepository $productRepository)
    {
        //count([])
        //find(id)
        //findBy([],[])
        //findOneBy([], [])
        //findAll()
        // $products = $productRepository->findOneBy(['price' => 1500]);
        //dump($products);
        //$productRepository = $em->getRepository(Product::class);
        /* $product = new Product();
        $product
            ->setName('Table en métal')
            ->setPrice(3000)
            ->setSlug('table-en-metal');

        $em->persist($product); ne se fait que quand l'entite n'existe pas en base de données
        $em->flush();*/
        /*$product = $productRepository->find(3);

        $em->remove($product);
        $em->flush();


        dd($product);*/

        $products = $productRepository->findBy([], [], 3);

        return $this->render('home.html.twig', [
            'products' => $products
        ]);
    }
}
