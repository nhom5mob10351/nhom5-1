<?php
session_start();
session_destroy();
echo'<script>alert("Tho�t th�nh c�ng");</script>';
if(isset($_SERVER['HTTP_REFERER'])&&!preg_match('/logout|admin/',$_SERVER['HTTP_REFERER']))echo'<script>window.location.assign("'.$_SERVER['HTTP_REFERER'].'");</script>';
else echo'<script>window.location.assign("index.html");</script>';
?>