<?php
return [
    "teachers" => [
        "role" => "teacher",
    ],
    "students" => [
        "role" => "student",
    ],
    "users" => [
        "fields"=>['name','email','dni','phone','password','department'],
    ],
    "projects" => [
    "fields"=>['name','description','hours','start_date'],

],
    "tasks" => [
    "fields"=>['name','description','priority','status'],
],
    "guests" => [
    "role" => "guest",
],//Son usuarios registrados que no son studiantes, teachers .


];


