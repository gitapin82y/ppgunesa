<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Nunito:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <title>@yield('title') | PPG UNESA</title>
    <link rel="icon" href="{{asset('assets/logo/unesa.png')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('style.css')}}">

    @stack('style')
    <style>
      .breadcrumb-item.active {
        color: white !important;
        font-weight: lighter;
      }
      .breadcrumb-item a {
        color: white;
        text-decoration: none !important;
        font-weight: 700 !important;
      }
      #welcome {
        height: 55vh !important;
        background-color: #763996;
        color: white;
        font-weight: bold;
        text-align: center;
        animation: color 6s alternate infinite;
        padding-top: 100px;
      }
      @keyframes color {
        0% {
          background-color: #763996;
        }
        50% {
          background-color: #394596;
        }
        100% {
          background-color: #397296;
        }
      }
      #content {
        margin-top: -80px;
        margin-bottom: 60px;
        height: auto;
        box-shadow: #34343421 0px 10px 30px;
        width: 90%;
        left: 50%;
        transform: translate(-50%);
        position: relative;
        padding: 40px;
        padding-top: 0px;
        border-radius: 10px;
        background-color: white;
      }
      .card-item:nth-child(1) {
        background-color: #63e38e;
      }
      .card-item:nth-child(2) {
        background-color: rgb(103, 212, 237);
      }
      .card-item:nth-child(3) {
        background-color: #6376e3;
      }
      .card-item:nth-child(4) {
        background-color: #e36363;
      }
      .card-item:nth-child(5) {
        background-color: #d8e363;
      }
      .card-item:nth-child(6) {
        background-color: #e363d0;
      }
      .card-item:nth-child(7) {
        background-color: #e3bd63;
      }
      #content .card-item {
        border-radius: 10px;
        padding: 20px;
        color: white;
        text-decoration: none;
        width: 20rem;
        height: 34vh;
        text-align: center;
        transition: 0.3s;
        scale: 1;
        opacity: 0;
      }
      .bottomToTop {
        animation: bottomToTop 1s alternate forwards;
      }

      @keyframes bottomToTop {
        from {
          margin-top: 140px;
          opacity: 0;
        }
        to {
          margin-top: 40px;
          opacity: 1;
        }
      }
      #content .card-item:hover {
        transition: 0.3s;
        cursor: pointer;
        scale: 1.1;
      }
      #content .card-item:hover::before {
        opacity: 0.4;
        transition: 0.3s;
      }
      #content .card-item::before {
        content: "";
        border-radius: 10px;
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
        top: 0;
        opacity: 0;
        left: 0;
        background-color: rgb(33, 33, 33);
      }
      #content .card-item:hover p {
        opacity: 1;
        transform: translateY(0px);
      }
      #content .card-item p {
        opacity: 0;
        transition: 0.3s;
        transform: translateY(30px);
      }
      #content .card-item:hover .child {
        margin-top: 0;
      }
      .breadcrumb-item::before {
        color: white !important;
      }
      .child {
        transition: 0.3s;

        margin-top: 30px;
        top: 50%;
        transform: translateY(-50%);
        position: relative;
      }
      body {
        background-color: #f5f6fb;
      }
      .btn-main {
        padding: 10px 20px !important;
        background-color: #763996;
        border-radius: 10px;
        color: white !important;
        text-decoration: none;
      }
      .btn-header {
        padding: 15px 25px !important;
        background-color: #763996;
        font-size: 20px;
        border-radius: 10px;
        color: white !important;
        text-decoration: none;
      }
      body {
        padding: 0;
        margin: 0;
        overflow-x: hidden;
        font-family: "Nunito", sans-serif;
      }
      h1,
      h2,
      h3 {
        font-family: "Montserrat", sans-serif;
      }
      #header h1 span {
        color: #763996;
      }
      #header p {
        font-size: 20px;
      }
      #header h1 {
        font-size: 42px;
      }
      .desainRight {
        position: absolute;
        right: 0;
        top: 0;
        height: 70vh;
        z-index: -1;
      }
      a.menu:hover {
        color: #763996 !important;
        font-weight: bold;
      }
      .active {
        color: #763996 !important;
        font-weight: bold;
      }
      .desainLeftTop {
        position: absolute;
        left: 0;
        top: 0;

        z-index: -1;
      }

      @keyframes card {
        from {
          transform: scale(1);
        }
        to {
          transform: scale(1.1);
        }
      }
      #content .circle i {
        font-size: 24px;
      }
      #content .circle {
        left: 50%;
        margin-bottom: 10px;
        transform: translateX(-50%);
        position: relative;
        height: 60px;
        padding: 16px;
        width: 60px;
        background-color: rgba(255, 255, 255, 0.289);
        border-radius: 60px;
      }
      .desainLeftBottom {
        position: absolute;
        left: 0;
        bottom: 0;

        z-index: -1;
      }
      .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50px;
      }
      .absolute {
        position: absolute;
        width: 100%;
      }
      .absolute .navbar-brand {
        color: white;
      }
      @media (max-width: 768px) {
        .desainRight,
        .desainLeftTop,
        .desainLeftBottom {
          display: none;
        }
      }
    </style>

    </head>