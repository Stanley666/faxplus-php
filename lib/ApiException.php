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
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
