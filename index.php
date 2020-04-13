<?php 
require 'session.php';
require 'helpers.php';

if (! sess_has('user')) {
    require 'unregistered.php';
} else {
    require 'welcome.php';
}