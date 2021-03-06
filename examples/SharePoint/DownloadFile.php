<?php

use Office365\SharePoint\ClientContext;
use Office365\SharePoint\File;

$settings = include('../../Settings.php');
require_once '../vendor/autoload.php';


$ctx = ClientContext::connectWithClientCredentials($settings['Url'],$settings['ClientId'], $settings['ClientSecret']);
$sourceLibraryTitle = "Documents";
$sourceList = $ctx->getWeb()->getLists()->getByTitle($sourceLibraryTitle);
$files = $sourceList->getRootFolder()->getFiles();
$ctx->load($files);
$ctx->executeQuery();


$targetFilePath = "../data";
/** @var File $file */
foreach ($files->getData() as $file){
    try {
        $fileUrl = $file->getServerRelativeUrl();
        $fileContent = Office365\SharePoint\File::openBinary($ctx, $fileUrl);
        file_put_contents($targetFilePath, $fileContent);
        print "File {$fileUrl} has been downloaded successfully\r\n";
    } catch (Exception $e) {
        print "File download failed:\r\n";
    }
}




