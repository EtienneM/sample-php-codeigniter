<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="website" property="og:type">
    <meta content="https://cdn.scalingo.com/homepage/assets/fb-33a6a93ddbf90bfdae57407481aa05a4.png" property="og:image">
    <meta content="Deploying your own PHP/CodeIgniter app on Scalingo is as easy as pie: JUST CLICK THIS BUTTON! It will be up in less than 2 minutes!" property='og:description'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Greetings from a sample PHP app built with the CodeIgniter framework!</title>

    <link rel="shortcut icon" href="https://scalingo.com/favicon.ico" type="image/vnd.microsoft.icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <style>
      body { color: #373a3c; font-family: 'Roboto', sans-serif; font-size: 1rem; line-height: 1.5; font-weight: 300; }
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        color: inherit;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        margin-bottom: 1rem;
        margin-top: 0;
      }
      a { color: #0275d8; text-decoration: none; background-color: transparent; }
      a:focus, a:hover { color: #014c8c; text-decoration: underline; text-decoration: none; }
      a:focus { outline: thin dotted; outline-offset: -2px; }
      .container { margin: 0 auto; text-align: center; }
      .hero { padding: 3rem 1.5rem; }
      .love { margin-bottom: 2rem; }
      h1 { font-size: 2.5rem; margin-bottom: 2rem; }
      h2 { font-size: 1.6rem; font-weight: 300; }
      small { margin-top: 0; }
      .btn {
        overflow: visible;
        text-transform: uppercase;
        text-decoration: none;
        margin: 1em 0;
        -moz-user-select: none;
        border-radius: 0.25rem;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        padding: 0.375rem 1rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background-color: #0275d8;
        border-color: #0275d8;
        color: #fff;
        border-radius: 0.3rem;
        font-size: 1.25rem;
        line-height: 1.33333;
        padding: 0.75rem 1.25rem;
      }
      .btn:hover, .btn:focus, .btn:active { background-color: #025aa5; border-color: #01549b; color: #fff; background-image: none; }
      .btn:active:focus, .btn:active:hover { background-color: #014682; border-color: #01315a; color: #fff; }
      .scalingo-logo { max-width: 100%; height: auto; width: 330px; }
      .heart-logo { margin: 0 20px; width:56px;position:relative; top:-18px; }
      .tech-logo { width:56px;position:relative;top:-18px; }
      @media (min-width:768px){
        .container { width: 800px; }
        .one-liner { display: block; }
      }
      @media (max-width:767px){
        .scalingo-logo, .heart-logo, .tech-logo { display: block; position: unset; margin: 0 auto; }
        .scalingo-logo, .heart-logo { margin-bottom: 1rem; }
      }
    </style>
  </head>
  <body>
    <div class="container hero">
      <div class="love">
        <img class="scalingo-logo" alt="Scalingo" src="https://scalingo.com/logo-lightgrey.svg">
        <img class="heart-logo" alt="love" src="https://cdn.scalingo.com/documentation/heart.png">
        <svg xmlns="http://www.w3.org/2000/svg" class="tech-logo" viewBox="0 0 24 24"><g id="Codeigniter"><path d="M16.87,8.65l-.1-.06a.5.5,0,0,0-.77.49.68.68,0,0,1-.17.56A1.16,1.16,0,0,1,15,10a1.05,1.05,0,0,1-1-1,4.46,4.46,0,0,1,.23-1.6,5.39,5.39,0,0,0,.27-1.9c0-2-.24-3.08-2.66-5.36A.5.5,0,0,0,11,.6C11.58,3.46,9.83,5,7.61,6.87,7,7.43,6.29,8,5.65,8.65,2.63,11.66,2,14.31,2,16c0,3,1.11,6.79,6.39,8h.12a.5.5,0,0,0,.25-.94C6.87,21.31,6.5,20.43,6.5,19.5a4.38,4.38,0,0,1,1.19-2.58A2.07,2.07,0,0,0,8,18.09,2.42,2.42,0,0,0,10,19c1.18,0,2-1,2-2.5a2.94,2.94,0,0,0-1.07-1.94A2.55,2.55,0,0,1,10,13a3,3,0,0,1,.24-1.16,3.25,3.25,0,0,0,1,1.06c.25.18.62.42,1.05.69,1.66,1,4.74,3,4.74,4.9,0,2.48-.91,3.24-2.79,4.59a.5.5,0,0,0,.29.91h.11c3.63-.8,7.39-4,7.39-8S18.54,9.74,16.87,8.65Z" style="fill:#303c42"/></g></svg>
      </div>

      <h1>Greetings from a sample PHP app <br/> built with the CodeIgniter framework!</h1>
      <h2>
        <span style="display:block;"><span class="one-liner">Deploying your own PHP/CodeIgniter app on Scalingo</span> is as easy as pie:</span>

        <a class="btn" href="https://my.scalingo.com/deploy?source=https://github.com/Scalingo/sample-php-codeigniter">Just click this button!</a>
        <span style="display:block;">It will be up in less than 2 minutes!</span>
      </h2>
      <p>The code of this sample lives <a href="https://github.com/Scalingo/sample-php-codeigniter">on GitHub</a>. You can find <a href="http://samples.scalingo.com">more samples here</a>.</p>
    </div>

    <footer>
      <div class="container">
        <p>
          <span class="one-liner"><a href="https://scalingo.com">Scalingo</a> is the best Platform as a Service on the market:</span>
          no server to install, no dependencies to install, just push your code!
        </p>
      </div>
    </footer>
  </body>
</html>
