<?php
return [
    "teachers" => [
        "role" => "teacher",
        "resource" => "users",
        "fieldsExtra" => ['department']
    ],
    "students" => [
        "role" => "student",
        "resource" => "users",
    ],
    "users" => [
        "fields" => ['name', 'email', 'dni', 'phone', 'password'],
    ],
    "projects" => [
        "fields" => ['title', 'description', 'hours', 'start_date'],
    ],
    "tasks" => [
        "fields" => ['name', 'description', 'priority', 'status'],
    ],
    "guests" => [
        "role" => "guest",
        "resource" => "users",
    ],
];
