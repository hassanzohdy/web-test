<?php 
include 'session.php';
include 'helpers.php';

sess_remove('user');

redirect_to('index.php');
