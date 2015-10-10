<?php

namespace Cronofy\Model;

use Cronofy\Collections\EventCollection;

class Calendar
{
    /**
     * @var string
     */
    protected $provider_name;

    /**
     * @var string
     */
    protected $profile_id;

    /**
     * @var string
     */
    protected $profile_name;

    /**
     * @var string
     */
    protected $calendar_id;

    /**
     * @var string
     */
    protected $calendar_name;

    /**
     * @var bool
     */
    protected $calendar_readonly;

    /**
     * @var bool
     */
    protected $calendar_deleted;

    /**
     * @var EventCollection
     */
    protected $events;

    /**
     * @return EventCollection
     */
    public function getEvents()
    {
        if (!$this->events instanceof EventCollection) {
            $this->events = new EventCollection();
        }

        return $this->events;
    }

    /**
     * @param Event $event
     *
     * @return Calendar
     */
    public function addEvent(Event $event)
    {
        $this->events->append($event);

        return $this;
    }

    /**
     * @param $eventId
     *
     * @return Event|false
     */
    public function getEvent($eventId)
    {
        return $this->events->offsetExists($eventId) ? $this->events->offsetGet($eventId) : false;
    }

    /**
     * @return string
     */
    public function getProviderName()
    {
        return $this->provider_name;
    }

    /**
     * @param string $provider_name
     *
     * @return Calendar
     */
    public function setProviderName($provider_name)
    {
        $this->provider_name = $provider_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileId()
    {
        return $this->profile_id;
    }

    /**
     * @param string $profile_id
     *
     * @return Calendar
     */
    public function setProfileId($profile_id)
    {
        $this->profile_id = $profile_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
        return $this->profile_name;
    }

    /**
     * @param string $profile_name
     *
     * @return Calendar
     */
    public function setProfileName($profile_name)
    {
        $this->profile_name = $profile_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarId()
    {
        return $this->calendar_id;
    }

    /**
     * @param string $calendar_id
     *
     * @return Calendar
     */
    public function setCalendarId($calendar_id)
    {
        $this->calendar_id = $calendar_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalendarName()
    {
        return $this->calendar_name;
    }

    /**
     * @param string $calendar_name
     *
     * @return Calendar
     */
    public function setCalendarName($calendar_name)
    {
        $this->calendar_name = $calendar_name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCalendarReadonly()
    {
        return $this->calendar_readonly;
    }

    /**
     * @param bool $calendar_readonly
     *
     * @return Calendar
     */
    public function setCalendarReadonly($calendar_readonly)
    {
        $this->calendar_readonly = $calendar_readonly;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCalendarDeleted()
    {
        return $this->calendar_deleted;
    }

    /**
     * @param bool $calendar_deleted
     *
     * @return Calendar
     */
    public function setCalendarDeleted($calendar_deleted)
    {
        $this->calendar_deleted = $calendar_deleted;

        return $this;
    }
}
