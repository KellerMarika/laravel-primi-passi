<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    //variabili

    $user = [
        'username' => "PierinoVasino",
        'email' => 'nasoLungo23@dogmail.com',
        'password' => '1234'
    ];

    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];

    //array associativo
    return view('home', [
        "user" => $user,
        "nav" => $nav,

    ]);
})->name("home");


Route::get("/contacts", function () {
    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];
    return view("contacts", [

        "nav" => $nav,

    ]);
})->name("contacts");


Route::get("/login", function () {
    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];

    return view("login", [
        "nav" => $nav,
    ]);
})->name("login");


Route::get("/abaut", function () {
    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];


    return view("abaut", [
        "nav" => $nav,
    ]);
})->name("abaut");


Route::get("/azienda", function () {
    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];


    return view("azienda", [
        "nav" => $nav,
    ]);
})->name("azienda");


Route::get("/filiali", function () {
    $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];


    return view("filiali", [
        "nav" => $nav,
    ]);
})->name("filiali");


Route::get("/fornitori", function () {
     $nav = [

        [
            'name' => "home",
            'href' => '/home',
        ],
        [
            'name' => "cotact us",
            'href' => '/contacts',
        ],
        [
            'name' => "About Us",
            'href' => '#',
            'dropdown' => [
                [
                    'name' => "azienda",
                    'href' => '/azienda',
                ],
                [
                    'name' => "fornitori",
                    'href' => '/fornitori',
                ],
                [
                    'name' => "filiali",
                    'href' => '/filiali',
                ],
            ]
        ],
        [
            'name' => "login",
            'href' => '/login',
        ],
    ];


    return view("fornitori", [
        "nav" => $nav,
    ]);
})->name("fornitori");