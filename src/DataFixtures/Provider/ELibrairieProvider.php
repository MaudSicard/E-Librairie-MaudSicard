<?php

namespace App\DataFixtures\Provider;

class ELibrairieProvider
{
    private $books = [
        'Colomba',
        'L\'écume des jours', 
        'La métamorphose', 
        'La vénus d\'Ille',
        'Le colonel Chabert',
        'Le vieil homme et la mer',
        'Les trois Mousquetaires',
        'Pierre et Jean',
        'Un coeur simple',
        'A l\'Ouest, rien de nouveau',
        'Effroyables jardins',
        'Je t\'écris de Berlin',
        'L\'ami retrouvé',
        'L\'enfant d\'Hiroshima', 
        'La chambre des officiers',
        'Le journal d\'Adèle',
        'Le silence et la mer',
        'Matin brun',
        'Mon ami Frédéric',
        'Une balle perdue',
        'Voyage à Pittchipoï',
        'Escadrille 80',
        'J\'ai quinze ans et je ne veux pas mourir',
        'Journal d\'Anne Franck',
        'L\'enfant noir',
        'La guerre des enfants',
        'Paroles de poilus',
        'Si c\'est un homme',
        'Tanguy',
        'Vipère au poing',
        'Béni ou la paradis privé',
        'Dans la peau d\'un noir',
        'L\'Oasis',
        'La fille de 3èm',
        'La peine de mort',
        'La monde d\'en haut',
        'Le racisme expliqué à ma fille',
        'Lettres d\'amour de 0 à 10 ans',
        'Mon bel oranger',
        'Paroles de la Shoah',
        'Quand on est mort, c\'est pour la vie',
        'Tout contre Léo',
        'Un été algérien',
        'Une vie de boy',
        'Des fleurs pour Algernon',
        'La machine à explorer le temps',
        'La nuit de temps',
        'La planète des singes',
        'Le meilleur des Mondes',
        'Le passeur',
        'Les enfants de Noé',
        'No pasaran, le jeu',
        'Virus L.I.V 3 ou la mort des livres',
        'Cannibale',
        'L\'ordinateur',
        'Le chien des Baskerville',
        'Le mystère de la chambre jaune',
        'Antigone',
        'La cantatrice chauve',
        'La guerre de Troie n\'aura pas lieu',
        'La machine infernale',
        'Le roi se meurt',
        'Le voyageur sans bagage',
        'Pour un oui ou pour un non',
        'Ubu roi',
        'Un chapeau de paille d\'Italie',
        'Oedipe-roi',
        'Cyrano de Bergerac',
        'Les caprices de Marianne',
        'Le Cid',
        'La liberté en poésie',
        'Maus',
        'Persepolis'
        ];

    private $genders = [
        'Roman classique',
        'Récit historique',
        'Autobiographie',
        'Récit de société',
        'Science-fiction',
        'Polar',
        'Théâtre',
        'Poésie',
        'Album', 
        'Fantastique'
    ];

    private $editors = [
       'Folio',
       'Presse pocket',
       'Point',
       'J\'ai lu', 
       'Livre de poche', 
       'Acte Sud',
       'Robert Laffont',
       'Albin Michel',
       'Broché'
    ];


    /**
     * Retourne un genre au hasard
     */
    public function bookGender()
    {
        return $this->genders[array_rand($this->genders)];
    }

    /**
     * Retourne un titre de livre au hasard
     */
    public function bookTitle()
    {
        return $this->books[array_rand($this->books)];
    }

    /**
     * Retourne un éditeur au hasard
     */
    public function bookEditor()
    {
        return $this->editors[array_rand($this->editors)];
    }

}
