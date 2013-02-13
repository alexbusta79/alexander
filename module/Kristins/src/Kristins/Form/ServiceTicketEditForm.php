<?php
namespace Kristins\Form;

use Zend\Form\Form;

class ServiceTicketEditForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('kristins');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'serviceTicketNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceTicketNo',
            ),
        ));
        $this->add(array(
            'name' => 'serviceDate',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceDate',
            ),
        ));
        $this->add(array(
            'name' => 'salesMan',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SalesMan',
            ),
        ));
        $this->add(array(
            'name' => 'truckNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'TruckNo',
            ),
        ));
        $this->add(array(
            'name' => 'paymentTerms',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PaymentTerms',
            ),
        ));
        $this->add(array(
            'name' => 'billToName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToName',
            ),
        ));
        $this->add(array(
            'name' => 'billToAddress',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToAddress',
            ),
        ));
        $this->add(array(
            'name' => 'billToCity',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToCity',
            ),
        ));
        $this->add(array(
            'name' => 'billToState',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToState',
            ),
        ));
        $this->add(array(
            'name' => 'billToZip',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToZip',
            ),
        ));
        $this->add(array(
            'name' => 'billToContact',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToContact',
            ),
        ));
        $this->add(array(
            'name' => 'billToEmail',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToEmail',
            ),
        ));
        $this->add(array(
            'name' => 'shipToName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToName',
            ),
        ));
        $this->add(array(
            'name' => 'shipToAddress',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToAddress',
            ),
        ));
        $this->add(array(
            'name' => 'shipToCity',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToCity',
            ),
        ));
        $this->add(array(
            'name' => 'shipToState',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToState',
            ),
        ));
        $this->add(array(
            'name' => 'shipToZip',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToZip',
            ),
        ));
        $this->add(array(
            'name' => 'shipToContact',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToContact',
            ),
        ));
        $this->add(array(
            'name' => 'pONumber',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PONumber',
            ),
        ));
        $this->add(array(
            'name' => 'model',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Model',
            ),
        ));
        $this->add(array(
            'name' => 'brand',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Brand',
            ),
        ));
        $this->add(array(
            'name' => 'pullType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PullType',
            ),
        ));
        $this->add(array(
            'name' => 'detectorType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'DetectorType',
            ),
        )); 
        $this->add(array(
            'name' => 'aVType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'AVType',
            ),
        )); 
        $this->add(array(
            'name' => 'servicePeformed',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServicePeformed',
            ),
        ));
        $this->add(array(
            'name' => 'internalNotes',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'InternalNotes',
            ),
        ));
        $this->add(array(
            'name' => 'mileageCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'MileageCharge',
            ),
        ));
        $this->add(array(
            'name' => 'serviceCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceCharge',
            ),
        ));
        $this->add(array(
            'name' => 'salesTax',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SalesTax',
            ),
        ));
        $this->add(array(
            'name' => 'leadTechnicianNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'LeadTechnicianNo',
            ),
        ));
        $this->add(array(
            'name' => 'customerNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'CustomerNo',
            ),
        ));
        $this->add(array(
            'name' => 'printName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PrintName',
            ),
        ));
        $this->add(array(
            'name' => 'freightCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'FreightCharge',
            ),
        ));
        $this->add(array(
            'name' => 'submitted',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Submitted',
            ),
        ));
        $this->add(array(
            'name' => 'profitCenter',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ProfitCenter',
            ),
        ));
        $this->add(array(
            'name' => 'serviceStatusId',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceStatusId',
            ),
        ));
        $this->add(array(
            'name' => 'serviceTicketTypeId',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceTicketTypeId',
            ),
        ));
        $this->add(array(
            'name' => 'signaturePath',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SignaturePath',
            ),
        ));
        $this->add(array(
            'name' => 'lastModified',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'LastModified',
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}