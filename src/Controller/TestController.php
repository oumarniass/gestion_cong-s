<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\FileUploader;


class TestController extends AbstractController
{
    public function new(Request $request, FileUploader $fileUploader)
    {
        // ...

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $product->getBrochure();
            $fileName = $fileUploader->upload($file);

            $product->setBrochure($fileName);

            // ...
        }

        // ...
    }

}
