<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface; 

/**
 * 
 */
class ClassName extends abstractType
{
	
	public function builForm(FormBuilderInterface $builder, array $option){
		$builder
			->add('DureeMin',ChoiceType::class,[
				'choices'=>[
					'label'=> 'noir'
				]
			])
			->add('recherche',SubmitType::class)
		;
	}
}