<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberActoin()
    {
        $number = random_int(0,100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
