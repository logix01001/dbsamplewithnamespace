<?php
namespace classfile\Model;

use classfile\DBclass\Model;

class User extends Model {
   
   protected $table = 'users';
   protected $connection = 'iconn';
   
}
