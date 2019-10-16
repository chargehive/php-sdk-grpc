<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ChargeHive\Api\Grpc;

/**
 */
class ChargeHiveClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \ChargeHive\Api\Grpc\StringTransport $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ping(\ChargeHive\Api\Grpc\StringTransport $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/Ping',
        $argument,
        ['\ChargeHive\Api\Grpc\StringTransport', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConnectionValidateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ConnectionValidate(\ChargeHive\Api\Grpc\ConnectionValidateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConnectionValidate',
        $argument,
        ['\ChargeHive\Api\Grpc\ConnectionValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConnectionConfirmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ConnectionValidationConfirm(\ChargeHive\Api\Grpc\ConnectionConfirmRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConnectionValidationConfirm',
        $argument,
        ['\ChargeHive\Api\Grpc\ConnectionValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ConfigurationApply(\ChargeHive\Api\Grpc\ConfigurationApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationApply',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ConfigurationDelete(\ChargeHive\Api\Grpc\ConfigurationDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationDelete',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeCreate(\ChargeHive\Api\Grpc\ChargeCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCreate',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeModifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeModify(\ChargeHive\Api\Grpc\ChargeModifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeModify',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeModifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeAuthorizeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeAuthorize(\ChargeHive\Api\Grpc\ChargeAuthorizeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeAuthorize',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeAuthorizeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCaptureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeCapture(\ChargeHive\Api\Grpc\ChargeCaptureRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCapture',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCaptureResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeRefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeRefund(\ChargeHive\Api\Grpc\ChargeRefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeRefund',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeRefundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCancelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeCancel(\ChargeHive\Api\Grpc\ChargeCancelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCancel',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCancelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeFraudScanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChargeFraudScan(\ChargeHive\Api\Grpc\ChargeFraudScanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeFraudScan',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeFraudScanResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MethodUpdate(\ChargeHive\Api\Grpc\MethodUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodUpdate',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MethodAvailableUpdateSchemas(\ChargeHive\Api\Grpc\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodAvailableUpdateSchemas',
        $argument,
        ['\ChargeHive\Api\Grpc\SupportedMethodUpdateTypes', 'decode'],
        $metadata, $options);
    }

}
