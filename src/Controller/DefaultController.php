<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\Asset;

use Pimcore\Model\DataObject\Feedback;

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
     * @Route("/tv", name="tv", methods={"GET","POST"})
     */
    public function showTv(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\ElectronicsDevices\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $tv=[];

        foreach ($items as $item) {
            if($item->getProduct()=="tv")
            {
                  array_push($tv,$item);
            }

          }


        return $this->render('default/electronicContent.html.twig',['objects'=>$tv]);



    }




    /**
     * @Route("/laptop", name="laptop", methods={"GET","POST"})
     */
    public function showlaptop(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\ElectronicsDevices\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $laptops=[];

        foreach ($items as $item) {
            if($item->getProduct()=="laptop")
            {
                  array_push($laptops,$item);
            }

          }


        return $this->render('default/electronicContent.html.twig',['objects'=>$laptops]);


    }


    /**
     * @Route("/phone", name="phone", methods={"GET","POST"})
     */
    public function showphone(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\ElectronicsDevices\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $phones=[];

        foreach ($items as $item) {
            if($item->getProduct()=="phone")
            {
                  array_push($phones,$item);
            }

          }


        return $this->render('default/electronicContent.html.twig',['objects'=>$phones]);





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
     * @Route("/shoes", name="shoes", methods={"GET","POST"})
     */
    public function showShoes(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $shoes=[];

        foreach ($items as $item) {
            if($item->getFootWearType()=="Shoes")
            {
                  array_push($shoes,$item);
            }

          }


        return $this->render('default/FootwearContent.html.twig',['objects'=>$shoes]);
    }



     /**
     * @Route("/sandal", name="sandal", methods={"GET","POST"})
     */
    public function showSandal(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $sandal=[];

        foreach ($items as $item) {
            if($item->getFootWearType()=="Sandal")
            {
                  array_push($sandal,$item);
            }

          }
        return $this->render('default/FootwearContent.html.twig',['objects'=>$sandal]);
    }


    /**
     * @Route("/chappal", name="chappal", methods={"GET","POST"})
     */
    public function showChappal(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\Footwear\Listing();
        $items->setOrderKey("RAND()", false);
        $chappal=[];

        foreach ($items as $item) {
            if($item->getFootWearType()=="Chappal")
            {
                  array_push($chappal,$item);
            }

          }


        return $this->render('default/FootwearContent.html.twig',['objects'=>$chappal]);
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



    /**
     * @Route("/hair", name="hair", methods={"GET","POST"})
     */
    public function hairProducts(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\BeautyProduct\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $hairProducts=[];

        foreach ($items as $item) {
            if($item->getSelect()=="hair")
            {
                  array_push($hairProducts,$item);
            }

          }



        return $this->render('default/BeautyContent.html.twig',['objects'=>$hairProducts]);
    }











    /**
     * @Route("/skin", name="skin", methods={"GET","POST"})
     */
    public function skinProducts(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\BeautyProduct\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $skinProducts=[];

        foreach ($items as $item) {
            if($item->getSelect()=="skin")
            {
                  array_push($skinProducts,$item);
            }

          }



        return $this->render('default/BeautyContent.html.twig',['objects'=>$skinProducts]);
    }


    /**
     * @Route("/makeup", name="makeup", methods={"GET","POST"})
     */
    public function Makeup(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\BeautyProduct\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $makeup=[];

        foreach ($items as $item) {
            if($item->getSelect()=="makeup")
            {
                  array_push($makeup,$item);
            }

          }



        return $this->render('default/BeautyContent.html.twig',['objects'=>$makeup]);
    }



    /**
     * @Route("/perfume", name="perfume", methods={"GET","POST"})
     */
    public function perfume(Request $request): Response
    {  //$object_array=[];
        $items = new DataObject\BeautyProduct\Listing();
        $items->setOrderKey("price");
        $items->setOrder("asc");


        $perfumes=[];

        foreach ($items as $item) {
            if($item->getSelect()=="perfume")
            {
                  array_push($perfumes,$item);
            }

          }



        return $this->render('default/BeautyContent.html.twig',['objects'=>$perfumes]);
    }



     /**
     * @Route("/form", name="form", methods={"GET"})
     */
    public function homepage(Request $request): Response
    {


        return $this->render('default/form.html.twig');

    }

        /**
     * @Route("/submit", name="submit", methods={"POST"})
     */
    public function submit(Request $request): Response
    {
   $ob=new Feedback();
   $key=rand(1,1000000000);
   $ob->setKey($key);
   $ob->setParentId(43);
   $ob->setName($_POST["name"]);
   $ob->setEmail($_POST["email"]);
   $ob->setLikes($_POST["likes"]);
   $ob->setOthers($_POST["other"]);

   $ob->save();
   return $this->render('default/submit.html.twig',['name'=>$_POST["name"]]);


    }





     /**
     * @Route("/csv", name="csv", methods={"GET","POST"})
     */
    public function importCsv(Request $request): Response
    {  //$object_array=[];
        $file = \Pimcore\Model\Asset::getByPath("/addresses.csv");
//$path=$file->getFullPath();

        if (($open = fopen("$file", "r")) !== FALSE)
        {

          while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
          {
            $array[] = $data;
          }

          fclose($open);
        }


        return $this->json(["data"=>$array]);
    }








}
