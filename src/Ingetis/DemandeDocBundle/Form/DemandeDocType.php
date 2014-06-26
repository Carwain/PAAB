<?php

namespace Ingetis\DemandeDocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeDocType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civ')
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adr1')
            ->add('adr2')
            ->add('cp')
            ->add('ville')
            ->add('telfixe')
            ->add('telportable')
            ->add('email')
            ->add('idniveau')
            ->add('niveauvalide')
            ->add('idformation1')
            ->add('tformation1')
            ->add('aformation1')
            ->add('idformation2')
            ->add('tformation2')
            ->add('aformation2')
            ->add('etablissement')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ingetis\DemandeDocBundle\Entity\DemandeDoc'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ingetis_demandedocbundle_demandedoc';
    }
}
