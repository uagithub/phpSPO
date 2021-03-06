<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:53:05+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

/**
 * A file (such as a text file or Word document) attached to a message or event.
 */
class FileAttachment extends Attachment
{
    /**
     * The binary contents of the file.
     * @var string
     */
    public $ContentBytes;
    /**
     * The ID of the attachment in the Exchange store.
     * @var string
     */
    public $ContentId;
    /**
     * The Uniform Resource Identifier (URI) that corresponds to the location of the content of the attachment.
     * @var string
     */
    public $ContentLocation;
    /**
     * @var bool
     */
    public $IsContactPhoto;
}