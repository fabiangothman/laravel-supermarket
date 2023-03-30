<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda los compitas | Home</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('hardcoded_styles.css') }}" >
  </head>
  <body>
    <div id="app">
      <header id="header">
        <nav class="left">
          <a href="{{ route('home') }}" class="link {{ Request::routeIs('home') ? 'linkActive' : '' }}">{{ config('app.name') }}</a>
        </nav>
        <nav class="right">
          @auth
            <!--  Menu for admin -->
            <div class="link">
              <a href="{{ route('products.index') }}" class="{{ Request::routeIs('products.index') ? 'linkActive' : '' }}">Lista de productos</a>
            </div>
            <div class="link">
              <a href="{{ route('products.create') }}" class="{{ Request::routeIs('products.create') ? 'linkActive' : '' }}">Crear producto</a>
            </div>
            <div class="link">
              <a href="{{ route('logout') }}">Logout</a>
            </div>
          @else
            <!--  Menu for users -->
            <div class="link">
              <a href="{{ route('products.index') }}" class="{{ Request::routeIs('products.index') ? 'linkActive' : '' }}">Lista de productos</a>
            </div>
            <div class="link">
              <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'linkActive' : '' }}">Contáctenos</a>
            </div>
            <div class="link">
              <a href="{{ route('login') }}" class="{{ Request::routeIs('login') ? 'linkActive' : '' }}">Login</a>
            </div>
          @endauth
        </nav>
      </header>

      <div id="bodyContent">
