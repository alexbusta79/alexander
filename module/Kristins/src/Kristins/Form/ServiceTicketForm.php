<?php
namespace Kristins\Form;

use Zend\Form\Form;

class ServiceTicketForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('kristins');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'ServiceTicketNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceTicketNo',
            ),
        ));
        $this->add(array(
            'name' => 'ServiceDate',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceDate',
            ),
        ));
        $this->add(array(
            'name' => 'SalesMan',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SalesMan',
            ),
        ));
        $this->add(array(
            'name' => 'TruckNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'TruckNo',
            ),
        ));
        $this->add(array(
            'name' => 'PaymentTerms',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PaymentTerms',
            ),
        ));
        $this->add(array(
            'name' => 'BillToName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToName',
            ),
        ));
        $this->add(array(
            'name' => 'BillToAddress',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToAddress',
            ),
        ));
        $this->add(array(
            'name' => 'BillToCity',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToCity',
            ),
        ));
        $this->add(array(
            'name' => 'BillToState',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToState',
            ),
        ));
        $this->add(array(
            'name' => 'BillToZip',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToZip',
            ),
        ));
        $this->add(array(
            'name' => 'BillToContact',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToContact',
            ),
        ));
        $this->add(array(
            'name' => 'BillToEmail',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'BillToEmail',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToName',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToAddress',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToAddress',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToCity',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToCity',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToState',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToState',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToZip',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToZip',
            ),
        ));
        $this->add(array(
            'name' => 'ShipToContact',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ShipToContact',
            ),
        ));
        $this->add(array(
            'name' => 'PONumber',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PONumber',
            ),
        ));
        $this->add(array(
            'name' => 'Model',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Model',
            ),
        ));
        $this->add(array(
            'name' => 'Brand',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Brand',
            ),
        ));
        $this->add(array(
            'name' => 'PullType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PullType',
            ),
        ));
        $this->add(array(
            'name' => 'DetectorType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'DetectorType',
            ),
        )); 
        $this->add(array(
            'name' => 'AVType',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'AVType',
            ),
        )); 
        $this->add(array(
            'name' => 'ServicePeformed',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServicePeformed',
            ),
        ));
        $this->add(array(
            'name' => 'InternalNotes',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'InternalNotes',
            ),
        ));
        $this->add(array(
            'name' => 'MileageCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'MileageCharge',
            ),
        ));
        $this->add(array(
            'name' => 'ServiceCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceCharge',
            ),
        ));
        $this->add(array(
            'name' => 'SalesTax',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SalesTax',
            ),
        ));
        $this->add(array(
            'name' => 'LeadTechnicianNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'LeadTechnicianNo',
            ),
        ));
        $this->add(array(
            'name' => 'CustomerNo',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'CustomerNo',
            ),
        ));
        $this->add(array(
            'name' => 'PrintName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'PrintName',
            ),
        ));
        $this->add(array(
            'name' => 'FreightCharge',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'FreightCharge',
            ),
        ));
        $this->add(array(
            'name' => 'Submitted',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Submitted',
            ),
        ));
        $this->add(array(
            'name' => 'ProfitCenter',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ProfitCenter',
            ),
        ));
        $this->add(array(
            'name' => 'ServiceStatusId',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceStatusId',
            ),
        ));
        $this->add(array(
            'name' => 'ServiceTicketTypeId',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'ServiceTicketTypeId',
            ),
        ));
        $this->add(array(
            'name' => 'SignaturePath',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'SignaturePath',
            ),
        ));
        $this->add(array(
            'name' => 'LastModified',
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