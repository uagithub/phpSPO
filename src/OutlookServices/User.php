<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:44:53+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

use Exception;
use Office365\Runtime\InvokePostMethodQuery;
use Office365\Runtime\Office365Version;
use Office365\Runtime\ResourcePath;
/**
 * A user in the system.
 * The Me endpoint is provided as a shortcut for specifying the current user by SMTP address.
 */
class User extends OutlookEntity
{
    /**
     * @return MessageCollection
     */
    public function getMessages()
    {
        if (!$this->isPropertyAvailable("Messages")) {
            $this->setProperty("Messages", new MessageCollection($this->getContext(), new ResourcePath("Messages", $this->getResourcePath())));
        }
        return $this->getProperty("Messages");
    }
    /**
     * @param string $folderId
     * @return MailFolder
     * @throws Exception
     */
    public function getFolder($folderId)
    {
        if (!$this->isPropertyAvailable("Folders")) {
            $this->setProperty("Folders", new MailFolder($this->getContext(), new ResourcePath($this->getFolderEntityName() . "/" . $folderId, $this->getResourcePath())));
        }
        return $this->getProperty("Folders");
    }
    /**
     * @return MailFolder
     * @throws Exception
     */
    public function getFolders()
    {
        if (!$this->isPropertyAvailable("Folders")) {
            $this->setProperty("Folders", new MailFolder($this->getContext(), new ResourcePath($this->getFolderEntityName(), $this->getResourcePath())));
        }
        return $this->getProperty("Folders");
    }
    /**
     * @param Message $message
     * @param bool $saveToSentItems
     */
    public function sendEmail(Message $message, $saveToSentItems)
    {
        $payload = array();
        $payload["Message"] = $message;
        $payload["SaveToSentItems"] = $saveToSentItems;
        $action = new InvokePostMethodQuery($this, "SendMail", null, null, $payload);
        $this->getContext()->addQuery($action);
    }
    /**
     * @return ContactCollection
     */
    public function getContacts()
    {
        if (!$this->isPropertyAvailable("Contacts")) {
            $this->setProperty("Contacts", new ContactCollection($this->getContext(), new ResourcePath("Contacts", $this->getResourcePath())));
        }
        return $this->getProperty("Contacts");
    }
    /**
     * @return EventCollection
     */
    public function getEvents()
    {
        if (!$this->isPropertyAvailable("Events")) {
            $this->setProperty("Events", new EventCollection($this->getContext(), new ResourcePath("Events", $this->getResourcePath())));
        }
        return $this->getProperty("Events");
    }
    /**
     * @return CalendarCollection
     */
    public function getCalendars()
    {
        if (!$this->isPropertyAvailable("Calendars")) {
            $this->setProperty("Calendars", new CalendarCollection($this->getContext(), new ResourcePath("Calendars", $this->getResourcePath())));
        }
        return $this->getProperty("Calendars");
    }
    /**
     * @return CalendarGroupCollection
     */
    public function getCalendarGroups()
    {
        if (!$this->isPropertyAvailable("CalendarGroups")) {
            $this->setProperty("CalendarGroups", new CalendarGroupCollection($this->getContext(), new ResourcePath("CalendarGroups", $this->getResourcePath())));
        }
        return $this->getProperty("CalendarGroups");
    }
    /**
     * @return SubscriptionCollection
     */
    public function getSubscriptions()
    {
        if (!$this->isPropertyAvailable("Subscriptions")) {
            $this->setProperty("Subscriptions", new SubscriptionCollection($this->getContext(), new ResourcePath("Subscriptions", $this->getResourcePath())));
        }
        return $this->getProperty("Subscriptions");
    }
    /**
     * @return Calendar
     */
    public function getCalendar()
    {
        if (!$this->isPropertyAvailable("Calendar")) {
            $this->setProperty("Calendar", new Calendar($this->getContext(), new ResourcePath("Calendar", $this->getResourcePath())));
        }
        return $this->getProperty("Calendar");
    }
    /**
     * @return string
     * @throws Exception
     */
    private function getFolderEntityName()
    {
        if ($this->getContext()->getApiVersion() == Office365Version::V1) {
            return "Folders";
        }
        if ($this->getContext()->getApiVersion() == Office365Version::V2) {
            return "MailFolders";
        }
        throw new Exception("Unknown API version '" . $this->getContext()->getApiVersion() . "'");
    }
    /**
     * The user's alias. Typically the SMTP address of the user.
     * @var string
     */
    public $Alias;
    /**
     * The user's display name.
     * @var string
     */
    public $DisplayName;
    /**
     * The user's primary calendar. Navigation property.
     * @var Calendar
     */
    public $Calendar;
    /**
     * The GUID assigned to the user's mailbox.
     * @var string
     */
    public $MailboxGuid;
    /**
     * The root folder of the user's mailbox.
     * @var MailFolder
     */
    public $RootFolder;
    /**
     * @return EventCollection
     */
    public function getCalendarView()
    {
        if (!$this->isPropertyAvailable("CalendarView")) {
            $this->setProperty("CalendarView", new EventCollection($this->getContext(), new ResourcePath("CalendarView", $this->getResourcePath())));
        }
        return $this->getProperty("CalendarView");
    }
    /**
     * @return Folder
     */
    public function getRootFolder()
    {
        if (!$this->isPropertyAvailable("RootFolder")) {
            $this->setProperty("RootFolder", new Folder($this->getContext(), new ResourcePath("RootFolder", $this->getResourcePath())));
        }
        return $this->getProperty("RootFolder");
    }
}