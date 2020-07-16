<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender')
            ->add('firstName')
            ->add('lastName')
            ->add('address')
            ->add('country')
            ->add('passport')
            ->add('cv')
            ->add('profilPicture', FileType::class, [
                'mapped' => false
            ])
            ->add('currentLocation')
            ->add('dateOfBirth')
            ->add('placeOfBirth')
            ->add('email')
            ->add('confirmEmail')
            ->add('availability')
            ->add('shortDescription')
            ->add('note')
            ->add('jobSector')
            // ->add('candidateFile')
            // ->add('experience')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
