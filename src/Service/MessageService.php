<?php

namespace App\Service;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MessageService
{
    private $params;
    private $mailService;
    private $entityManager;
    private $contactRepository;

    public function __construct(
        MailService $mailService,
        ParameterBagInterface $params,
        ContactRepository $contactRepository,
        EntityManagerInterface $entityManager)
    {
        $this->params = $params;
        $this->mailService = $mailService;
        $this->entityManager = $entityManager;
        $this->contactRepository = $contactRepository;
    }

    public function messages(): array
    {
        return $this->contactRepository->findAll();
    }

    public function send(Request $request): void
    {
        $contact = new Contact();

        $req = $request->request;
        $email = $req->get('email');
        $gender = $req->get('gender');
        $lastname = $req->get('lastname');
        $firstname = $req->get('firstname');

        $contact
            ->setEmail($email)
            ->setGender($gender)
            ->setLastname($lastname)
            ->setFirstname($firstname)
            ->setSubject($req->get('subject'))
            ->setMessage($req->get('message'))
        ;

        $this->entityManager->persist($contact);
        $this->entityManager->flush();

        $messageUser = nl2br("<html><body>Bonjour $gender $firstname $lastname,\n\nNous avons bien reçu votre message, nous allons reprendre contact avec vous dans les plus brefs délais\n\n Cordialement</body></html>");
        $messageAdmin = nl2br("<html><body>Bonjour,\n\nVous avez reçu un message\n\n Cordialement</body></html>");

        $this->mailService->sendMail($email, 'Message reçu', $messageUser);
        $this->mailService->sendMail($this->params->get('admin_email'), 'Nouveau message', $messageAdmin);
    }
}
