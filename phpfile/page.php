<?php
namespace phpfile;
require '../core/init.php';

use classfile\Model\User;

$user = new User;
print_r($user->all());
