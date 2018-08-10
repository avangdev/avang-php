<?php
/**
 * This file contains the list segments endpoint for AvangEmailApi PHP-SDK.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2017 http://www.mailwizz.com/
 */
 
 
/**
 * AvangEmailApi_Endpoint_ListSegments handles all the API calls for handling the list segments.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @package AvangEmailApi
 * @subpackage Endpoint
 * @since 1.0
 */
class AvangEmailApi_Endpoint_ListSegments extends AvangEmailApi_Base
{
    /**
     * Get segments from a certain mail list
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $listUid
     * @param integer $page
     * @param integer $perPage
     * @return AvangEmailApi_Http_Response
     */
    public function getSegments($listUid, $page = 1, $perPage = 10)
    {
        $client = new AvangEmailApi_Http_Client(array(
            'method'        => AvangEmailApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('lists/%s/segments', $listUid)),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}