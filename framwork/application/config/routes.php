<?php

return [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'lrs/add' => [
        'controller' => 'main',
        'action' => 'add',
    ],

    'lrs/{id}/edit' => [
        'controller' => 'main',
        'action' => 'edit',
    ],

    'lrs/{id}/delete' => [
        'controller' => 'main',
        'action' => 'delete',
    ],

    'users/show' => [
        'controller' => 'user',
        'action' => 'index',
    ],

    'users/add' => [
        'controller' => 'user',
        'action' => 'add',
    ],

    'users/{id}/edit' => [
        'controller' => 'user',
        'action' => 'edit',
    ],

    'users/{id}/delete' => [
        'controller' => 'user',
        'action' => 'delete',
    ],


    'pages/{id}/show' => [
        'controller' => 'pages',
        'action' => 'show',
    ],

    'pages/{id}/state/show' => [
        'controller' => 'state',
        'action' => 'show',
    ],

    'pages/{id}/statements/show' => [
        'controller' => 'statements',
        'action' => 'show',
    ],

    'pages/{id}/clients/show' => [
        'controller' => 'clients',
        'action' => 'show',
    ],

    'pages/{id}/clients/add' => [
        'controller' => 'clients',
        'action' => 'add',
    ],


];