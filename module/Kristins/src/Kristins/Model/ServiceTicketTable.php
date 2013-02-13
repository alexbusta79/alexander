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
    	echo 'sono quaaaaaaaaaaaaaa'; exit();
        $data = array(
            'ServiceTicketNo' => $serviceTicket->serviceTicketNo,
            'ServiceDate'  => $serviceTicket->serviceDate,
        		'SalesMan' => $serviceTicket->salesMan,
        		'TruckNo'  => $serviceTicket->truckNo,
        		'PaymentTerms' => $serviceTicket->paymentTerms,
        		'BillToName'  => $serviceTicket->billToName,
        		'BillToAddress' => $serviceTicket->billToAddress,
        		'BillToCity'  => $serviceTicket->billToCity,
        		'BillToState' => $serviceTicket->billToState,
        		'BillToZip'  => $serviceTicket->billToZip,
        		'BillToContact' => $serviceTicket->billToContact,
        		'BillToEmail'  => $serviceTicket->billToEmail,
        		'ShipToName' => $serviceTicket->shipToName,
        		'ShipToAddress'  => $serviceTicket->shipToAddress,
        		'ShipToCity' => $serviceTicket->shipToCity,
        		'ShipToState'  => $serviceTicket->shipToState,
        		'ShipToZip' => $serviceTicket->shipToZip,
        		'ShipToContact'  => $serviceTicket->shipToContact,
        		'PONumber' => $serviceTicket->pONumber,
        		'Model'  => $serviceTicket->model,
        		'Brand' => $serviceTicket->brand,
        		'PullType'  => $serviceTicket->pullType,
        		'DetectorType' => $serviceTicket->detectorType,
        		'AVType'  => $serviceTicket->aVType,
        		'ServicePeformed' => $serviceTicket->servicePeformed,
        		'InternalNotes'  => $serviceTicket->internalNotes,
        		'MileageCharge' => $serviceTicket->mileageCharge,
        		'ServiceCharge'  => $serviceTicket->serviceCharge,
        		'SalesTax' => $serviceTicket->salesTax,
        		'LeadTechnicianNo'  => $serviceTicket->leadTechnicianNo,
        		'CustomerNo' => $serviceTicket->customerNo,
        		'PrintName'  => $serviceTicket->printName,
        		'FreightCharge' => $serviceTicket->freightCharge,
        		'Submitted'  => $serviceTicket->submitted,        		
        		'ProfitCenter'  => $serviceTicket->profitCenter,
        		'ServiceStatusId' => $serviceTicket->serviceStatusId,
        		'ServiceTicketTypeId'  => $serviceTicket->serviceTicketTypeId,
        		'SignaturePath' => $serviceTicket->signaturePath,
        		'LastModified'  => $serviceTicket->lastModified
        );
        
        $serviceticketid = $serviceTicket->serviceTicketNo;
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