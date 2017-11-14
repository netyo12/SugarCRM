<?php
/**
 * Created by PhpStorm.
 * User: n.smirnov
 * Date: 13.11.2017
 * Time: 18:16
 */

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    1,
    'Create association with ACLRoles',
    'modules/Users/After_save.php',
    'After_save',
    'after_save',
);