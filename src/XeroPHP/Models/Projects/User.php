<?php

namespace XeroPHP\Models\Projects;

use XeroPHP\Remote;

class User extends Remote\Model
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
        return 'ProjectsUsers';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'User';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'userId';
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
            'userId' => [false, self::PROPERTY_TYPE_GUID, null, false, false],
            'name' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'email' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
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
     * @return User
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
    public function getEmail()
    {
        return $this->_data['email'];
    }

    /**
     * @param string $value
     * @return User
     */
    public function setEmail($value)
    {
        $this->propertyUpdated('email', $value);
        $this->_data['email'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->_data['userId'];
    }

    /**
     * @param string $value
     * @return User
     */
    public function setUserId($value)
    {
        $this->propertyUpdated('userId', $value);
        $this->_data['userId'] = $value;

        return $this;
    }
}