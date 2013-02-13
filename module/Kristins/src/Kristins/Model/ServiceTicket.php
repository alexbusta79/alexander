<?php
namespace Kristins\Model;

use Zend\InputFilter\Factory as InputFactory;     // <-- Add this import
use Zend\InputFilter\InputFilter;                 // <-- Add this import
use Zend\InputFilter\InputFilterAwareInterface;   // <-- Add this import
use Zend\InputFilter\InputFilterInterface;        // <-- Add this import

class ServiceTicket implements InputFilterAwareInterface
{

    public $ServiceTicketNo;
    public $ServiceDate;
    public $SalesMan;
    public $TruckNo;
    public $PaymentTerms;
    public $BillToName;
    public $BillToAddress;
    public $BillToCity;
    public $BillToState;
    public $BillToZip;
    public $BillToContact;
    public $BillToEmail;
    public $ShipToName;
    public $ShipToAddress;
    public $ShipToCity;
    public $ShipToState;
    public $ShipToZip;
    public $ShipToContact;
    public $PONumber;
    public $Model;
    public $Brand;
    public $PullType;
    public $DetectorType;
    public $AVType;
    public $ServicePeformed;
    public $InternalNotes;
    public $MileageCharge;
    public $ServiceCharge;
    public $SalesTax;
    public $LeadTechnicianNo;
    public $CustomerNo;
    public $PrintName;
    public $FreightCharge;
    public $Submitted;
    public $ProfitCenter;
    public $ServiceStatusId;
    public $ServiceTicketTypeId;
    public $SignaturePath;
    public $LastModified;

    protected $inputFilter;                       // <-- Add this variable


    public function exchangeArray($data)
    {
        $this->ServiceTicketNo     = (isset($data['ServiceTicketNo']))  ? $data['ServiceTicketNo']     : null;
        $this->ServiceDate = (isset($data['ServiceDate'])) ? $data['ServiceDate'] : null;
        $this->SalesMan  = (isset($data['SalesMan']))  ? $data['SalesMan']  : null;
        $this->TruckNo     = (isset($data['TruckNo']))     ? $data['TruckNo']     : null;
        $this->PaymentTerms = (isset($data['PaymentTerms'])) ? $data['PaymentTerms'] : null;
        $this->BillToName  = (isset($data['BillToName']))  ? $data['BillToName']  : null;
        $this->BillToAddress     = (isset($data['BillToAddress']))     ? $data['BillToAddress']     : null;
        $this->BillToCity = (isset($data['BillToCity'])) ? $data['BillToCity'] : null;
        $this->BillToState  = (isset($data['BillToState']))  ? $data['BillToState']  : null;
        $this->BillToZip     = (isset($data['BillToZip']))     ? $data['BillToZip']     : null;
        $this->BillToContact = (isset($data['BillToContact'])) ? $data['BillToContact'] : null;
        $this->BillToEmail  = (isset($data['BillToEmail']))  ? $data['BillToEmail']  : null;
        $this->ShipToName     = (isset($data['ShipToName']))     ? $data['ShipToName']     : null;
        $this->ShipToAddress = (isset($data['ShipToAddress'])) ? $data['ShipToAddress'] : null;
        $this->ShipToCity  = (isset($data['ShipToCity']))  ? $data['ShipToCity']  : null;
        $this->ShipToState     = (isset($data['ShipToState']))     ? $data['ShipToState']     : null;
        $this->ShipToZip = (isset($data['ShipToZip'])) ? $data['ShipToZip'] : null;
        $this->ShipToContact  = (isset($data['ShipToContact']))  ? $data['ShipToContact']  : null;    
        $this->PONumber     = (isset($data['PONumber']))     ? $data['PONumber']     : null;
        $this->Model = (isset($data['Model'])) ? $data['Model'] : null;
        $this->Brand  = (isset($data['Brand']))  ? $data['Brand']  : null;
        $this->PullType     = (isset($data['PullType']))     ? $data['PullType']     : null;
        $this->DetectorType = (isset($data['DetectorType'])) ? $data['DetectorType'] : null;
        $this->AVType  = (isset($data['AVType']))  ? $data['AVType']  : null;
        $this->ServicePeformed     = (isset($data['ServicePeformed']))     ? $data['ServicePeformed']     : null;
        $this->InternalNotes = (isset($data['InternalNotes'])) ? $data['InternalNotes'] : null;
        $this->MileageCharge  = (isset($data['MileageCharge']))  ? $data['MileageCharge']  : null;
        $this->ServiceCharge     = (isset($data['ServiceCharge']))     ? $data['ServiceCharge']     : null;
        $this->SalesTax = (isset($data['SalesTax'])) ? $data['SalesTax'] : null;
        $this->LeadTechnicianNo  = (isset($data['LeadTechnicianNo']))  ? $data['LeadTechnicianNo']  : null;
        $this->CustomerNo     = (isset($data['CustomerNo']))     ? $data['CustomerNo']     : null;
        $this->PrintName = (isset($data['PrintName'])) ? $data['PrintName'] : null;
        $this->FreightCharge  = (isset($data['FreightCharge']))  ? $data['FreightCharge']  : null;
        $this->Submitted     = (isset($data['Submitted']))     ? $data['Submitted']     : null;
        $this->ProfitCenter = (isset($data['ProfitCenter'])) ? $data['ProfitCenter'] : null;
        $this->ServiceStatusId  = (isset($data['ServiceStatusId']))  ? $data['ServiceStatusId']  : null;
        $this->ServiceTicketTypeId     = (isset($data['ServiceTicketTypeId']))     ? $data['ServiceTicketTypeId']     : null;
        $this->SignaturePath = (isset($data['SignaturePath'])) ? $data['SignaturePath'] : null;
        $this->LastModified  = (isset($data['LastModified']))  ? $data['LastModified']  : null;
        
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

//             $inputFilter->add($factory->createInput(array(
//                 'name'     => 'id',
//                 'required' => true,
//                 'filters'  => array(
//                     array('name' => 'Int'),
//                 ),
//             )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'SalesMan',
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
                'name'     => 'TruckNo',
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