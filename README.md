ZendSkeletonApplication
=======================

Introduction
------------
This is a simple, Kristins ServiceTicket Rest Application using the ZF2 MVC layer and module
systems. 

Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use composer to install dependencies:

    cd kristins
    php composer.phar install

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!

Test
-----
curl -i -H "Accept: application/json" http://rest/kristins-rest
curl -i -H "Accept: application/json" http://rest/kristins-rest/SEO-13-88888
curl -i -H "Accept: application/json" http://rest/album-rest
curl -i -H "Accept: application/json" -X POST -d "ServiceTicketNo = SEO-99-99999&ServiceDate = 2013-03-01&SalesMan = 3&TruckNo = 3&PaymentTerms = 3&BillToName = 3&BillToAddress = 3 &BillToCity = 3&BillToState = 3&BillToZip= 3&BillToContact  = 3&BillToEmail   = 3&ShipToName  = 3&ShipToAddress = 3&ShipToCity  = 3&ShipToState = 3&ShipToZip = 3&ShipToContact = 3&PONumber = 3&Model = 3&Brand = 3&PullType = 3&DetectorType = 3&AVType = 3&ServicePeformed = 3&InternalNotes = 3&MileageCharge = 3&ServiceCharge = 3&SalesTax  = 3&LeadTechnicianNo = 3&CustomerNo = 3&PrintName = 3&FreightCharge = 3&Submitted = 3&ProfitCenter = 3&ServiceStatusId  = 3&ServiceTicketTypeId = 3&SignaturePath  = 3&LastModified =" http://rest/kristins-rest
curl -i -H "Accept: application/json" -X PUT -d "DATA"
curl -i -H "Accept: application/json" -X DELETE http://rest/kristins-rest/SEO-13-77777