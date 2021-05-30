<?php
include 't_login.php';
include 't_head.html';
?>

<style>


.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: darkslateblue;
    overflow-x: hidden;
    padding-top: 15px;
}

.sidenav a {
    padding: 1px 0px 1px 30px;
    text-decoration: none;
    font-size: 22px;
    color: white;
    display: block;
}
.sidenav h1 {
    padding: 6px 8px 6px 30px;
    color: white;
    display: block;
}


.sidenav a:hover {
    color: black;
}

.main {
    margin-left: 250px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>



<div class="sidenav">
    <h1 class="text-light">Manager</h1>
  <a href="manager_page.php">Home</a>
  <br>
  <br>
  <a href="manager_dataKasir.php">Data Kasir</a>
  <br>
  <br>
  <a href="manager_dataPenyewaStand.php">Data Penyewa Stand</a>
  <a href="manager_dataStand.php">Data Stand</a>
</div>

<div class="main">
<?php
include 't_topPage.html';
?></div>