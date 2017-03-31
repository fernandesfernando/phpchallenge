<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\People;
use AppBundle\Entity\Phones;
use AppBundle\Entity\ShipOrders;
use AppBundle\Entity\Items;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/uploadxml.html.twig');
    }
    
    /**
     * @Route("/uploadxml", name="uploadxml")
     */
    public function uploadXMLAction(Request $request)
    {       
        $file = $request->files;             
                
        $xml = simplexml_load_string(file_get_contents($request->files->get('people')));
        $arr = (array) $xml;
        
        foreach ($arr['person'] as $person_aux) 
        {
            $person = new People();
            $person->setPersonid($person_aux->personid);
            $person->setPersonname($person_aux->personname);           
            
            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($person);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            
            
            foreach ($person_aux->phones->phone as $phone_tel) {
                $phone = new Phones();
                $phone->setPhone($phone_tel);
                $phone->setPersonid($person_aux->personid);
                $em = $this->getDoctrine()->getManager();

                // tells Doctrine you want to (eventually) save the Product (no queries yet)
                $em->persist($phone);

                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
            }
                       
            
        }
       
        
        //ARQUIVO SHIPORDERS.XML ESTAVA COM ALGUMAS TAGS DE ENCERRAMENTO ERRADAS
        $xml = simplexml_load_string(file_get_contents($request->files->get('shiporders')));
        $arr = (array) $xml;
              
        
        foreach ($arr['shiporder'] as $shiporder_aux) 
        {
            $shiporder = new ShipOrders();
            $shiporder->setOrderid($shiporder_aux->orderid);
            $shiporder->setOrderperson($shiporder_aux->orderperson);                           
            $shiporder->setShiptoName($shiporder_aux->shipto->name);
            $shiporder->setShiptoAddress($shiporder_aux->shipto->address);
            $shiporder->setShiptoCity($shiporder_aux->shipto->city);
            $shiporder->setShiptoCountry($shiporder_aux->shipto->country);
            
            
            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($shiporder);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            
            
            foreach ($shiporder_aux->items->item as $item_aux) {                
                                
                $item = new Items();
                $item->setOrderid($shiporder_aux->orderid);
                $item->setTitle($item_aux->title);
                $item->setNote($item_aux->note);
                $item->setQuantity($item_aux->quantity);
                $item->setPrice($item_aux->price);
                $em = $this->getDoctrine()->getManager();

                // tells Doctrine you want to (eventually) save the Product (no queries yet)
                $em->persist($item);

                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
            }                      
            
        }       
        
        
        return new Response ('People and ShipOrders added successfuly. See on ReadMe the routes created to allow data visualization');
    }
    
        
    /**
     * @Route("/people/all", name="allpeople")        
     */
    
    public function showPersonsAction()
    {
        $people = $this->getDoctrine()
            ->getRepository('AppBundle:People')
            ->findAll();

        $people = $this->get('serializer')->serialize($people, 'json');

        $response = new Response($people);

        
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /**
     * @Route("/phones/{personid}", name="phonesbyperson")        
     */
    
    public function showPhonesAction($personid)
    {
        $phones = $this->getDoctrine()
            ->getRepository('AppBundle:Phones')
            ->findByPersonid($personid);

        $phones = $this->get('serializer')->serialize($phones, 'json');

        $response = new Response($phones);

        
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    /**
     * @Route("/orders/{personid}", name="ordersbyperson")        
     */
    
    public function showOrdersAction($personid)
    {
        $orders = $this->getDoctrine()
            ->getRepository('AppBundle:ShipOrders')
            ->findByOrderperson($personid);

        $orders = $this->get('serializer')->serialize($orders, 'json');

        $response = new Response($orders);
        
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    
    
}
