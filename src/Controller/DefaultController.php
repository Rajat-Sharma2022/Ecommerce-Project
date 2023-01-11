<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/default.html.twig');
    }

     /**
     * @param Request $request
     * @return Response
     */
    public function headerAction(Request $request): Response
    {
        return $this->render('default/header.html.twig');
    }
<<<<<<< HEAD

     /**
     * @param Request $request
     * @return Response
     */
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');
    }
=======
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
}

/**
 * @param Request $request
 * @return Response
 */
public function defaultAction(Request $request): Response
{
    return $this->render('default/aboutus.html.twig');
}


