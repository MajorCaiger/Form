<?php

return [
    'view_helpers' => [
        'invokables' => [
            'form' => 'MajorTable\View\Helper\Form',
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'form/form' => __DIR__ . '/../view/form/form.phtml',
        ],
    ],
];
