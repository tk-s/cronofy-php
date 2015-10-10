<?php

/**
 * Created by PhpStorm.
 * User: tobias
 * Date: 10.10.15
 * Time: 18:13.
 */

namespace Cronofy\Collections;

use Cronofy\Model\Event;

class EventCollection extends \ArrayObject
{
    /**
     * @param Event $event
     */
    public function append(Event $event)
    {
        parent::offsetSet($event->getEventId(), $event);
    }
}
