<?php

return [
    'name' => 'Hrm',

    'menus' => [
        ['header' => 'Human Resource', 'order' => 3],
        [
            'text' => 'Employees',
            'icon' => 'fas fa-users',
            'can' => 'employees-read',
            'order' => 3,
            'submenu' => [
                [
                    'text' => 'Add Designation',
                    'route' => 'admin.designations.create',
                    'can' => 'designations-create',
                ],
                [
                    'text' => 'Designation List',
                    'route' => 'admin.designations.index',
                    'can' => 'designations-read',
                ],
                [
                    'text' => 'Add Employee',
                    'route' => 'admin.employees.index',
                    'can' => 'employees-read',
                ],
                [
                    'text' => 'Employee List',
                    'route' => 'admin.employees.index',
                    'can' => 'employees-read',
                ],
            ],
        ],
    ],
];
