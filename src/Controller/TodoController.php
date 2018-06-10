<?php

namespace App\Controller;

use App\Entity\Todo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TodoController extends Controller
{
    /**
     * @Route("/", name="todo")
     */
    public function index()
    {

    	$todos = $this->getDoctrine()->getRepository(Todo::class)->findAll();

    	dump($todos);	

        return $this->render('todo/index.html.twig', [
            'controller_name' => 'TodoController',
            'todos' => $todos
        ]);
    }
}
