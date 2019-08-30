<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeTransaction implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $tokenId;
    /**
     * 
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var ChtypeTransactionDetail[]
     */
    protected $details;
    /**
     * 
     *
     * @var string
     */
    protected $paymentType = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $paymentScheme;
    /**
     * 
     *
     * @var string
     */
    protected $transactionType = 'TRANSACTION_TYPE_INVALID';
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $requestAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $transactedAmount;
    /**
     * 
     *
     * @var string
     */
    protected $contract = 'CONTRACT_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * 
     *
     * @var string
     */
    protected $result = 'TRANSACTION_RESULT_INVALID';
    /**
     * 
     *
     * @var ChtypeVerifyRequestData
     */
    protected $verifyRequest;
    /**
     * 
     *
     * @var string
     */
    protected $failureType = 'FAILURE_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $consumerMessage;
    /**
     * 
     *
     * @var string
     */
    protected $arn;
    /**
     * 
     *
     * @var string
     */
    protected $verified = 'VERIFICATION_STATUS_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $liability = 'LIABILITY_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $responseCode;
    /**
     * 
     *
     * @var ChtypeAttemptDetail
     */
    protected $attemptDetail;
    /**
     * 
     *
     * @var ChtypeFraudResult[]
     */
    protected $fraudResults;
    /**
     * 
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }
    /**
     * 
     *
     * @param string $tokenId
     *
     * @return self
     */
    public function setTokenId(string $tokenId)
    {
        $this->tokenId = $tokenId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * 
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransactionDetail[]
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param ChtypeTransactionDetail[] $details
     *
     * @return self
     */
    public function setDetails(array $details)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * 
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentScheme()
    {
        return $this->paymentScheme;
    }
    /**
     * 
     *
     * @param string $paymentScheme
     *
     * @return self
     */
    public function setPaymentScheme(string $paymentScheme)
    {
        $this->paymentScheme = $paymentScheme;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * 
     *
     * @param string $transactionType
     *
     * @return self
     */
    public function setTransactionType(string $transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getRequestAmount()
    {
        return $this->requestAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $requestAmount
     *
     * @return self
     */
    public function setRequestAmount(ChtypeAmount $requestAmount)
    {
        $this->requestAmount = $requestAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getTransactedAmount()
    {
        return $this->transactedAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $transactedAmount
     *
     * @return self
     */
    public function setTransactedAmount(ChtypeAmount $transactedAmount)
    {
        $this->transactedAmount = $transactedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * 
     *
     * @param string $contract
     *
     * @return self
     */
    public function setContract(string $contract)
    {
        $this->contract = $contract;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }
    /**
     * 
     *
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(string $statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeVerifyRequestData
     */
    public function getVerifyRequest()
    {
        return $this->verifyRequest;
    }
    /**
     * 
     *
     * @param ChtypeVerifyRequestData $verifyRequest
     *
     * @return self
     */
    public function setVerifyRequest(ChtypeVerifyRequestData $verifyRequest)
    {
        $this->verifyRequest = $verifyRequest;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFailureType()
    {
        return $this->failureType;
    }
    /**
     * 
     *
     * @param string $failureType
     *
     * @return self
     */
    public function setFailureType(string $failureType)
    {
        $this->failureType = $failureType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConsumerMessage()
    {
        return $this->consumerMessage;
    }
    /**
     * 
     *
     * @param string $consumerMessage
     *
     * @return self
     */
    public function setConsumerMessage(string $consumerMessage)
    {
        $this->consumerMessage = $consumerMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArn()
    {
        return $this->arn;
    }
    /**
     * 
     *
     * @param string $arn
     *
     * @return self
     */
    public function setArn(string $arn)
    {
        $this->arn = $arn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerified()
    {
        return $this->verified;
    }
    /**
     * 
     *
     * @param string $verified
     *
     * @return self
     */
    public function setVerified(string $verified)
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability()
    {
        return $this->liability;
    }
    /**
     * 
     *
     * @param string $liability
     *
     * @return self
     */
    public function setLiability(string $liability)
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
    /**
     * 
     *
     * @param string $responseCode
     *
     * @return self
     */
    public function setResponseCode(string $responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAttemptDetail
     */
    public function getAttemptDetail()
    {
        return $this->attemptDetail;
    }
    /**
     * 
     *
     * @param ChtypeAttemptDetail $attemptDetail
     *
     * @return self
     */
    public function setAttemptDetail(ChtypeAttemptDetail $attemptDetail)
    {
        $this->attemptDetail = $attemptDetail;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudResult[]
     */
    public function getFraudResults()
    {
        return $this->fraudResults;
    }
    /**
     * 
     *
     * @param ChtypeFraudResult[] $fraudResults
     *
     * @return self
     */
    public function setFraudResults(array $fraudResults)
    {
        $this->fraudResults = $fraudResults;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['tokenId' => $this->tokenId, 'transactionId' => $this->transactionId, 'details' => $this->details, 'paymentType' => $this->paymentType, 'paymentScheme' => $this->paymentScheme, 'transactionType' => $this->transactionType, 'requestAmount' => $this->requestAmount, 'transactedAmount' => $this->transactedAmount, 'contract' => $this->contract, 'statementDescriptor' => $this->statementDescriptor, 'result' => $this->result, 'verifyRequest' => $this->verifyRequest, 'failureType' => $this->failureType, 'consumerMessage' => $this->consumerMessage, 'arn' => $this->arn, 'verified' => $this->verified, 'liability' => $this->liability, 'responseCode' => $this->responseCode, 'attemptDetail' => $this->attemptDetail, 'fraudResults' => $this->fraudResults];
    }
}