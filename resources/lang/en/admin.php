<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'tabla' => [
        'title' => 'Tabla',

        'actions' => [
            'index' => 'Tabla',
            'create' => 'New Tabla',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nomrbe' => 'Nomrbe',
            'Direccion' => 'Direccion',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];