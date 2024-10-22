<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StartController extends AbstractController
{
    //ruta creada automaticamente al ejecuatar el comando de creacion del controlador
    #[Route('/start', name: 'app_start')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/StartController.php',
        ]);
    }

    #[Route('/saludo/{nombre}', name: 'saludo_usuario')]
    public function saludoUsuario(string $nombre): JsonResponse
    {
        return new JsonResponse(
            "hola, como estas, ".$nombre. "¿que tal tu día de hoy?"
        );
    }

   
    #[Route('/bienvenida', name: 'app_bienvenida')]
    public function bienvenida(): JsonResponse
    {
        return new JsonResponse(
            "hola, bienvenide a la prueba de enrutamiento en symfony"
        );
    }

    


}