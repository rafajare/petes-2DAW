<?php

namespace SPruebas\PRUEBASBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SPruebas\PRUEBASBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class DefaultController extends Controller
{
    public function formAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Escribe aquí');
        $task->setDueDate(new \DateTime('today'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class, array('label' => 'INSERTA ALGO: '))
            // If you use PHP 5.3 or 5.4 you must use
            // ->add('task', 'Symfony\Component\Form\Extension\Core\Type\TextType')
            ->add('dueDate', DateType::class, array('label' => 'ELIGE UNA FECHA: '))
            ->add('save', SubmitType::class, array('label' => 'CREAR TAREA'))
            ->getForm();
            
        

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    
    }
    
    public function indexAction()
    {
        
        
        //return $this->render('SPruebasPRUEBASBundle:Default:index.html.twig');
        return $this->render('SPruebasPRUEBASBundle:Default:index.html.twig');
    }
}
