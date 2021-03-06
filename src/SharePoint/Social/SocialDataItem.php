<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T19:41:09+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Social;

use Office365\Runtime\ClientValueObject;

class SocialDataItem extends ClientValueObject
{
    /**
     * @var string
     */
    public $AccountName;
    /**
     * @var integer
     */
    public $ItemType;
    /**
     * @var string
     */
    public $TagGuid;
    /**
     * @var string
     */
    public $Text;
    /**
     * @var string
     */
    public $Uri;
}