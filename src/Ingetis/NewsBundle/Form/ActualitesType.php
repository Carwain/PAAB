<?php

namespace Ingetis\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActualitesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('event')
            ->add('idSection')
            ->add('idSousType')
            ->add('idUserActualite')
            ->add('userActualite')
            ->add('idTopicForum')
            ->add('titreActualite')
            ->add('artisteActualite')
            ->add('featuringActualite')
            ->add('titreSonActualite')
            ->add('resumeActualite')
            ->add('mediaActualite')
            ->add('texteActualite')
            ->add('vuesActualite')
            ->add('dateActualite')
            ->add('photoActualite')
            ->add('tags')
            ->add('nbrComs')
            ->add('noteActualite')
            ->add('favori')
            ->add('dead')
            ->add('exclu')
            ->add('lastIdMemberFav')
            ->add('lastIpActualite')
            ->add('lastVisit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ingetis\NewsBundle\Entity\Actualites'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ingetis_newsbundle_actualites';
    }
}
