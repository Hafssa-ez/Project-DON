<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Mailer\MailerInterface;
// use Symfony\Component\Mime\Email;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Response;

// class EmailTestController extends AbstractController
// {
//     #[Route('/test-email', name: 'test_email')]
//     public function sendTestEmail(MailerInterface $mailer): Response
//     {
//         $email = (new Email())
//             ->from('noreplay.don@gmail.com') // Vérifiez que cette adresse est correcte
//             ->to('ezzouhafssa1@gmail.com') // Remplacez par votre email réel
//             ->subject('Test Symfony Mailer')
//             ->text('Ceci est un test d\'e-mail via Symfony Mailer et Gmail.');

//         $mailer->send($email);

//         return new Response('Email envoyé avec succès !');
//     }
// }

// Import Classess
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class EmailTestController extends AbstractController
{
    #[Route('/test-email', name: 'test_email')]
    public function sendTestEmail(MailerInterface $mailer): Response
    {
            // Create a Transport object
$transport = Transport::fromDsn('smtp://noreplay.don@gmail.com:ykexjaifcbuzmofy@smtp.gmail.com:587');

        $mailer = new Mailer($transport);
        $email = (new Email())
            ->from('noreplay.don@gmail.com') // Vérifiez que cette adresse est correcte
            ->to('ezzouhafssa1@gmail.com') // Remplacez par votre email réel
            ->subject('Test Symfony Mailer')
            ->text('Ceci est un test d\'e-mail via Symfony Mailer et Gmail.');

        $mailer->send($email);

        return new Response('Email envoyé avec succès !');
    }
}