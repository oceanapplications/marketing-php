<?php

namespace Maropost\Api;

use Maropost\Api\Abstractions\Api;
use Maropost\Api\Abstractions\OperationResult;

/**
 * Class Campaigns
 * @package Maropost\Api
 */
class Campaigns
{
    use Api;

    /**
     * Campaigns constructor.
     * @param $accountId
     * @param $authToken
     */
    public function __construct($accountId, $authToken)
    {
        $this->auth_token = $authToken;
        $this->accountId = $accountId;
        $this->resource = 'campaigns';
    }

    /**
     * Gets the list of campaigns
     * @return OperationResult
     */
    public function get(): OperationResult
    {
        return $this->_get();
    }

    /**
     * Gets the list of delivered report for the specified campaign
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getDeliveredReports(int $id): OperationResult
    {
        $overrideUrl = $this->resource . "/$id";
        return $this->_get('delivered_report', [], $overrideUrl);
    }

    /**
     * Gets a list of Open Reports for the sepcified Campaign
     *
     * @param int $id The campaign ID
     * @param bool|null $unique Gets for unique contacts
     * @return OperationResult
     */
    public function getOpenReports(int $id, bool $unique = null): OperationResult
    {
        $params = [];
        if (!empty($unique)) {
            $params['unique'] = $unique === true ? 'true' : 'false';
        }

        $overrideUrl = $this->resource . "/$id";
        return $this->_get('open_report', $params, $overrideUrl);
    }

    /**
     * Gets a list of Click Reports for the sepcified Campaign
     *
     * @param int $id The campaign ID
     * @param bool|null $unique Gets for unique contacts
     * @return OperationResult
     */
    public function getClickReports(int $id, bool $unique = null): OperationResult
    {
        $params = [];
        if (!empty($unique)) {
            $params['unique'] = $unique === true ? 'true' : 'false';
        }

        $overrideUrl = $this->resource . "/$id";
        return $this->_get('click_report', $params, $overrideUrl);
    }

    /**
     * Gets a list of Link Reports for the specified Campaign
     *
     * @param int $id The campaign ID
     * @param bool|null $unique Gets for unique contacts
     * @return OperationResult
     */
    public function getLinkReports(int $id, bool $unique = null): OperationResult
    {
        $params = [];
        if (!empty($unique)) {
            $params['unique'] = $unique === true ? 'true' : 'false';
        }

        $overrideUrl = $this->resource . "/$id";
        return $this->_get('link_report', $params, $overrideUrl);

    }

    /**
     * Gets a list of Bounce Reports for the specified Campaign
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getBounceReports(int $id): OperationResult
    {
        $overrideUrl = $this->resource . "/$id";
        return $this->_get('bounce_report', [], $overrideUrl);
    }

    /**
     * Gets a list of soft bounce reports for the specified Campaign
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getSoftBounceReports(int $id): OperationResult
    {
        $overrideUrl = $this->resource . "/$id";
        return $this->_get('soft_bounce_report', [], $overrideUrl);
    }

    /**
     * Gets a list of hard bounces for the specified campaigns
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getHardBounceReports(int $id): OperationResult
    {
        $overrideUrl = $this->resource . "/$id";
        return $this->_get('hard_bounce_report', [], $overrideUrl);
    }

    /**
     * Gets a list of unsubsrcibe reports for the specified campaign
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getUnsubscribeReports(int $id): OperationResult
    {

        $overrideUrl = $this->resource . "/$id";
        return $this->_get('unsubscribe_report', [], $overrideUrl);
    }

    /**
     * Gets a list of complain reports for the specified campaign
     *
     * @param int $id The campaign ID
     * @return OperationResult
     */
    public function getComplaintReports(int $id): OperationResult
    {

        $overrideUrl = $this->resource . "/$id";
        return $this->_get('complaint_report', [], $overrideUrl);
    }


}