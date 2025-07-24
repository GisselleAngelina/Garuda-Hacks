<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $heading ?? 'Nusantara Heritage' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active-nav {
            border-bottom: 2px solid #FFB627;
        }
    </style>
</head>

<x-layout>
    <x-slot:heading>About Page</x-slot:heading>
</x-layout>