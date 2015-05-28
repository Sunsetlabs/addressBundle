<?php

namespace Sunsetlabs\AddressBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddressType extends AbstractType
{
	protected $address_class;
	protected $form_fields;

	public function __construct($address_class, $form_fields)
	{
		$this->address_class = $address_class;
		$this->form_fields = $form_fields;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	foreach ($this->form_fields as $field) {
            $property = $field['property'];
            $label    = $field['label'];
    		$builder->add($property, null, array(
                'label'         => $label,
                'property_path' => $property,
                'constraints'   => array(new NotBlank())
            ));
    	}
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->address_class,
        ));
    }

    public function getName()
    {
        return 'address_type';
    }
}