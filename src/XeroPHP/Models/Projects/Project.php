<?php

namespace XeroPHP\Models\Projects;

use XeroPHP\Remote;

class Project extends Remote\Model
{
    /**
     * The name of the file
     *
     * @property string Name
     */
    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Projects';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Project';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'projectId';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_PROJECT;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_PATCH,
        ];
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'projectId' => [false, self::PROPERTY_TYPE_GUID, null, false, false],
            'contactId' => [true, self::PROPERTY_TYPE_GUID, null, false, false],
            'name' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'CurrencyCode' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'MinutesLogged' => [true, self::PROPERTY_TYPE_INT, null, false, false],
            'TotalTaskAmount' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'TotalExpenseAmount' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'MinutesToBeInvoiced' => [true, self::PROPERTY_TYPE_INT, null, false, false],
            'TaskAmountToBeInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'TaskAmountInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'ExpenseAmountToBeInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'ExpenseAmountInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'ProjectAmountInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'Deposit' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'DepositApplied' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'CreditNoteAmount' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'DeadlineUTC' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'TotalInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'TotalToBeInvoiced' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'Estimate' => [true, self::PROPERTY_TYPE_OBJECT, null, false, false],
            'Status' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_data['name'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setName($value)
    {
        $this->propertyUpdated('name', $value);
        $this->_data['Name'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->_data['contactId'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setContactId($value)
    {
        $this->propertyUpdated('contactId', $value);
        $this->_data['contactId'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->_data['projectId'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setProjectId($value)
    {
        $this->propertyUpdated('projectId', $value);
        $this->_data['projectId'] = $value;

        return $this;
    }
}