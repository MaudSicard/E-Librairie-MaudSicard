<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Group;
use App\Entity\Author;
use App\Entity\Editor;
use App\Entity\Gendre;
use App\Repository\BookRepository;
use App\Repository\GroupRepository;
use App\Repository\AuthorRepository;
use App\Repository\EditorRepository;
use App\Repository\GendreRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('book', EntityType::class, [
                'class'=> Book::class, 
                'label'=> 'livre',
                'choice_label' => 'title',
                'query_builder' => function (BookRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->orderBy('b.title', 'ASC');
                },        
                'multiple'=> false,
            ])
            ->add('author', EntityType::class, [
                'class' => Author::class,
                'label'=> 'nom de l\'auteur',
                'choice_label' => 'lastname',
                'query_builder' => function (AuthorRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.lastname', 'ASC');
                },        
                'multiple' => false,
            ])
            ->add('editor', EntityType::class, [
                'class' => Editor::class,
                'choice_label' => 'name',
                'label'=> 'éditeur',
                'query_builder' => function (EditorRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->orderBy('e.name', 'ASC');
                },        
                'multiple' => false, 
            ])
            ->add('gender', EntityType::class, [
                'class' => Gendre::class,
                'label'=> 'genre',
                'choice_label' => 'name',
                'query_builder' => function (GendreRepository $er) {
                    return $er->createQueryBuilder('g')
                        ->orderBy('g.name', 'ASC');
                },        
                'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Group::class,
        ]);
    }
}
