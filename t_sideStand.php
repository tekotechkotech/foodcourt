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
    background-color: darkviolet;
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
    color: #f1f1f1;
    display: block;
}

.sidenav p {
    padding: 1px 0px 1px 20px;
    color: #818181;
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
    <h1 class="text-light">STAND</h1>
  <a href="stand_page.php">Home</a>
  <br>
  <br>
  <a href="stand_pesan.php">Pemesanan</a>
  <br>
  <br>
  <a href="stand_tambahMenu.php">My Menu</a>
  <a href="stand_saldo.php">My Saldo</a>
</div>

<div class="main">
<?php
include 't_topPage.html';
?></div>