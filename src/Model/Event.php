<?php

namespace Cronofy\Model;

/**
 * Class Event.
 */
class Event
{
    /** @var Calendar */
    protected $calendar;
    /** @var string */
    protected $event_id;
    /** @var string */
    protected $summary;
    /** @var string */
    protected $description;
    /** @var string */
    protected $start;
    /** @var string */
    protected $end;
    /** @var bool */
    protected $deleted;
    /** @var  array */
    protected $location;

    /** @var string */
    protected $participation_status;
    /** @var string */
    protected $transparency;
    /** @var string */
    protected $event_status;

    /** @var  array */
    protected $categories;

    /** @var  array */
    protected $attendees;

    /** @var string */
    protected $created;
    /** @var string */
    protected $updated;

    /**
     * Event constructor.
     *
     * @param Calendar $calendar
     * @param array    $attribs
     */
    public function __construct(Calendar $calendar, array $attribs = [])
    {
        $this->calendar = $calendar;

        foreach ($attribs as $key => $val) {
            if (isset($this->$key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * @param string $event_id
     *
     * @return Event
     */
    public function setEventId($event_id)
    {
        $this->event_id = $event_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return Event
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $start
     *
     * @return Event
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param string $end
     *
     * @return Event
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return array
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param array $location
     *
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getParticipationStatus()
    {
        return $this->participation_status;
    }

    /**
     * @return string
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * @return string
     */
    public function getEventStatus()
    {
        return $this->event_status;
    }

    /**
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return array
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }
}
