<?php

echo '
      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link href="css/index.css" rel="Stylesheet">
          <title>Dashboard</title>
          <style>
              body {
                  background: #fff;
              }
          </style>
      </head>
      <body>
      <body>
    <nav class="navbar navbar-expand-sm dashboard-header">
        <div class="container-fluid">
            <img src="./images/covid.png" style="width: 40px; height: 40px;">
            <a class="navbar-brand" href="#" style="color: #fff;">
                CoViD-19 Monitoring</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #fff;" aria-current="page" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="declaration_list.php" style="color: #fff;">Data List</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" onclick="searchDeclaration()">Search</button>
                </div>
            </div>
        </div>
    </nav>
      ';
// <header class="p-3 bg-dark text-white">
//   <div class="container">
//     <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
//       <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
//         <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
//       </a>

//       <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
//         <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
//         <li><a href="participants.php" class="nav-link px-2 text-white">Participants</a></li>
//         <!-- <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
//         <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
//         <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
//       </ul>

//       <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
//         <input 
//           type="search" 
//           class="form-control form-control-dark" 
//           placeholder="Search..." aria-label="Search"
//           id="keyword"
//           onkeyup="searchParticipant()"
//         >
//       </form>

//       <div class="text-end">
//         <button type="button" class="btn btn-outline-light me-2" onclick="searchParticipant()">Search</button>
//         <button type="button" class="btn btn-warning">Sign-up</button>
//       </div>
//     </div>
//   </div>
// </header>

?>