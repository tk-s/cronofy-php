<?php

namespace Cronofy\Model;


class Calendar
{

    /**
     * @var string
     */
    protected $provider_name;

    /**
     * @return string
     */
    public function getProviderName()
    {
        return $this->provider_name;
    }

    /**
     * @param string $provider_name
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
     * @return Calendar
     */
    public function setCalendarName($calendar_name)
    {
        $this->calendar_name = $calendar_name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCalendarReadonly()
    {
        return $this->calendar_readonly;
    }

    /**
     * @param boolean $calendar_readonly
     * @return Calendar
     */
    public function setCalendarReadonly($calendar_readonly)
    {
        $this->calendar_readonly = $calendar_readonly;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCalendarDeleted()
    {
        return $this->calendar_deleted;
    }

    /**
     * @param boolean $calendar_deleted
     * @return Calendar
     */
    public function setCalendarDeleted($calendar_deleted)
    {
        $this->calendar_deleted = $calendar_deleted;
        return $this;
    }

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
     * @var boolean
     */
    protected $calendar_readonly;

    /**
     * @var boolean
     */
    protected $calendar_deleted;
}

