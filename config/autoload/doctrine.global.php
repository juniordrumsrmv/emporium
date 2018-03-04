<?php

use Doctrine\ORM\EntityManager;
use Application\Entity\User;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    ]
                ],
            ],
        ],
        'authentication' => [
            'orm_default' => array(
                'object_manager' => EntityManager::class,
                'identity_class' => User::class,
                'identity_property' => 'alternateId',
                'credential_property' => 'password',
                'credential_callable' => function (User $user, $passwordSent) {
                    return password_verify($passwordSent, $user->getPassword());
                }
            )
        ]
    ]
];