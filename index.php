<?php
namespace main;
require 'core/init.php';

use classfile\Model\User;

$user = new User;
print_r($user->all());