<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation;


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


    /**
     * @param Request $request
     * @return Response
     */
    public function footerAction(Request $request): Response
    {
        return $this->render('default/footer.html.twig');



    }


    /**
     * @param Request $request
     * @return Response
     */
    public function homeimageAction(Request $request): Response
    {
        return $this->render('default/homeimage.html.twig');


    }
    /**
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request): Response
    {
        return $this->render('default/home.html.twig');


    }

        //  do listing of objects



        /**
     * @Route("/electronic", name="electronic", methods={"GET","POST"})
     */
    public function add(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\ElectronicsDevices\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        return $this->render('default/electronicContent.html.twig',['objects'=>$items]);

}




    /**
     * @param Request $request
     * @return Response
     */
    public function ElectronicPageAction(Request $request): Response
    {
        return $this->render('default/electronic.html.twig', []);


    }

    public function electronicContentAction(Request $request): Response
    {
        return $this->render('default/electronicContent.html.twig', []);


    }


    /**
     * @param Request $request
     * @return Response
     */
    public function ClothesContentAction(Request $request): Response
    {
        return $this->render('default/ClothesContent.html.twig');


    }
     /**
     * @param Request $request
     * @return Response
     */
    public function ClothesAction(Request $request): Response
    {





        return $this->render('default/Clothes.html.twig');


    }




}
