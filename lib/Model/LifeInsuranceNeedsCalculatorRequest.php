<?php
/**
 * LifeInsuranceNeedsCalculatorRequest
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
 * LifeInsuranceNeedsCalculatorRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LifeInsuranceNeedsCalculatorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lifeInsuranceNeedsCalculatorRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'children_education_config' => '\com\hydrogen\proton\Model\ChildrenEducationConfig[]',
        'liquid_assets' => 'float',
        'other_debt' => 'float',
        'client_id' => 'string',
        'tax_rate' => 'float',
        'end_of_life_expenses' => 'float',
        'mortgage_balance' => 'float',
        'income_config' => '\com\hydrogen\proton\Model\IncomeConfig[]',
        'beneficiary_bequest_config' => '\com\hydrogen\proton\Model\BeneficiaryBequestConfig[]',
        'margin_of_error' => 'float',
        'education_inflation_rate' => 'float',
        'interest_rate' => 'float',
        'existing_life_insurance' => 'float',
        'benefit_amount_rounding' => 'int',
        'general_inflation_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'children_education_config' => null,
        'liquid_assets' => null,
        'other_debt' => null,
        'client_id' => 'uuid',
        'tax_rate' => 'float',
        'end_of_life_expenses' => null,
        'mortgage_balance' => null,
        'income_config' => null,
        'beneficiary_bequest_config' => null,
        'margin_of_error' => 'float',
        'education_inflation_rate' => 'float',
        'interest_rate' => 'float',
        'existing_life_insurance' => null,
        'benefit_amount_rounding' => 'int32',
        'general_inflation_rate' => 'float'
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
        'children_education_config' => 'children_education_config',
        'liquid_assets' => 'liquid_assets',
        'other_debt' => 'other_debt',
        'client_id' => 'client_id',
        'tax_rate' => 'tax_rate',
        'end_of_life_expenses' => 'end_of_life_expenses',
        'mortgage_balance' => 'mortgage_balance',
        'income_config' => 'income_config',
        'beneficiary_bequest_config' => 'beneficiary_bequest_config',
        'margin_of_error' => 'margin_of_error',
        'education_inflation_rate' => 'education_inflation_rate',
        'interest_rate' => 'interest_rate',
        'existing_life_insurance' => 'existing_life_insurance',
        'benefit_amount_rounding' => 'benefit_amount_rounding',
        'general_inflation_rate' => 'general_inflation_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'children_education_config' => 'setChildrenEducationConfig',
        'liquid_assets' => 'setLiquidAssets',
        'other_debt' => 'setOtherDebt',
        'client_id' => 'setClientId',
        'tax_rate' => 'setTaxRate',
        'end_of_life_expenses' => 'setEndOfLifeExpenses',
        'mortgage_balance' => 'setMortgageBalance',
        'income_config' => 'setIncomeConfig',
        'beneficiary_bequest_config' => 'setBeneficiaryBequestConfig',
        'margin_of_error' => 'setMarginOfError',
        'education_inflation_rate' => 'setEducationInflationRate',
        'interest_rate' => 'setInterestRate',
        'existing_life_insurance' => 'setExistingLifeInsurance',
        'benefit_amount_rounding' => 'setBenefitAmountRounding',
        'general_inflation_rate' => 'setGeneralInflationRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'children_education_config' => 'getChildrenEducationConfig',
        'liquid_assets' => 'getLiquidAssets',
        'other_debt' => 'getOtherDebt',
        'client_id' => 'getClientId',
        'tax_rate' => 'getTaxRate',
        'end_of_life_expenses' => 'getEndOfLifeExpenses',
        'mortgage_balance' => 'getMortgageBalance',
        'income_config' => 'getIncomeConfig',
        'beneficiary_bequest_config' => 'getBeneficiaryBequestConfig',
        'margin_of_error' => 'getMarginOfError',
        'education_inflation_rate' => 'getEducationInflationRate',
        'interest_rate' => 'getInterestRate',
        'existing_life_insurance' => 'getExistingLifeInsurance',
        'benefit_amount_rounding' => 'getBenefitAmountRounding',
        'general_inflation_rate' => 'getGeneralInflationRate'
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
        $this->container['children_education_config'] = isset($data['children_education_config']) ? $data['children_education_config'] : null;
        $this->container['liquid_assets'] = isset($data['liquid_assets']) ? $data['liquid_assets'] : null;
        $this->container['other_debt'] = isset($data['other_debt']) ? $data['other_debt'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : 0.0;
        $this->container['end_of_life_expenses'] = isset($data['end_of_life_expenses']) ? $data['end_of_life_expenses'] : null;
        $this->container['mortgage_balance'] = isset($data['mortgage_balance']) ? $data['mortgage_balance'] : null;
        $this->container['income_config'] = isset($data['income_config']) ? $data['income_config'] : null;
        $this->container['beneficiary_bequest_config'] = isset($data['beneficiary_bequest_config']) ? $data['beneficiary_bequest_config'] : null;
        $this->container['margin_of_error'] = isset($data['margin_of_error']) ? $data['margin_of_error'] : 0.0;
        $this->container['education_inflation_rate'] = isset($data['education_inflation_rate']) ? $data['education_inflation_rate'] : 0.0;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        $this->container['existing_life_insurance'] = isset($data['existing_life_insurance']) ? $data['existing_life_insurance'] : null;
        $this->container['benefit_amount_rounding'] = isset($data['benefit_amount_rounding']) ? $data['benefit_amount_rounding'] : 0;
        $this->container['general_inflation_rate'] = isset($data['general_inflation_rate']) ? $data['general_inflation_rate'] : 0.0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['liquid_assets']) && ($this->container['liquid_assets'] < 0)) {
            $invalidProperties[] = "invalid value for 'liquid_assets', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['other_debt']) && ($this->container['other_debt'] < 0)) {
            $invalidProperties[] = "invalid value for 'other_debt', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tax_rate']) && ($this->container['tax_rate'] > 1)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['tax_rate']) && ($this->container['tax_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['end_of_life_expenses']) && ($this->container['end_of_life_expenses'] < 0)) {
            $invalidProperties[] = "invalid value for 'end_of_life_expenses', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['mortgage_balance']) && ($this->container['mortgage_balance'] < 0)) {
            $invalidProperties[] = "invalid value for 'mortgage_balance', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['margin_of_error']) && ($this->container['margin_of_error'] < 0)) {
            $invalidProperties[] = "invalid value for 'margin_of_error', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['education_inflation_rate']) && ($this->container['education_inflation_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'education_inflation_rate', must be bigger than or equal to -1.";
        }

        if ($this->container['interest_rate'] === null) {
            $invalidProperties[] = "'interest_rate' can't be null";
        }
        if (($this->container['interest_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'interest_rate', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['existing_life_insurance']) && ($this->container['existing_life_insurance'] < 0)) {
            $invalidProperties[] = "invalid value for 'existing_life_insurance', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['benefit_amount_rounding']) && ($this->container['benefit_amount_rounding'] > 12)) {
            $invalidProperties[] = "invalid value for 'benefit_amount_rounding', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['benefit_amount_rounding']) && ($this->container['benefit_amount_rounding'] < 0)) {
            $invalidProperties[] = "invalid value for 'benefit_amount_rounding', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['general_inflation_rate']) && ($this->container['general_inflation_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'general_inflation_rate', must be bigger than or equal to -1.";
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
     * Gets children_education_config
     *
     * @return \com\hydrogen\proton\Model\ChildrenEducationConfig[]
     */
    public function getChildrenEducationConfig()
    {
        return $this->container['children_education_config'];
    }

    /**
     * Sets children_education_config
     *
     * @param \com\hydrogen\proton\Model\ChildrenEducationConfig[] $children_education_config children_education_config
     *
     * @return $this
     */
    public function setChildrenEducationConfig($children_education_config)
    {
        $this->container['children_education_config'] = $children_education_config;

        return $this;
    }

    /**
     * Gets liquid_assets
     *
     * @return float
     */
    public function getLiquidAssets()
    {
        return $this->container['liquid_assets'];
    }

    /**
     * Sets liquid_assets
     *
     * @param float $liquid_assets liquid_assets
     *
     * @return $this
     */
    public function setLiquidAssets($liquid_assets)
    {

        if (!is_null($liquid_assets) && ($liquid_assets < 0)) {
            throw new \InvalidArgumentException('invalid value for $liquid_assets when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['liquid_assets'] = $liquid_assets;

        return $this;
    }

    /**
     * Gets other_debt
     *
     * @return float
     */
    public function getOtherDebt()
    {
        return $this->container['other_debt'];
    }

    /**
     * Sets other_debt
     *
     * @param float $other_debt other_debt
     *
     * @return $this
     */
    public function setOtherDebt($other_debt)
    {

        if (!is_null($other_debt) && ($other_debt < 0)) {
            throw new \InvalidArgumentException('invalid value for $other_debt when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['other_debt'] = $other_debt;

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
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {

        if (!is_null($tax_rate) && ($tax_rate > 1)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling LifeInsuranceNeedsCalculatorRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($tax_rate) && ($tax_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets end_of_life_expenses
     *
     * @return float
     */
    public function getEndOfLifeExpenses()
    {
        return $this->container['end_of_life_expenses'];
    }

    /**
     * Sets end_of_life_expenses
     *
     * @param float $end_of_life_expenses end_of_life_expenses
     *
     * @return $this
     */
    public function setEndOfLifeExpenses($end_of_life_expenses)
    {

        if (!is_null($end_of_life_expenses) && ($end_of_life_expenses < 0)) {
            throw new \InvalidArgumentException('invalid value for $end_of_life_expenses when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['end_of_life_expenses'] = $end_of_life_expenses;

        return $this;
    }

    /**
     * Gets mortgage_balance
     *
     * @return float
     */
    public function getMortgageBalance()
    {
        return $this->container['mortgage_balance'];
    }

    /**
     * Sets mortgage_balance
     *
     * @param float $mortgage_balance mortgage_balance
     *
     * @return $this
     */
    public function setMortgageBalance($mortgage_balance)
    {

        if (!is_null($mortgage_balance) && ($mortgage_balance < 0)) {
            throw new \InvalidArgumentException('invalid value for $mortgage_balance when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['mortgage_balance'] = $mortgage_balance;

        return $this;
    }

    /**
     * Gets income_config
     *
     * @return \com\hydrogen\proton\Model\IncomeConfig[]
     */
    public function getIncomeConfig()
    {
        return $this->container['income_config'];
    }

    /**
     * Sets income_config
     *
     * @param \com\hydrogen\proton\Model\IncomeConfig[] $income_config income_config
     *
     * @return $this
     */
    public function setIncomeConfig($income_config)
    {
        $this->container['income_config'] = $income_config;

        return $this;
    }

    /**
     * Gets beneficiary_bequest_config
     *
     * @return \com\hydrogen\proton\Model\BeneficiaryBequestConfig[]
     */
    public function getBeneficiaryBequestConfig()
    {
        return $this->container['beneficiary_bequest_config'];
    }

    /**
     * Sets beneficiary_bequest_config
     *
     * @param \com\hydrogen\proton\Model\BeneficiaryBequestConfig[] $beneficiary_bequest_config beneficiary_bequest_config
     *
     * @return $this
     */
    public function setBeneficiaryBequestConfig($beneficiary_bequest_config)
    {
        $this->container['beneficiary_bequest_config'] = $beneficiary_bequest_config;

        return $this;
    }

    /**
     * Gets margin_of_error
     *
     * @return float
     */
    public function getMarginOfError()
    {
        return $this->container['margin_of_error'];
    }

    /**
     * Sets margin_of_error
     *
     * @param float $margin_of_error margin_of_error
     *
     * @return $this
     */
    public function setMarginOfError($margin_of_error)
    {

        if (!is_null($margin_of_error) && ($margin_of_error < 0)) {
            throw new \InvalidArgumentException('invalid value for $margin_of_error when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['margin_of_error'] = $margin_of_error;

        return $this;
    }

    /**
     * Gets education_inflation_rate
     *
     * @return float
     */
    public function getEducationInflationRate()
    {
        return $this->container['education_inflation_rate'];
    }

    /**
     * Sets education_inflation_rate
     *
     * @param float $education_inflation_rate education_inflation_rate
     *
     * @return $this
     */
    public function setEducationInflationRate($education_inflation_rate)
    {

        if (!is_null($education_inflation_rate) && ($education_inflation_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $education_inflation_rate when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to -1.');
        }

        $this->container['education_inflation_rate'] = $education_inflation_rate;

        return $this;
    }

    /**
     * Gets interest_rate
     *
     * @return float
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param float $interest_rate interest_rate
     *
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {

        if (($interest_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $interest_rate when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to -1.');
        }

        $this->container['interest_rate'] = $interest_rate;

        return $this;
    }

    /**
     * Gets existing_life_insurance
     *
     * @return float
     */
    public function getExistingLifeInsurance()
    {
        return $this->container['existing_life_insurance'];
    }

    /**
     * Sets existing_life_insurance
     *
     * @param float $existing_life_insurance existing_life_insurance
     *
     * @return $this
     */
    public function setExistingLifeInsurance($existing_life_insurance)
    {

        if (!is_null($existing_life_insurance) && ($existing_life_insurance < 0)) {
            throw new \InvalidArgumentException('invalid value for $existing_life_insurance when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['existing_life_insurance'] = $existing_life_insurance;

        return $this;
    }

    /**
     * Gets benefit_amount_rounding
     *
     * @return int
     */
    public function getBenefitAmountRounding()
    {
        return $this->container['benefit_amount_rounding'];
    }

    /**
     * Sets benefit_amount_rounding
     *
     * @param int $benefit_amount_rounding benefit_amount_rounding
     *
     * @return $this
     */
    public function setBenefitAmountRounding($benefit_amount_rounding)
    {

        if (!is_null($benefit_amount_rounding) && ($benefit_amount_rounding > 12)) {
            throw new \InvalidArgumentException('invalid value for $benefit_amount_rounding when calling LifeInsuranceNeedsCalculatorRequest., must be smaller than or equal to 12.');
        }
        if (!is_null($benefit_amount_rounding) && ($benefit_amount_rounding < 0)) {
            throw new \InvalidArgumentException('invalid value for $benefit_amount_rounding when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to 0.');
        }

        $this->container['benefit_amount_rounding'] = $benefit_amount_rounding;

        return $this;
    }

    /**
     * Gets general_inflation_rate
     *
     * @return float
     */
    public function getGeneralInflationRate()
    {
        return $this->container['general_inflation_rate'];
    }

    /**
     * Sets general_inflation_rate
     *
     * @param float $general_inflation_rate general_inflation_rate
     *
     * @return $this
     */
    public function setGeneralInflationRate($general_inflation_rate)
    {

        if (!is_null($general_inflation_rate) && ($general_inflation_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $general_inflation_rate when calling LifeInsuranceNeedsCalculatorRequest., must be bigger than or equal to -1.');
        }

        $this->container['general_inflation_rate'] = $general_inflation_rate;

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

