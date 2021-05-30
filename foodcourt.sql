--USER

CREATE TABLE manager (
  id_manager varchar(5) NOT NULL PRIMARY KEY,
  nama_manager varchar(255) NOT NULL,
  username_manager varchar(255) NOT NULL,
  password_manager varchar(255) NOT NULL
);


CREATE TABLE ceo (
  id_ceo varchar(5) NOT NULL PRIMARY KEY,
  nama_ceo varchar(255) NOT NULL,
  username_ceo varchar(255) NOT NULL,
  password_ceo varchar(255) NOT NULL
);

CREATE TABLE kasir (
  id_kasir varchar(5) NOT NULL PRIMARY KEY,
  nama_kasir varchar(255) NOT NULL,
  username_kasir varchar(255) NOT NULL,
  password_kasir varchar(255) NOT NULL
);

CREATE TABLE sewastand (
  id_sewastand varchar(5) NOT NULL PRIMARY KEY,
  nama_sewastand varchar(255) NOT NULL,
  username_sewastand varchar(255) NOT NULL,
  password_sewastand varchar(255) NOT NULL,
  saldo_sewastand int(9) NOT NULL
);

CREATE TABLE pengunjung (
  id_pengunjung varchar(20) NOT NULL PRIMARY KEY,
  nama_pengunjung varchar(255) NOT NULL,
  no_hp_pengunjung varchar(15)NOT NULL,
  email_pengunjung varchar(255) NOT NULL,
  saldo_pengunjung int(9) NOT NULL
);

CREATE TABLE manager (
  id_manager varchar(5) NOT NULL PRIMARY KEY,
  nama_manager varchar(255) NOT NULL,
  username_manager varchar(255) NOT NULL,
  password_manager varchar(255) NOT NULL
);

--MENU

CREATE TABLE menu (
  id_menu varchar(5) NOT NULL PRIMARY KEY,
  id_sewastand varchar(5) NOT NULL,
  nama_menu varchar(255) NOT NULL,
  harga_menu int(9) NOT NULL,
    CONSTRAINT FK_menuStand FOREIGN KEY (id_sewastand) REFERENCES sewastand(id_sewastand)
);

--TRANSAKSI

CREATE TABLE transaksi (
  id_transaksi varchar(5) NOT NULL PRIMARY KEY,
  id_sewastand varchar(5) NOT NULL,
  id_pengunjung varchar(5) NOT NULL,
  total_harga int(9) NOT NULL,
  tgl_transaksi date NOT NULL,
    CONSTRAINT FK_menuStand FOREIGN KEY (id_sewastand) REFERENCES sewastand(id_sewastand),
    CONSTRAINT FK_transaksiPengunjung FOREIGN KEY (id_pengunjung) REFERENCES pengunjung(id_pengunjung)
);


CREATE TABLE detailsaldostand (
  id_detail varchar(5) NOT NULL PRIMARY KEY,
  id_sewastand varchar(5) NOT NULL,
  id_pengunjung varchar(5) NOT NULL,
  saldo_masuk int(9) NOT NULL,
  saldo_keluar int(9) NOT NULL,
  tgl_transaksi date NOT NULL,
  jam_transaksi time NOT NULL,
    CONSTRAINT FK_menuStand FOREIGN KEY (id_sewastand) REFERENCES sewastand(id_sewastand),
    CONSTRAINT FK_transaksiPengunjung FOREIGN KEY (id_pengunjung) REFERENCES pengunjung(id_pengunjung)
);

create table cairsalsopengunjung (
  id_cairsaldo varchar(5) not null primary key,
  id_pengunjung varchar(20) not null,
  saldo_keluar int (9) not null,
  tgl_keluar date not null,
  jam_keluar time not null
  constraint FK_cairsaldopengunjung foreign key (id_pengunjung) REFERENCES pengunjung (id_pengunjung)
);



CREATE TABLE detailsaldopengunjung (
  id_detail varchar(5) NOT NULL PRIMARY KEY,
  id_pengunjung varchar(5) NOT NULL,
  id_sewastand varchar(5) NOT NULL,
  saldo_masuk int(9) NOT NULL,
  saldo_keluar int(9) NOT NULL,
  tgl_transaksi date NOT NULL,
  jam_transaksi time NOT NULL,
    CONSTRAINT FK_menuStand FOREIGN KEY (id_sewastand) REFERENCES sewastand(id_sewastand),
    CONSTRAINT FK_transaksiPengunjung FOREIGN KEY (id_pengunjung) REFERENCES pengunjung(id_pengunjung)
);

