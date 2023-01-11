<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation;


class MyController extends FrontendController
{

    //  do listing of objects

        /**
     * @Route("/clothes", name="clothes", methods={"GET","POST"})
     */
    public function showClothes(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\Clothes\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        return $this->render('default/ClothesContent.html.twig',['objects'=>$items]);
    }





//  /**
//      * @Route("/footwear", name="clothes", methods={"GET","POST"})
//      */
//     public function showFootwear(Request $request): Response
//     {  //$object_array=[];
//         $items = new DataObject\Footwear\Listing();
//         $items->setOrderKey("price");
//         $items->setOrder("asc");


//         return $this->render('default/FootwearContent.html.twig',['objects'=>$items]);
//     }









}
