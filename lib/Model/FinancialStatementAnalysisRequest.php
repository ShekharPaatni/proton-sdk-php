<?php
/**
 * FinancialStatementAnalysisRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\proton\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Proton API
 *
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.8.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\proton\Model;

use \ArrayAccess;
use \com\hydrogen\proton\ObjectSerializer;

/**
 * FinancialStatementAnalysisRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatementAnalysisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'financialStatementAnalysisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'period_length' => 'string',
        'period_month' => 'int',
        'end_date' => '\DateTime',
        'client_id' => 'string',
        'accounting_method' => 'string',
        'period_year' => 'int',
        'currency_conversion' => 'string',
        'history_frequency_interval' => 'string',
        'start_date' => '\DateTime',
        'period_type' => 'string',
        'currency_code' => 'string',
        'show_history' => 'bool',
        'stat_names' => 'string[]',
        'period_quarter' => 'int',
        'statement_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'period_length' => null,
        'period_month' => 'int32',
        'end_date' => 'date',
        'client_id' => 'uuid',
        'accounting_method' => null,
        'period_year' => 'int32',
        'currency_conversion' => null,
        'history_frequency_interval' => null,
        'start_date' => 'date',
        'period_type' => null,
        'currency_code' => null,
        'show_history' => null,
        'stat_names' => null,
        'period_quarter' => 'int32',
        'statement_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'period_length' => 'period_length',
        'period_month' => 'period_month',
        'end_date' => 'end_date',
        'client_id' => 'client_id',
        'accounting_method' => 'accounting_method',
        'period_year' => 'period_year',
        'currency_conversion' => 'currency_conversion',
        'history_frequency_interval' => 'history_frequency_interval',
        'start_date' => 'start_date',
        'period_type' => 'period_type',
        'currency_code' => 'currency_code',
        'show_history' => 'show_history',
        'stat_names' => 'stat_names',
        'period_quarter' => 'period_quarter',
        'statement_type' => 'statement_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_length' => 'setPeriodLength',
        'period_month' => 'setPeriodMonth',
        'end_date' => 'setEndDate',
        'client_id' => 'setClientId',
        'accounting_method' => 'setAccountingMethod',
        'period_year' => 'setPeriodYear',
        'currency_conversion' => 'setCurrencyConversion',
        'history_frequency_interval' => 'setHistoryFrequencyInterval',
        'start_date' => 'setStartDate',
        'period_type' => 'setPeriodType',
        'currency_code' => 'setCurrencyCode',
        'show_history' => 'setShowHistory',
        'stat_names' => 'setStatNames',
        'period_quarter' => 'setPeriodQuarter',
        'statement_type' => 'setStatementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_length' => 'getPeriodLength',
        'period_month' => 'getPeriodMonth',
        'end_date' => 'getEndDate',
        'client_id' => 'getClientId',
        'accounting_method' => 'getAccountingMethod',
        'period_year' => 'getPeriodYear',
        'currency_conversion' => 'getCurrencyConversion',
        'history_frequency_interval' => 'getHistoryFrequencyInterval',
        'start_date' => 'getStartDate',
        'period_type' => 'getPeriodType',
        'currency_code' => 'getCurrencyCode',
        'show_history' => 'getShowHistory',
        'stat_names' => 'getStatNames',
        'period_quarter' => 'getPeriodQuarter',
        'statement_type' => 'getStatementType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const PERIOD_LENGTH_ANNUAL = 'annual';
    const PERIOD_LENGTH_QUARTERLY = 'quarterly';
    const PERIOD_LENGTH_MONTHLY = 'monthly';
    const PERIOD_LENGTH_YTD = 'ytd';
    const PERIOD_LENGTH_QTD = 'qtd';
    const PERIOD_LENGTH_MTD = 'mtd';
    const ACCOUNTING_METHOD_ACCRUAL = 'accrual';
    const ACCOUNTING_METHOD_CASH = 'cash';
    const HISTORY_FREQUENCY_INTERVAL_DAY = 'day';
    const HISTORY_FREQUENCY_INTERVAL_WEEK = 'week';
    const HISTORY_FREQUENCY_INTERVAL_MONTH = 'month';
    const HISTORY_FREQUENCY_INTERVAL_QUARTER = 'quarter';
    const HISTORY_FREQUENCY_INTERVAL_YEAR = 'year';
    const PERIOD_TYPE_CALENDAR = 'calendar';
    const PERIOD_TYPE_FISCAL = 'fiscal';
    const STAT_NAMES_CASH = 'cash';
    const STAT_NAMES_ACCOUNTS_RECEIVABLE = 'accounts_receivable';
    const STAT_NAMES_TOTAL_ASSETS = 'total_assets';
    const STAT_NAMES_ACCOUNTS_PAYABLE = 'accounts_payable';
    const STAT_NAMES_TOTAL_LIABILITIES = 'total_liabilities';
    const STAT_NAMES_TOTAL_EQUITY = 'total_equity';
    const STAT_NAMES_TOTAL_REVENUE = 'total_revenue';
    const STAT_NAMES_COGS = 'cogs';
    const STAT_NAMES_TOTAL_EXPENSES = 'total_expenses';
    const STAT_NAMES_OPERATING_INCOME = 'operating_income';
    const STAT_NAMES_GROSS_PROFIT = 'gross_profit';
    const STAT_NAMES_NET_INCOME = 'net_income';
    const STAT_NAMES_EBITDA = 'ebitda';
    const STATEMENT_TYPE_INCOME_STATEMENT = 'income_statement';
    const STATEMENT_TYPE_BALANCE_SHEET = 'balance_sheet';
    const STATEMENT_TYPE_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodLengthAllowableValues()
    {
        return [
            self::PERIOD_LENGTH_ANNUAL,
            self::PERIOD_LENGTH_QUARTERLY,
            self::PERIOD_LENGTH_MONTHLY,
            self::PERIOD_LENGTH_YTD,
            self::PERIOD_LENGTH_QTD,
            self::PERIOD_LENGTH_MTD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountingMethodAllowableValues()
    {
        return [
            self::ACCOUNTING_METHOD_ACCRUAL,
            self::ACCOUNTING_METHOD_CASH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHistoryFrequencyIntervalAllowableValues()
    {
        return [
            self::HISTORY_FREQUENCY_INTERVAL_DAY,
            self::HISTORY_FREQUENCY_INTERVAL_WEEK,
            self::HISTORY_FREQUENCY_INTERVAL_MONTH,
            self::HISTORY_FREQUENCY_INTERVAL_QUARTER,
            self::HISTORY_FREQUENCY_INTERVAL_YEAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_CALENDAR,
            self::PERIOD_TYPE_FISCAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatNamesAllowableValues()
    {
        return [
            self::STAT_NAMES_CASH,
            self::STAT_NAMES_ACCOUNTS_RECEIVABLE,
            self::STAT_NAMES_TOTAL_ASSETS,
            self::STAT_NAMES_ACCOUNTS_PAYABLE,
            self::STAT_NAMES_TOTAL_LIABILITIES,
            self::STAT_NAMES_TOTAL_EQUITY,
            self::STAT_NAMES_TOTAL_REVENUE,
            self::STAT_NAMES_COGS,
            self::STAT_NAMES_TOTAL_EXPENSES,
            self::STAT_NAMES_OPERATING_INCOME,
            self::STAT_NAMES_GROSS_PROFIT,
            self::STAT_NAMES_NET_INCOME,
            self::STAT_NAMES_EBITDA,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatementTypeAllowableValues()
    {
        return [
            self::STATEMENT_TYPE_INCOME_STATEMENT,
            self::STATEMENT_TYPE_BALANCE_SHEET,
            self::STATEMENT_TYPE_ALL,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['period_length'] = isset($data['period_length']) ? $data['period_length'] : 'quarterly';
        $this->container['period_month'] = isset($data['period_month']) ? $data['period_month'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['accounting_method'] = isset($data['accounting_method']) ? $data['accounting_method'] : null;
        $this->container['period_year'] = isset($data['period_year']) ? $data['period_year'] : null;
        $this->container['currency_conversion'] = isset($data['currency_conversion']) ? $data['currency_conversion'] : null;
        $this->container['history_frequency_interval'] = isset($data['history_frequency_interval']) ? $data['history_frequency_interval'] : 'month';
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['period_type'] = isset($data['period_type']) ? $data['period_type'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['show_history'] = isset($data['show_history']) ? $data['show_history'] : false;
        $this->container['stat_names'] = isset($data['stat_names']) ? $data['stat_names'] : null;
        $this->container['period_quarter'] = isset($data['period_quarter']) ? $data['period_quarter'] : null;
        $this->container['statement_type'] = isset($data['statement_type']) ? $data['statement_type'] : 'all';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPeriodLengthAllowableValues();
        if (!is_null($this->container['period_length']) && !in_array($this->container['period_length'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period_length', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['period_month']) && ($this->container['period_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'period_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['period_month']) && ($this->container['period_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'period_month', must be bigger than or equal to 1.";
        }

        if ($this->container['accounting_method'] === null) {
            $invalidProperties[] = "'accounting_method' can't be null";
        }
        $allowedValues = $this->getAccountingMethodAllowableValues();
        if (!is_null($this->container['accounting_method']) && !in_array($this->container['accounting_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accounting_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHistoryFrequencyIntervalAllowableValues();
        if (!is_null($this->container['history_frequency_interval']) && !in_array($this->container['history_frequency_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'history_frequency_interval', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!is_null($this->container['period_type']) && !in_array($this->container['period_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['period_quarter']) && ($this->container['period_quarter'] > 4)) {
            $invalidProperties[] = "invalid value for 'period_quarter', must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['period_quarter']) && ($this->container['period_quarter'] < 1)) {
            $invalidProperties[] = "invalid value for 'period_quarter', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatementTypeAllowableValues();
        if (!is_null($this->container['statement_type']) && !in_array($this->container['statement_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'statement_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets period_length
     *
     * @return string
     */
    public function getPeriodLength()
    {
        return $this->container['period_length'];
    }

    /**
     * Sets period_length
     *
     * @param string $period_length period_length
     *
     * @return $this
     */
    public function setPeriodLength($period_length)
    {
        $allowedValues = $this->getPeriodLengthAllowableValues();
        if (!is_null($period_length) && !in_array($period_length, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period_length', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period_length'] = $period_length;

        return $this;
    }

    /**
     * Gets period_month
     *
     * @return int
     */
    public function getPeriodMonth()
    {
        return $this->container['period_month'];
    }

    /**
     * Sets period_month
     *
     * @param int $period_month period_month
     *
     * @return $this
     */
    public function setPeriodMonth($period_month)
    {

        if (!is_null($period_month) && ($period_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $period_month when calling FinancialStatementAnalysisRequest., must be smaller than or equal to 12.');
        }
        if (!is_null($period_month) && ($period_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $period_month when calling FinancialStatementAnalysisRequest., must be bigger than or equal to 1.');
        }

        $this->container['period_month'] = $period_month;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets accounting_method
     *
     * @return string
     */
    public function getAccountingMethod()
    {
        return $this->container['accounting_method'];
    }

    /**
     * Sets accounting_method
     *
     * @param string $accounting_method accounting_method
     *
     * @return $this
     */
    public function setAccountingMethod($accounting_method)
    {
        $allowedValues = $this->getAccountingMethodAllowableValues();
        if (!in_array($accounting_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accounting_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accounting_method'] = $accounting_method;

        return $this;
    }

    /**
     * Gets period_year
     *
     * @return int
     */
    public function getPeriodYear()
    {
        return $this->container['period_year'];
    }

    /**
     * Sets period_year
     *
     * @param int $period_year period_year
     *
     * @return $this
     */
    public function setPeriodYear($period_year)
    {
        $this->container['period_year'] = $period_year;

        return $this;
    }

    /**
     * Gets currency_conversion
     *
     * @return string
     */
    public function getCurrencyConversion()
    {
        return $this->container['currency_conversion'];
    }

    /**
     * Sets currency_conversion
     *
     * @param string $currency_conversion currency_conversion
     *
     * @return $this
     */
    public function setCurrencyConversion($currency_conversion)
    {
        $this->container['currency_conversion'] = $currency_conversion;

        return $this;
    }

    /**
     * Gets history_frequency_interval
     *
     * @return string
     */
    public function getHistoryFrequencyInterval()
    {
        return $this->container['history_frequency_interval'];
    }

    /**
     * Sets history_frequency_interval
     *
     * @param string $history_frequency_interval history_frequency_interval
     *
     * @return $this
     */
    public function setHistoryFrequencyInterval($history_frequency_interval)
    {
        $allowedValues = $this->getHistoryFrequencyIntervalAllowableValues();
        if (!is_null($history_frequency_interval) && !in_array($history_frequency_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'history_frequency_interval', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['history_frequency_interval'] = $history_frequency_interval;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets period_type
     *
     * @return string
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param string $period_type period_type
     *
     * @return $this
     */
    public function setPeriodType($period_type)
    {
        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!is_null($period_type) && !in_array($period_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period_type'] = $period_type;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets show_history
     *
     * @return bool
     */
    public function getShowHistory()
    {
        return $this->container['show_history'];
    }

    /**
     * Sets show_history
     *
     * @param bool $show_history show_history
     *
     * @return $this
     */
    public function setShowHistory($show_history)
    {
        $this->container['show_history'] = $show_history;

        return $this;
    }

    /**
     * Gets stat_names
     *
     * @return string[]
     */
    public function getStatNames()
    {
        return $this->container['stat_names'];
    }

    /**
     * Sets stat_names
     *
     * @param string[] $stat_names stat_names
     *
     * @return $this
     */
    public function setStatNames($stat_names)
    {
        $allowedValues = $this->getStatNamesAllowableValues();
        if (!is_null($stat_names) && array_diff($stat_names, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stat_names', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stat_names'] = $stat_names;

        return $this;
    }

    /**
     * Gets period_quarter
     *
     * @return int
     */
    public function getPeriodQuarter()
    {
        return $this->container['period_quarter'];
    }

    /**
     * Sets period_quarter
     *
     * @param int $period_quarter period_quarter
     *
     * @return $this
     */
    public function setPeriodQuarter($period_quarter)
    {

        if (!is_null($period_quarter) && ($period_quarter > 4)) {
            throw new \InvalidArgumentException('invalid value for $period_quarter when calling FinancialStatementAnalysisRequest., must be smaller than or equal to 4.');
        }
        if (!is_null($period_quarter) && ($period_quarter < 1)) {
            throw new \InvalidArgumentException('invalid value for $period_quarter when calling FinancialStatementAnalysisRequest., must be bigger than or equal to 1.');
        }

        $this->container['period_quarter'] = $period_quarter;

        return $this;
    }

    /**
     * Gets statement_type
     *
     * @return string
     */
    public function getStatementType()
    {
        return $this->container['statement_type'];
    }

    /**
     * Sets statement_type
     *
     * @param string $statement_type statement_type
     *
     * @return $this
     */
    public function setStatementType($statement_type)
    {
        $allowedValues = $this->getStatementTypeAllowableValues();
        if (!is_null($statement_type) && !in_array($statement_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statement_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statement_type'] = $statement_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


