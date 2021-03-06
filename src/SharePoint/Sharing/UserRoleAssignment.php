<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Sharing;

use Office365\Runtime\ClientValueObject;
/**
 * Specifies 
 * a user and a role that is 
 * associated with the user.<194>
 */
class UserRoleAssignment extends ClientValueObject
{
    /**
     * Specifies 
     * a user and a role that is 
     * associated with the user.<194>
     * @var integer
     */
    public $Role;
    /**
     * Specifies the identifier of a 
     * user, which can be in the format of an email address or a login identifier.
     * @var string
     */
    public $UserId;
}