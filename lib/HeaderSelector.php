<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  faxplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FAX.PLUS REST API
 *
 * This is the fax.plus API v1 developed for third party developers and organizations. In order to have a better coding experience with this API, let's quickly go through some points:<br /><br /> - This API assumes **_/accounts** as an entry point with the base url of **https://restapi.fax.plus/v1**. <br /><br /> - This API treats all date and times sent to it in requests as **UTC**. Also, all dates and times returned in responses are in **UTC**<br /><br /> - Once you have an access_token, you can easily send a request to the resource server with the base url of **https://restapi.fax.plus/v1** to access your permitted resources. As an example to get the user's profile info you would send a request to **https://restapi.fax.plus/v1/accounts/self** when **Authorization** header is set to \"Bearer YOUR_ACCESS_TOKEN\" and custom header of **x-fax-clientid** is set to YOUR_CLIENT_ID
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace faxplus;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  faxplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeaderSelector
{
    protected $extra_headers = array();

    public function __construct(array $extra_headers = null) {
        $this->extra_headers = $extra_headers ?: array();
    }

    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];
		foreach ($this->extra_headers as $k => $v){
            $headers[$k] = $v;
        }

        $accept = $this->selectAcceptHeader($accept);
        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);
        return $headers;
    }

    /**
     * @param string[] $accept
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);
        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        } else {
            return implode(',', $contentType);
        }
    }
}
