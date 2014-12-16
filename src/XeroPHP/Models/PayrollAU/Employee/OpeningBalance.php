<?php

namespace XeroPHP\Models\PayrollAU\Employee;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Payslip\EarningsLine;
use XeroPHP\Models\PayrollAU\Payslip\DeductionLine;
use XeroPHP\Models\PayrollAU\Payslip\ReimbursementLine;

class OpeningBalance extends Remote\Object {

    /**
     * Opening Balance Date. (YYYY-MM-DD)
     *
     * @property \DateTime OpeningBalanceDate
     */

    /**
     * Opening Balance tax
     *
     * @property string Tax
     */

    /**
     * The EarningsLines of the OpeningBalance.
     *
     * @property EarningsLine[] EarningsLines
     */

    /**
     * The DeductionLines of the OpeningBalance.
     *
     * @property DeductionLine[] DeductionLines
     */

    /**
     * The SuperLines of the OpeningBalance.
     *
     * @property string[] SuperLines
     */

    /**
     * The ReimbursementLines of the OpeningBalance.
     *
     * @property ReimbursementLine[] ReimbursementLines
     */

    /**
     * The LeaveLines of the OpeningBalance.
     *
     * @property string[] LeaveLines
     */

    /**
     * Xero earnings rate identifier
     *
     * @property string EarningsRateID
     */

    /**
     * Reimbursement type amount
     *
     * @property float Amount
     */

    /**
     * Xero deduction type identifier
     *
     * @property string DeductionTypeID
     */

    /**
     * Xero super membership ID
     *
     * @property string SuperMembershipID
     */

    /**
     * Calculation type for Super line
     *
     * @property string CalculationType
     */

    /**
     * Xero reimbursement type identifier
     *
     * @property string ReimbursementTypeID
     */

    /**
     * Xero leave type identifier
     *
     * @property string LeaveTypeID
     */

    /**
     * Leave number of units
     *
     * @property string[] NumberOfUnits
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'OpeningBalance';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'OpeningBalanceDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'Tax' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'EarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\EarningsLine', true),
            'DeductionLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\DeductionLine', true),
            'SuperLines' => array (false, self::PROPERTY_TYPE_STRING, null, true),
            'ReimbursementLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\ReimbursementLine', true),
            'LeaveLines' => array (false, self::PROPERTY_TYPE_STRING, null, true),
            'EarningsRateID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false),
            'DeductionTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'SuperMembershipID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'CalculationType' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'ReimbursementTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'LeaveTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'NumberOfUnits' => array (false, self::PROPERTY_TYPE_STRING, null, true)
        );
    }


    /**
     * @return \DateTime
     */
    public function getOpeningBalanceDate(){
        return $this->_data['OpeningBalanceDate'];
    }

    /**
     * @param \DateTime $value
     * @return OpeningBalance
     */
    public function setOpeningBalanceDate(\DateTime $value){
        $this->_dirty['OpeningBalanceDate'] = $this->_data['OpeningBalanceDate'] != $value;
        $this->_data['OpeningBalanceDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTax(){
        return $this->_data['Tax'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setTax($value){
        $this->_dirty['Tax'] = $this->_data['Tax'] != $value;
        $this->_data['Tax'] = $value;
        return $this;
    }

    /**
     * @return EarningsLine
     */
    public function getEarningsLines(){
        return $this->_data['EarningsLines'];
    }

    /**
     * @param EarningsLine[] $value
     * @return OpeningBalance
     */
    public function addEarningsLine(EarningsLine $value){
        $this->_dirty['EarningsLines'] = true;
        $this->_data['EarningsLines'][] = $value;
        return $this;
    }

    /**
     * @return DeductionLine
     */
    public function getDeductionLines(){
        return $this->_data['DeductionLines'];
    }

    /**
     * @param DeductionLine[] $value
     * @return OpeningBalance
     */
    public function addDeductionLine(DeductionLine $value){
        $this->_dirty['DeductionLines'] = true;
        $this->_data['DeductionLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperLines(){
        return $this->_data['SuperLines'];
    }

    /**
     * @param string[] $value
     * @return OpeningBalance
     */
    public function addSuperLine($value){
        $this->_dirty['SuperLines'] = true;
        $this->_data['SuperLines'][] = $value;
        return $this;
    }

    /**
     * @return ReimbursementLine
     */
    public function getReimbursementLines(){
        return $this->_data['ReimbursementLines'];
    }

    /**
     * @param ReimbursementLine[] $value
     * @return OpeningBalance
     */
    public function addReimbursementLine(ReimbursementLine $value){
        $this->_dirty['ReimbursementLines'] = true;
        $this->_data['ReimbursementLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeaveLines(){
        return $this->_data['LeaveLines'];
    }

    /**
     * @param string[] $value
     * @return OpeningBalance
     */
    public function addLeaveLine($value){
        $this->_dirty['LeaveLines'] = true;
        $this->_data['LeaveLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEarningsRateID(){
        return $this->_data['EarningsRateID'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setEarningsRateID($value){
        $this->_dirty['EarningsRateID'] = $this->_data['EarningsRateID'] != $value;
        $this->_data['EarningsRateID'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(){
        return $this->_data['Amount'];
    }

    /**
     * @param float $value
     * @return OpeningBalance
     */
    public function setAmount($value){
        $this->_dirty['Amount'] = $this->_data['Amount'] != $value;
        $this->_data['Amount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeductionTypeID(){
        return $this->_data['DeductionTypeID'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setDeductionTypeID($value){
        $this->_dirty['DeductionTypeID'] = $this->_data['DeductionTypeID'] != $value;
        $this->_data['DeductionTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperMembershipID(){
        return $this->_data['SuperMembershipID'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setSuperMembershipID($value){
        $this->_dirty['SuperMembershipID'] = $this->_data['SuperMembershipID'] != $value;
        $this->_data['SuperMembershipID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculationType(){
        return $this->_data['CalculationType'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setCalculationType($value){
        $this->_dirty['CalculationType'] = $this->_data['CalculationType'] != $value;
        $this->_data['CalculationType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReimbursementTypeID(){
        return $this->_data['ReimbursementTypeID'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setReimbursementTypeID($value){
        $this->_dirty['ReimbursementTypeID'] = $this->_data['ReimbursementTypeID'] != $value;
        $this->_data['ReimbursementTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeaveTypeID(){
        return $this->_data['LeaveTypeID'];
    }

    /**
     * @param string $value
     * @return OpeningBalance
     */
    public function setLeaveTypeID($value){
        $this->_dirty['LeaveTypeID'] = $this->_data['LeaveTypeID'] != $value;
        $this->_data['LeaveTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfUnits(){
        return $this->_data['NumberOfUnits'];
    }

    /**
     * @param string[] $value
     * @return OpeningBalance
     */
    public function addNumberOfUnit($value){
        $this->_dirty['NumberOfUnits'] = true;
        $this->_data['NumberOfUnits'][] = $value;
        return $this;
    }


}