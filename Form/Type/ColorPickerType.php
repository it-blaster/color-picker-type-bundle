<?php

namespace Fenrizbes\ColorPickerTypeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Regex;

class ColorPickerType extends AbstractType
{
    public function getName()
    {
        return 'color_picker';
    }

    public function getParent()
    {
        return 'text';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'picker_options' => array(
                    'color'    => false,
                    'mode'     => 'hsl',
                    'hide'     => true,
                    'border'   => true,
                    'target'   => false,
                    'width'    => 200,
                    'palettes' => false,
                    'controls' => array(
                        'horiz' => 's',
                        'vert'  => 'l',
                        'strip' => 'h'
                    )
                ),
                'constraints' => array(
                    new Regex(array(
                        'pattern' => '/\#[\da-f]{6}/i'
                    ))
                )
            ))
        ;
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['picker_options'] = $options['picker_options'];
    }
}