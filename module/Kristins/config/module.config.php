<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Kristins\Controller\ServiceTicket' => 'Kristins\Controller\ServiceTicketController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'kristins' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/kristins[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Kristins\Controller\ServiceTicket',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'kristins' => __DIR__ . '/../view',
        ),
    ),
);