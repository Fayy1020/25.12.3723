<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Profil Mahasiswa</title>
        <style>
            body {
                background: linear-gradient(135deg, #667eea, #764ba2);
                font-family: Arial;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .card {
                background: rgba(255,255,255,0.1);
                padding: 30px;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            }
            h1 {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>👨‍💻 Profil Mahasiswa</h1>
            <p><b>NIM:</b> 25.12.3723</p>
            <p><b>Nama:</b> Ferdinan Ardiyanto</p>
        </div>
    </body>
    </html>
    ';
});