<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketFormType extends AbstractType
{
    public function buildForm(
        FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ticketTitle')
           /* ->add('status')*/
         /*   ->add('level')*/
         /*   ->add('date')*/
            ->add('content')
         /*   ->add('counter')*/
        /*    ->add('prioritylevel')
            ->add('users')
        */;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }





}
