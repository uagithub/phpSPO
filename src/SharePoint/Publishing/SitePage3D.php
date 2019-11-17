<?php

/**
 * Updated By PHP Office365 Generator 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint\Publishing;

use Office365\PHP\Client\Runtime\ClientObject;
use Office365\PHP\Client\Runtime\DeleteEntityQuery;
use Office365\PHP\Client\Runtime\ResourcePathEntity;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;

class SitePage3D extends ClientObject
{
    /**
     * @return string
     */
    public function getSpaceContent()
    {
        if (!$this->isPropertyAvailable("SpaceContent")) {
            return null;
        }
        return $this->getProperty("SpaceContent");
    }
    /**
     * @var string
     */
    public function setSpaceContent($value)
    {
        $this->setProperty("SpaceContent", $value, true);
    }
}