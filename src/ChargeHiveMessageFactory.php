<?php
namespace ChargeHive\Php\Sdk\Client;

use Http\Message\MessageFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class ChargeHiveMessageFactory implements MessageFactory
{
  /**
   * @var MessageFactory
   */
  protected $_factory;

  protected $_accessToken;
  protected $_projectID;

  public function __construct(MessageFactory $factory)
  {
    $this->_factory = $factory;
  }

  /**
   * Creates a new PSR-7 request.
   *
   * @param string                               $method
   * @param string|UriInterface                  $uri
   * @param array                                $headers
   * @param resource|string|StreamInterface|null $body
   * @param string                               $protocolVersion
   *
   * @return RequestInterface
   */
  public function createRequest($method, $uri, array $headers = [], $body = null, $protocolVersion = '1.1')
  {
    $headers['Authorization'] = "Bearer " . $this->_accessToken;
    $headers['x-project-id'] = $this->_projectID;
    return $this->_factory->createRequest($method, $uri, $headers, $body, $protocolVersion);
  }

  /**
   * Creates a new PSR-7 response.
   *
   * @param int                                  $statusCode
   * @param string|null                          $reasonPhrase
   * @param array                                $headers
   * @param resource|string|StreamInterface|null $body
   * @param string                               $protocolVersion
   *
   * @return ResponseInterface
   */
  public function createResponse(
    $statusCode = 200, $reasonPhrase = null, array $headers = [], $body = null, $protocolVersion = '1.1'
  )
  {
    return $this->_factory->createResponse($statusCode, $reasonPhrase, $headers, $body, $protocolVersion);
  }

  /**
   * @return mixed
   */
  public function getAccessToken()
  {
    return $this->_accessToken;
  }

  /**
   * @param mixed $accessToken
   *
   * @return ChargeHiveMessageFactory
   */
  public function setAccessToken($accessToken)
  {
    $this->_accessToken = $accessToken;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getProjectID()
  {
    return $this->_projectID;
  }

  /**
   * @param mixed $projectID
   *
   * @return ChargeHiveMessageFactory
   */
  public function setProjectID($projectID)
  {
    $this->_projectID = $projectID;
    return $this;
  }

}
