<?php
include("phpqrcode.php");
QRcode::png($_GET['bctext']);
