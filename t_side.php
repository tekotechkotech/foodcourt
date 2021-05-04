<?php
include 't_login.php';
include 't_head.html';
?>

<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 350px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 15px;
}

.sidenav a {
    padding: 1px 0px 1px 30px;
    text-decoration: none;
    color: #818181;
    display: block;
}
.sidenav h1 {
    padding: 6px 8px 6px 30px;
    color: #818181;
    display: block;
}

.sidenav p {
    padding: 1px 0px 1px 20px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 350px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>



<div class="sidenav">
    <h1 class="text-light">ADMIN</h1>
  <a href="adm_page.php">Home</a>
  <br>
  <br>
  <p>Admin</p>
  <a href="adm_adm.php">Data Admin</a>
  <br>
  <br>
  <p>Calon Wisuda</p>
  <a href="adm_sdhterkonfirmasi.php">Sudah Terkonfirmasi</a>
  <a href="adm_blmterkonfirmasi.php">Belum Terkonfirmasi</a>
</div>

<div class="main">
<?php
include 't_topPage.html';
?></div>