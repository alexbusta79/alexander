<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'KristinsRest\Controller\ServiceTicketRest' => 'KristinsRest\Controller\ServiceTicketRestController',
        ),
    ),

    // The following section is new` and should be added to your file
    'router' => array(
        'routes' => array(
            'kristins-rest' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/kristins-rest[/:id]',
                    'constraints' => array(
                        'id'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'KristinsRest\Controller\ServiceTicketRest',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);