<?php
/**
 * @author Karel Van Wonterghem
 */

namespace SumoCoders\Teamleader\Meetings;

use SumoCoders\Teamleader\Exception;
use SumoCoders\Teamleader\Teamleader;

/**
 * Class Meeting
 * @package SumoCoders\Teamleader\Meetings
 */
class Meeting
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $duration_minutes;

    /**
     * @var int
     */
    private $date_timestamp;

    /**
     * @var string
     */
    private $date_day;

    /**
     * @var string
     */
    private $date_hour;

    /**
     * @var int
     */
    private $creator_id;

    /**
     * @var int
     */
    private $canceller_id;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $description;

    /**
     * @var
     */
    private $project_id;

    /**
     * @var int
     */
    private $milestone_id;


    /**
     * @var string
     */
    private $date_added;

    /**
     * @var string
     */
    private $date_added_formatted;

    /**
     * @var int
     */
    private $related_sale_id;

    /**
     * @var array
     */
    private $attending_internal;

    /**
     * @var array
     */
    private $customFields;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getDurationMinutes()
    {
        return $this->duration_minutes;
    }

    /**
     * @param int $duration_minutes
     */
    public function setDurationMinutes($duration_minutes)
    {
        $this->duration_minutes = $duration_minutes;
    }

    /**
     * @return int
     */
    public function getDateTimestamp()
    {
        return $this->date_timestamp;
    }

    /**
     * @param int $date_timestamp
     */
    public function setDateTimestamp($date_timestamp)
    {
        $this->date_timestamp = $date_timestamp;
    }

    /**
     * @return string
     */
    public function getDateDay()
    {
        return $this->date_day;
    }

    /**
     * @param string $date_day
     */
    public function setDateDay($date_day)
    {
        $this->date_day = $date_day;
    }

    /**
     * @return string
     */
    public function getDateHour()
    {
        return $this->date_hour;
    }

    /**
     * @param string $date_hour
     */
    public function setDateHour($date_hour)
    {
        $this->date_hour = $date_hour;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * @param int $creator_id
     */
    public function setCreatorId($creator_id)
    {
        $this->creator_id = $creator_id;
    }

    /**
     * @return int
     */
    public function getCancellerId()
    {
        return $this->canceller_id;
    }

    /**
     * @param int $canceller_id
     */
    public function setCancellerId($canceller_id)
    {
        $this->canceller_id = $canceller_id;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getMilestoneId()
    {
        return $this->milestone_id;
    }

    /**
     * @param mixed $milestone_id
     */
    public function setMilestoneId($milestone_id)
    {
        $this->milestone_id = $milestone_id;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->date_added;
    }

    /**
     * @param mixed $date_added
     */
    public function setDateAdded($date_added)
    {
        $this->date_added = $date_added;
    }

    /**
     * @return mixed
     */
    public function getDateAddedFormatted()
    {
        return $this->date_added_formatted;
    }

    /**
     * @param mixed $date_added_formatted
     */
    public function setDateAddedFormatted($date_added_formatted)
    {
        $this->date_added_formatted = $date_added_formatted;
    }


    /**
     * Set a single custom field
     *
     * @param string $id
     * @param mixed  $value
     */
    public function setCustomField($id, $value)
    {
        $this->customFields[$id] = $value;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields($customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * Get a single custom field
     *
     * @param string $id
     */
    public function getCustomField($id)
    {
        return $this->customFields[$id];
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @return array $attendingInternal
     */
    public function getAttendingInternal()
    {
        return $this->attending_internal;
    }

    /**
     * @param array $attending_internal
     */
    public function setAttendingInternal($value)
    {
        $this->attending_internal[] = $value;
    }


    /**
     * @return mixed
     */
    public function getRelatedSaleId()
    {
        return $this->related_sale_id;
    }

    /**
     * @param mixed $related_sale_id
     */
    public function setRelatedSaleId($related_sale_id)
    {
        $this->related_sale_id = $related_sale_id;
    }


    /**
     * Initialize a Contact with raw data we got from the API
     *
     * @param  array   $data
     * @return Contact
     * @throws Exception
     */
    public static function initializeWithRawData($data)
    {
        $item = new Meeting();

        foreach ($data as $key => $value) {
            switch ($key) {
                case substr($key, 0, 3) == 'cf_':
                    $chunks = explode('_', $key);
                    $id = end($chunks);
                    $item->setCustomField($id, $value);
                    break;

                case 'attending_internal':
                    foreach ($value as $i) { $item->setAttendingInternal($i); }
                    break;

                default:
                    // ignore empty values
                    if ($value == '') {
                        continue;
                    }

                    $methodName = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
                    if (!method_exists(__CLASS__, $methodName)) {
                        if (Teamleader::DEBUG) {
                            var_dump($key, $value);
                            throw new Exception('Unknown method (' . $methodName . ')');
                        }
                    } else {
                        call_user_func(array($item, $methodName), $value);
                    }
            }
        }

        return $item;
    }

    /**
     * This method will convert a contact to an array that can be used for an
     * API-request
     *
     * @return array
     */
    public function toArrayForApi()
    {
        $return = array();

        if ($this->getDescription()) {
            $return['description'] = $this->getDescription();
        }
        if ($this->getUserId()) {
            $return['user_id'] = $this->getUserId();
        }
        if ($this->getTitle()) {
            $return['title'] = $this->getTitle();
        }
        if ($this->getDurationMinutes()) {
            $return['duration'] = $this->getDurationMinutes();
        }
        if ($this->getDateTimestamp()) {
            $return['start_date'] = $this->getDateTimestamp();
        }
        if ($this->getCustomFields()) {
            foreach ($this->getCustomFields() as $fieldID => $fieldValue) {
                $return['custom_field_' . $fieldID] = $fieldValue;
            }
        }

        return $return;
    }

}