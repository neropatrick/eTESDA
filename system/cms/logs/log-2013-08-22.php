<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-08-22 14:16:28 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 14:18:35 --> Page Missing: test/undefinedsyllabus/viewedTopic
ERROR - 2013-08-22 14:18:37 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 14:19:52 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 14:20:08 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 14:20:12 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-22 14:20:12 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-22 14:20:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-22 14:20:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-22 17:53:25 --> Severity: Warning  --> mysqli::query(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysqli\mysqli_driver.php 194
ERROR - 2013-08-22 17:53:25 --> Severity: Warning  --> mysqli::query(): Error reading result set's header C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysqli\mysqli_driver.php 194
ERROR - 2013-08-22 17:53:25 --> Query error: MySQL server has gone away - Invalid query: SELECT `c`.*, IF(c.user_id > 0, m.display_name, c.user_name) as user_name, IF(c.user_id > 0, u.email, c.user_email) as user_email, `u`.`username`, `m`.`display_name`
FROM `default_comments` `c`
LEFT JOIN `default_users` `u` ON `c`.`user_id` = `u`.`id`
LEFT JOIN `default_profiles` `m` ON `m`.`user_id` = `u`.`id`
WHERE `c`.`is_active` =  1
ORDER BY `c`.`created_on` desc
 LIMIT 5
ERROR - 2013-08-22 17:53:28 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:53:41 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:53:43 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:53:51 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:54:01 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:54:08 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-22 17:54:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-08-22 17:54:38 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-08-22 17:54:38 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
