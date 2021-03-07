<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Book;
use App\Entity\User;
use App\Entity\Group;
use App\Entity\Author;
use App\Entity\Editor;
use App\Entity\Gendre;
use App\Entity\Review;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\Provider\bookDbProvider;
use App\DataFixtures\Provider\ELibrairieProvider;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Classe de Fixture
 * à exécuter avec la commande
 * `bin/console doctrine:fixtures:load`
 */
class AppFixtures extends Fixture
{
    // On règle nos valeurs ici
    const NB_EDITOR = 9;
    const NB_AUTHOR = 25;
    const NB_USER = 30;
    const NB_GENDRE = 10;
    const NB_REVIEW = 3 * self::NB_BOOK;
    const NB_BOOK = 73;


    private $passwordEncoder;
    private $slugger;


    public function __construct(UserPasswordEncoderInterface $passwordEncoder, SluggerInterface $slugger)
    {
       $this->passwordEncoder = $passwordEncoder;
       $this->slugger = $slugger;
    }
    
    public function load(ObjectManager $manager)
    {

        //Instanciation de Faker
        $faker = Faker\Factory::create('fr_FR');

        // Ajout de MovieDbProvider à $faker pour profiter de la fonction unique()
        $faker->addProvider(new ELibrairieProvider());

        $user = new User();
        $user->setEmail('user@user.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'user'));
        $user->setRoles(["ROLE_USER"]);
        $user->setUsername('User');
        $manager->persist($user);

        $admin = new User();
        $admin->setEmail('maud.sicard@gmail.com');
        $admin->setPassword($this->passwordEncoder->encodePassword($admin, 'mau!23+SIC'));
        $admin->setRoles(["ROLE_ADMIN"]);
        $admin->setUsername('Maud');
        $manager->persist($admin);

        $manag = new User();
        $manag->setEmail('manager@manager.com');
        $manag->setPassword($this->passwordEncoder->encodePassword($manag, 'manager'));
        $manag->setRoles(["ROLE_MANAGER"]);
        $manag->setUsername('Manager');
        $manager->persist($manag);

         $gendersList = [];
         $editorsList= [];
         $booksList= []; 
         $reviewsList= [];
         $authorsList= [];
         $usersList = [];
         
 
         for ($i=1; $i <= self::NB_GENDRE; $i++) {
             $random = mt_rand(1, 300);
             $gender = new Gendre();
             $name = $faker->unique()->bookGender();
             $gender->setName($name);
             $gender->setImage('https://picsum.photos/id/'.$random.'/200/200');
             $gender->setSlug($this->slugger->slug($name));
             $gender->setCreatedAt(new \DateTime());
         
             // attention on push à partir de l'index O
             $gendersList[] = $gender;
 
             $manager->persist($gender);
         }
 

         for ($i=1; $i <= self::NB_AUTHOR; $i++) { 
             $random = mt_rand(1, 300);
             $author = new Author();
             $author->setFirstname($faker->firstName());
             $lastname = $faker->lastName();
             $author->setLastname($lastname);
             $author->setContent($faker->unique()->realText($maxNbChars = 500, $indexSize = 2));
             $author->setImage('https://picsum.photos/id/'.$random.'/200/200');
             $author->setSlug($this->slugger->slug($lastname));
             $author->setCreatedAt(new \DateTime());
 
             $authorsList[] = $author;
 
             $manager->persist($author);
         }

 
         for ($i=1; $i <= self::NB_EDITOR; $i++) {
             $random = mt_rand(1, 300);
             $editor = new Editor();
             $name = $faker->unique()->bookEditor();
             $editor->setName($name);
             $editor->setAdress($faker->unique()->address());
             $editor->setImage('https://picsum.photos/id/'.$random.'/200/200');
             $editor->setSlug($this->slugger->slug($name));
             $editor->setCreatedAt(new \DateTime());
         
             // attention on push à partir de l'index O
             $editorsList[] = $editor;
 
             $manager->persist($editor);
         }
 
     
         for ($i=1; $i <= self::NB_BOOK; $i++) {
            $random = mt_rand(1, 300);
             $book = new Book();
             $book->setTitle($faker->unique()->bookTitle());
             $book->setContent($faker->unique()->realText($maxNbChars = 400, $indexSize = 2));
             $book->setImage('https://picsum.photos/id/'.$random.'/200/200');
             $book->setPrice($faker->randomFloat(2, 3, 15));
             $book->setPublishedAt($faker->dateTimeBetween());
             $book->setCreatedAt(new \DateTime());
 
             $booksList[] = $book;
             $group = new Group();
             $group->setCreatedAt(new \DateTime());
             
             $group->setAuthor($authorsList[mt_rand(0, self::NB_AUTHOR - 1)]);
             $group->setBook($book);
             $group->setEditor($editorsList[mt_rand(0, self::NB_EDITOR - 1)]);
             $group->setGender($gendersList[mt_rand(0, self::NB_GENDRE - 1)]);
 
             $manager->persist($book);
             $manager->persist($group);
         }

         for ($i=1; $i <= self::NB_USER; $i++) 
         {
            $user = new User();
            $user->setEmail($faker->unique()->email());
            $user->setPassword($faker->unique()->password(2, 16));
            $user->setUsername($faker->unique()->username());
            $user->setCreatedAt(new \DateTime());
            $user->setRoles(['ROLE_USER']);

            $usersList[] = $user;

            $manager->persist($user);
         }

 
         for ($i=1; $i <= self::NB_REVIEW; $i++) {
             
             $review = new Review();
             $review->setContent($faker->realText());
             $review->setPublishedAt(new \DateTime());
             $review->setCreatedAt(new \DateTime());
 
             $reviewsList[] = $review;
 
             $review->setBook($booksList[mt_rand(0, self::NB_BOOK - 1)]);
             $review->setUser($usersList[mt_rand(0, self::NB_USER - 1)]);
             
             $manager->persist($review);
         }
       
        $manager->flush();
    }

}


