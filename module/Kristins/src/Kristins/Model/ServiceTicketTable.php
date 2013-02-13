<?php
namespace Kristins\Model;

use Zend\Db\TableGateway\TableGateway;

class ServiceTicketTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getServiceTicket($id)
    {
        $rowset = $this->tableGateway->select(array('ServiceTicketNo' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveServiceTicket(ServiceTicket $serviceTicket,$id)
    {
        $data = array(
            'ServiceTicketNo' => $serviceTicket->ServiceTicketNo,
            'ServiceDate'  => $serviceTicket->ServiceDate,
        		'SalesMan' => $serviceTicket->SalesMan,
        		'TruckNo'  => $serviceTicket->TruckNo,
        		'PaymentTerms' => $serviceTicket->PaymentTerms,
        		'BillToName'  => $serviceTicket->BillToName,
        		'BillToAddress' => $serviceTicket->BillToAddress,
        		'BillToCity'  => $serviceTicket->BillToCity,
        		'BillToState' => $serviceTicket->BillToState,
        		'BillToZip'  => $serviceTicket->BillToZip,
        		'BillToContact' => $serviceTicket->BillToContact,
        		'BillToEmail'  => $serviceTicket->BillToEmail,
        		'ShipToName' => $serviceTicket->ShipToName,
        		'ShipToAddress'  => $serviceTicket->ShipToAddress,
        		'ShipToCity' => $serviceTicket->ShipToCity,
        		'ShipToState'  => $serviceTicket->ShipToState,
        		'ShipToZip' => $serviceTicket->ShipToZip,
        		'ShipToContact'  => $serviceTicket->ShipToContact,
        		'PONumber' => $serviceTicket->PONumber,
        		'Model'  => $serviceTicket->Model,
        		'Brand' => $serviceTicket->Brand,
        		'PullType'  => $serviceTicket->PullType,
        		'DetectorType' => $serviceTicket->DetectorType,
        		'AVType'  => $serviceTicket->AVType,
        		'ServicePeformed' => $serviceTicket->ServicePeformed,
        		'InternalNotes'  => $serviceTicket->InternalNotes,
        		'MileageCharge' => $serviceTicket->MileageCharge,
        		'ServiceCharge'  => $serviceTicket->ServiceCharge,
        		'SalesTax' => $serviceTicket->SalesTax,
        		'LeadTechnicianNo'  => $serviceTicket->LeadTechnicianNo,
        		'CustomerNo' => $serviceTicket->CustomerNo,
        		'PrintName'  => $serviceTicket->PrintName,
        		'FreightCharge' => $serviceTicket->FreightCharge,
        		'Submitted'  => $serviceTicket->Submitted,        		
        		'ProfitCenter'  => $serviceTicket->ProfitCenter,
        		'ServiceStatusId' => $serviceTicket->ServiceStatusId,
        		'ServiceTicketTypeId'  => $serviceTicket->ServiceTicketTypeId,
        		'SignaturePath' => $serviceTicket->SignaturePath,
        		'LastModified'  => $serviceTicket->LastModified
        );
        
        $serviceticketid = $serviceTicket->ServiceTicketNo;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getServiceTicket($serviceticketid)) {
            	
                $this->tableGateway->update($data, array('ServiceTicketNo' => $serviceticketid));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteServiceTicket($id)
    {
        $this->tableGateway->delete(array('ServiceTicketNo' => $id));
    }
}