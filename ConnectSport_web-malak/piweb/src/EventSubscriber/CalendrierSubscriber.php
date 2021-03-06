<?php

namespace App\EventSubscriber;

use App\Entity\Contrat;
use App\Entity\Evenement;
use App\Repository\ContratRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class CalendrierSubscriber
{
    private $bookingRepository;
    private $router;

    public function __construct(
        ContratRepository $bookingRepository,
        UrlGeneratorInterface $router
    ) {
        $this->bookingRepository = $bookingRepository;
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar1)
    {
        $start = $calendar1->getStart();
        $end = $calendar1->getEnd();
        $filters = $calendar1->getFilters();

        //  $events=$this->getDoctrine()->getRepository(Evenement::class)->findAll();
        // Modify the query to fit to your entity and needs
        // Change booking.beginAt by your start date property
        $bookings = $this->bookingRepository->findAll();


        foreach ($bookings as $booking) {
            // this create the events with your data (here booking data) to fill calendar
            $bookingEvent = new Event(
                $booking->getNom(),
                $booking->getDatecontrat(),
                $booking->getDatecontrat()// If the end date is null or not defined, a all day event is created.
            );




            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */

            $bookingEvent->setOptions([
                'backgroundColor' => 'red',
                'borderColor' => 'red',
            ]);
            $bookingEvent->addOption(
                'url',
                $this->router->generate('app_contrat_show', [
                    'id' => $booking->getId(),
                ])
            );




            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar1->addEvent($bookingEvent);
            //$calendar->addEvent($CalendarEvent);
        }
    }

}