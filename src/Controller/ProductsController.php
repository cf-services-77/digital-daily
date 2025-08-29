<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/nos-produits', name: 'app_products')]
final class ProductsController extends AbstractController
{
    #[Route('', name: '')]
    public function index(): Response
    {
        return $this->render('products/index.html.twig');
    }

    #[Route('-erp-transport', name: '_erp_transport')]
    public function erpTransport(): Response
    {
        return $this->render('products/erp-transport.html.twig');
    }
}
