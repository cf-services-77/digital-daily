<?php

namespace App\Controller;

use App\Service\MessageService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/message', name: 'app_message')]
final class MessageController extends AbstractController
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    #[Route('s', name: 's')]
    public function index(): Response
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
        ]);
    }

    #[Route('-envoier', name: '_send')]
    public function send(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $this->messageService->send($request);
        }

        return $this->redirectToRoute('app_home');
    }
}
