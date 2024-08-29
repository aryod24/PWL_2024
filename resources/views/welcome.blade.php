<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #d1d5db; 
        }
        ::after, ::before {
            --tw-content: '';
        }
        html {
            line-height: 1.6; 
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: 'Roboto', sans-serif; 
            font-feature-settings: normal;
        }
        body {
            margin: 0;
            line-height: inherit;
        }
        .flex {
            display: flex;
        }
        .justify-center {
            justify-content: center;
        }
        .mt-8 {
            margin-top: 2.5rem; 
        }
        .bg-blue-100 {
            background-color: rgb(227 242 253); 
        }
        .shadow-lg {
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -1px rgb(0 0 0 / 0.06); 
        }
        .rounded-md {
            border-radius: 0.375rem; 
        }
        .p-6 {
            padding: 2rem; 
        }
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .font-bold {
            font-weight: 700; 
        }
        .text-black {
            color: #111827; 
        }
        .text-blue-700 {
            color: #1d4ed8; 
        }
        .bg-blue-700 {
            background-color: #1d4ed8;
        }
        .text-white {
            color: #ffffff;
        }
        .p-8 {
            padding: 2rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #d1d5db; 
        }
        tr:nth-child(even) {
            background-color: #e7f5ff; 
        }
        .spacing td {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .colon-spacing strong::after {
            content: ' ';
        }
    </style>
</head>
<body>
    <div class="flex justify-center">
        <!-- SVG Logo -->
    </div>
    
<!-- Biodata -->
<div class="mt-8 bg-blue-100 overflow-hidden shadow-lg rounded-md">
    <div class="p-6">
        <h2 class="text-xl font-bold bg-blue-700 text-white p-8 rounded-md">Biodata Diri</h2>
        <table>
            <tr>
                <td style="padding-right: 20px;"><strong>Nama</strong></td>
                <td>: Aryo Wahyu Nugroho</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>Tempat/Tanggal Lahir</strong></td>
                <td>: Kediri, 24 Mei 2004</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>NIM</strong></td>
                <td>: 2241760074</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>Kelas</strong></td>
                <td>: SIB 3A</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>Prodi</strong></td>
                <td>: DIV Sistem Informasi Bisnis</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>Jurusan</strong></td>
                <td>: Teknologi Informasi</td>
            </tr>
            <tr>
                <td style="padding-right: 20px;"><strong>Alamat</strong></td>
                <td>: Lingkungan Tamanan RT 11 RW 002</td>
            </tr>
        </table>
    </div>
</div>

