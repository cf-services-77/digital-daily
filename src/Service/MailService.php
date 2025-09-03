<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MailService
{
    private $mailer;
    private $baseEmail;

    public function __construct(
        ParameterBagInterface $params,
        MailerInterface $mailerInterface)
    {
        $this->mailer = $mailerInterface;
        $this->baseEmail = $params->get('base_email');
    }

    public function sendMail(string $email, string $subject, string $message): Void
    {
        $mail = (new Email())
            ->from($this->baseEmail)
            ->to($email)
            ->subject($subject)
            ->html($message)
        ;

        $this->mailer->send($mail);
    }
}
