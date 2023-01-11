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



    //     /**
    //  * @Route("/clothes", name="clothes", methods={"GET","POST"})
    //  */
    // public function showClothes(Request $request): Response
    // {  //$object_array=[];
    //     $items = new DataObject\Clothes\Listing();
    //     $items->setOrderKey("price");
    //     $items->setOrder("asc");


    //     return $this->render('default/ClothesContent.html.twig',['objects'=>$items]);
    // }



        /**
     * @Route("/electronic", name="electronic", methods={"GET","POST"})
     */
    public function showElectronic(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\ElectronicsDevices\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        return $this->render('default/electronicContent.html.twig',['objects'=>$items]);





    }










    /**
     * @Route("/footwear", name="footwear", methods={"GET","POST"})
     */
    public function showFootwear(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        return $this->render('default/FootwearContent.html.twig',['objects'=>$items]);
    }







    /**
     * @Route("/beauty", name="beauty", methods={"GET","POST"})
     */
    public function showBeautyProducts(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\BeautyProduct\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        return $this->render('default/BeautyContent.html.twig',['objects'=>$items]);
    }











}
