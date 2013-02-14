<?php
namespace KristinsRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Kristins\Model\ServiceTicket;          // <-- Add this import
use Kristins\Form\ServiceTicketForm;       // <-- Add this import
use Kristins\Model\ServiceTicketTable;     // <-- Add this import
use Zend\View\Model\JsonModel;

class ServiceTicketRestController extends AbstractRestfulController
{
    protected $serviceTicket;

    public function getList()
    {
        $results = $this->getServiceTicketTable()->fetchAll();
        $data = array();
        foreach($results as $result) {
            $data[] = $result;
        }

        return new JsonModel(array(
            'data' => $data,
        ));
    }

    public function get($id)
    {
        $getserviceTicket = $this->getServiceTicketTable()->getServiceTicket($id);

        return new JsonModel(array(
            'data' => $getserviceTicket,
        ));
    }

    public function create($data)
    {
        $form = new ServiceTicketForm();
        $addserviceTicket = new ServiceTicket();
        $form->setInputFilter($addserviceTicket->getInputFilter());
        $form->setData($data);
        if ($form->isValid()) {            
            $addserviceTicket->exchangeArray($form->getData());
            $this->getServiceTicketTable()->saveServiceTicket($addserviceTicket,0);
        }

        return new JsonModel(array(
            'data' => $this->get($id),
        ));
    }

    public function update($id, $data)
    {
        $data['id'] = $id;
        $updateserviceTicket = $this->getServiceTicketTable()->getServiceTicket($id);
        $form = new ServiceTicketForm();
        $form->bind($updateserviceTicket);
        $form->setInputFilter($updateserviceTicket->getInputFilter());
        $form->setData($data);
        if ($form->isValid()) {
            $id = $this->getServiceTicketTable()->saveServiceTicket($form->getData(),1);
        }

        return new JsonModel(array(
            'data' => $this->get($id),
        ));
    }

    public function delete($id)
    {
        $this->getServiceTicketTable()->deleteServiceTicket($id);

        return new JsonModel(array(
            'data' => 'deleted',
        ));
    }


    public function getServiceTicketTable()
    {
        if (!$this->serviceTicket) {
            $sm = $this->getServiceLocator();
            $this->serviceTicket = $sm->get('Kristins\Model\ServiceTicketTable');
        }
        return $this->serviceTicket;
    }
}