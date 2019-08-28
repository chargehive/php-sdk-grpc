<?php
namespace ChargeHive\Php\Sdk\Client;

use ChargeHive\Php\Sdk\Generated\Client;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Symfony\Component\Serializer\SerializerInterface;

class ChargeHiveClient extends Client
{
  /**
   * @var ChargeHiveMessageFactory
   */
  protected $_messageFactory;

  public function __construct(
    HttpClient $httpClient, MessageFactory $messageFactory, SerializerInterface $serializer,
    StreamFactory $streamFactory = null
  )
  {
    $this->_messageFactory = new ChargeHiveMessageFactory($messageFactory);
    parent::__construct($httpClient, $this->_messageFactory, $serializer, $streamFactory);
  }

  /**
   * @return string|null
   */
  public function getAccessToken()
  {
    return $this->_messageFactory->getAccessToken();
  }

  /**
   * @param mixed $accessToken
   *
   * @return static
   */
  public function setAccessToken(string $accessToken)
  {
    $this->_messageFactory->setAccessToken($accessToken);
    return $this;
  }

  /**
   * @return string|null
   */
  public function getProjectID()
  {
    return $this->_messageFactory->getProjectID();
  }

  /**
   * @param mixed $projectID
   *
   * @return static
   */
  public function setProjectID(string $projectID)
  {
    $this->_messageFactory->setProjectID($projectID);
    return $this;
  }

  public static function create($apiHost = null)
  {
    if($apiHost === null)
    {
      return parent::create();
    }

    $httpClient = \Http\Discovery\HttpClientDiscovery::find();
    $plugins = [];
    $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri($apiHost);
    $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
    $pluginClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);

    $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
    $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
    $serializer = new \Symfony\Component\Serializer\Serializer(
      \ChargeHive\Php\Sdk\Generated\Normalizer\NormalizerFactory::create(),
      [
        new \Symfony\Component\Serializer\Encoder\JsonEncoder(
          new \Symfony\Component\Serializer\Encoder\JsonEncode(),
          new \Symfony\Component\Serializer\Encoder\JsonDecode()
        ),
      ]
    );
    return new static($pluginClient, $messageFactory, $serializer, $streamFactory);
  }
}
