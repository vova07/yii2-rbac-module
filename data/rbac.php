<?php
return array (
  'items' => 
  array (
    'user' => 
    array (
      'type' => 1,
      'description' => 'User',
      'ruleName' => 'group',
    ),
    'admin' => 
    array (
      'type' => 1,
      'description' => 'Admin',
      'ruleName' => 'group',
      'children' => 
      array (
        0 => 'user',
      ),
    ),
    'superadmin' => 
    array (
      'type' => 1,
      'description' => 'Superadmin',
      'ruleName' => 'group',
      'children' => 
      array (
        0 => 'admin',
      ),
    ),
  ),
  'rules' => 
  array (
    'group' => 'O:27:"vova07\\rbac\\rules\\GroupRule":3:{s:4:"name";s:5:"group";s:9:"createdAt";N;s:9:"updatedAt";N;}',
  ),
);
