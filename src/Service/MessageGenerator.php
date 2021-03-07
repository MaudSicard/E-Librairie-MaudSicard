<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * Classe (service) qui retourne un message au hasard
 */
class MessageGenerator
{    
    /**
     * Autre service dont dépend notre Service MessageGenerator
     * c'est le contenur de service qui va se charger de l'instancier pour nous
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getHappyMessage()
    {
        $messages = [
            'L\'enregistrement a bien été effectué !',
            'Merci pour l\'enregistrement !',
            'Parfait ! Les données sont à jour !',
            'Vous pouvez continuer, la base de donnée est à jour !'
        ];

        $randomMessage = $messages[array_rand($messages)];

        $this->logger->info('Message généré', ['message' => $randomMessage]);
        

        return $randomMessage;
    }

    public function getWelcome()
    {
        $messages = [
            'Bienvenue sur ma E-Librairie !',
            'Merci de venir visiter ce site !',
            'Bonjour et bienvenue !',
            'Merci de vous connecter, bonne navigation sur le site !'
        ];

        $randomMessage = $messages[array_rand($messages)];

       
        $this->logger->info('Message généré', ['message' => $randomMessage]);

        return $randomMessage;
    }

}