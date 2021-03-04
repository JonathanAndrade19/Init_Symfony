<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MamiferoController
{
    public function homepage() 
    {
        return new Response('<h2>Olá Mundo!</h2>');
    }
}