<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\User;
use App\Entity\Review;
use App\Repository\BookRepository;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextType::class, [
                'label'=> 'contenu du commentaire'
            ])
            
            ->add('book', EntityType::class, [
                'class'=> Book::class, 
                'label'=> 'titre',
                'choice_label' => 'title',
                'query_builder' => function (BookRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->orderBy('b.title', 'ASC');
                },        
                'multiple'=> false,
            ])
            ->add('user', EntityType::class, [
                'class'=> User::class,
                'label'=> 'utilisateur',
                'choice_label' => 'username',
                'query_builder' => function (UserRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.username', 'ASC');
                },        
                'multiple'=> false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
