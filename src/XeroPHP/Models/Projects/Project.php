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
            'ProjectId' => [false, self::PROPERTY_TYPE_GUID, null, false, false],
            'ContactId' => [true, self::PROPERTY_TYPE_GUID, null, false, false],
            'Name' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
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
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setName($value)
    {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->_data['ContactId'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setContactId($value)
    {
        $this->propertyUpdated('ContactId', $value);
        $this->_data['ContactId'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->_data['ProjectId'];
    }

    /**
     * @param string $value
     * @return File
     */
    public function setProjectId($value)
    {
        $this->propertyUpdated('ProjectId', $value);
        $this->_data['ProjectId'] = $value;

        return $this;
    }
}