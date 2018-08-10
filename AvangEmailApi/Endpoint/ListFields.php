<?php
/**
 * This file contains the lists fields endpoint for AvangEmailApi PHP-SDK.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2017 http://www.mailwizz.com/
 */
 
 
/**
 * AvangEmailApi_Endpoint_ListFields handles all the API calls for handling the list custom fields.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @package AvangEmailApi
 * @subpackage Endpoint
 * @since 1.0
 */
class AvangEmailApi_Endpoint_ListFields extends AvangEmailApi_Base
{
    /**
     * Get fields from a certain mail list
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $listUid
     * @return AvangEmailApi_Http_Response
     */
    public function getFields($listUid)
    {
        $client = new AvangEmailApi_Http_Client(array(
            'method'        => AvangEmailApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('lists/%s/fields', $listUid)),
            'paramsGet'     => array(),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}