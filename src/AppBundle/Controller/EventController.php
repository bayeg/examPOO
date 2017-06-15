<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller {

    /**
     * @Route("/event/new", name="eventNew")
     */
    public function eventNew() {
        $event = new Event();
        $event->setNom("Mon event");
        $event->setDescription("Ma description");
        $event->setDebut("15/07/2017");
        $event->setFin("16/07/2017");

        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();
        
         return new Response(
            '<html><body>Event créé</body></html>'
        );
    }

    /**
     * @Route("/", name="eventList")
     */
    public function eventListAction() {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository("AppBundle:Event")
                ->findAll();
        //dump($events);die;
        return $this->render('AppBundle:Event:event_list.html.twig', [
                    "events" => $events
        ]);
    }

    /**
     * @Route("/event/{id}", name="eventDetail")
     */
    public function eventDetailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("AppBundle:Event")
                ->find($id);
        return $this->render('AppBundle:Event:event_detail.html.twig', [
                    "event" => $event
        ]);
    }

}
