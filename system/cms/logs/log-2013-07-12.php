<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-07-12 17:36:45 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-12 17:36:53 --> Page Missing: test/undefinedsyllabus/viewedTopic
ERROR - 2013-07-12 17:36:53 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-12 17:36:54 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-12 17:37:06 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-12 17:37:10 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-07-12 17:37:10 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-07-12 17:37:10 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
