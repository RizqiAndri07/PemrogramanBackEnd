<?php
include("form.php");

$form = new Form('paket.php', 'Submit Form');

// Menambahkan field input
$form->addField('namaPaket', 'Nama Paket:', 'input', 'text');

// Menambahkan field select     
$form->addField('destinasi', 'Destinasi Wisata:', 'select', '', ['Lombok', 'Bali', 'Raja Ampat','Rinjani']);
$form->addField('kelas', 'Kelas Paket:', 'select', '', ['Medium','Standart', 'Gold']);
$form->addField('harga', 'Harga(Rp):', 'input', 'number');

// Menambahkan textarea
$form->addField('comments', 'Comments:', 'textarea');

// Menampilkan form
$form->displayForm();
