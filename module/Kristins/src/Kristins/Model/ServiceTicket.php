<?php
namespace Kristins\Model;

use Zend\InputFilter\Factory as InputFactory;     // <-- Add this import
use Zend\InputFilter\InputFilter;                 // <-- Add this import
use Zend\InputFilter\InputFilterAwareInterface;   // <-- Add this import
use Zend\InputFilter\InputFilterInterface;        // <-- Add this import

class ServiceTicket implements InputFilterAwareInterface
{
    public $serviceTicketNo;
    public $serviceDate;
    public $salesMan;
    public $truckNo;
    public $paymentTerms;
    public $billToName;
    public $billToAddress;
    public $billToCity;
    public $billToState;
    public $billToZip;
    public $billToContact;
    public $billToEmail;
    public $shipToName;
    public $shipToAddress;
    public $shipToCity;
    public $shipToState;
    public $shipToZip;
    public $shipToContact;
    public $pONumber;
    public $model;
    public $brand;
    public $pullType;
    public $detectorType;
    public $aVType;
    public $servicePeformed;
    public $internalNotes;
    public $mileageCharge;
    public $serviceCharge;
    public $salesTax;
    public $leadTechnicianNo;
    public $customerNo;
    public $printName;
    public $freightCharge;
    public $submitted;
    public $profitCenter;
    public $serviceStatusId;
    public $serviceTicketTypeId;
    public $signaturePath;
    public $lastModified;

    protected $inputFilter;                       // <-- Add this variable


    public function exchangeArray($data)
    {
        $this->serviceTicketNo     = (isset($data['ServiceTicketNo']))  ? $data['ServiceTicketNo']     : null;
        $this->serviceDate = (isset($data['ServiceDate'])) ? $data['ServiceDate'] : null;
        $this->salesMan  = (isset($data['SalesMan']))  ? $data['SalesMan']  : null;
        $this->truckNo     = (isset($data['TruckNo']))     ? $data['TruckNo']     : null;
        $this->paymentTerms = (isset($data['PaymentTerms'])) ? $data['PaymentTerms'] : null;
        $this->billToName  = (isset($data['BillToName']))  ? $data['BillToName']  : null;
        $this->billToAddress     = (isset($data['BillToAddress']))     ? $data['BillToAddress']     : null;
        $this->billToCity = (isset($data['BillToCity'])) ? $data['BillToCity'] : null;
        $this->billToState  = (isset($data['BillToState']))  ? $data['BillToState']  : null;
        $this->billToZip     = (isset($data['BillToZip']))     ? $data['BillToZip']     : null;
        $this->billToContact = (isset($data['BillToContact'])) ? $data['BillToContact'] : null;
        $this->billToEmail  = (isset($data['BillToEmail']))  ? $data['BillToEmail']  : null;
        $this->shipToName     = (isset($data['ShipToName']))     ? $data['ShipToName']     : null;
        $this->shipToAddress = (isset($data['ShipToAddress'])) ? $data['ShipToAddress'] : null;
        $this->shipToCity  = (isset($data['ShipToCity']))  ? $data['ShipToCity']  : null;
        $this->shipToState     = (isset($data['ShipToState']))     ? $data['ShipToState']     : null;
        $this->shipToZip = (isset($data['ShipToZip'])) ? $data['ShipToZip'] : null;
        $this->shipToContact  = (isset($data['ShipToContact']))  ? $data['ShipToContact']  : null;    
        $this->pONumber     = (isset($data['PONumber']))     ? $data['PONumber']     : null;
        $this->model = (isset($data['Model'])) ? $data['Model'] : null;
        $this->brand  = (isset($data['Brand']))  ? $data['Brand']  : null;
        $this->pullType     = (isset($data['PullType']))     ? $data['PullType']     : null;
        $this->detectorType = (isset($data['DetectorType'])) ? $data['DetectorType'] : null;
        $this->aVType  = (isset($data['AVType']))  ? $data['AVType']  : null;
        $this->servicePeformed     = (isset($data['ServicePeformed']))     ? $data['ServicePeformed']     : null;
        $this->internalNotes = (isset($data['InternalNotes'])) ? $data['InternalNotes'] : null;
        $this->mileageCharge  = (isset($data['MileageCharge']))  ? $data['MileageCharge']  : null;
        $this->serviceCharge     = (isset($data['ServiceCharge']))     ? $data['ServiceCharge']     : null;
        $this->salesTax = (isset($data['SalesTax'])) ? $data['SalesTax'] : null;
        $this->leadTechnicianNo  = (isset($data['LeadTechnicianNo']))  ? $data['LeadTechnicianNo']  : null;
        $this->customerNo     = (isset($data['CustomerNo']))     ? $data['CustomerNo']     : null;
        $this->printName = (isset($data['PrintName'])) ? $data['PrintName'] : null;
        $this->freightCharge  = (isset($data['FreightCharge']))  ? $data['FreightCharge']  : null;
        $this->submitted     = (isset($data['Submitted']))     ? $data['Submitted']     : null;
        $this->profitCenter = (isset($data['ProfitCenter'])) ? $data['ProfitCenter'] : null;
        $this->serviceStatusId  = (isset($data['ServiceStatusId']))  ? $data['ServiceStatusId']  : null;
        $this->serviceTicketTypeId     = (isset($data['ServiceTicketTypeId']))     ? $data['ServiceTicketTypeId']     : null;
        $this->signaturePath = (isset($data['SignaturePath'])) ? $data['SignaturePath'] : null;
        $this->lastModified  = (isset($data['LastModified']))  ? $data['LastModified']  : null;
        
    }

    // Add content to this method:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getArrayCopy()
    {
    	return get_object_vars($this);
    }
    
    
    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $factory     = new InputFactory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'artist',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'title',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
}