<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-06-06 17:26:50 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:27:01 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:32:53 --> Page Missing: test/undefinedsyllabus/viewedTopic
ERROR - 2013-06-06 17:32:54 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:32:55 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:33:05 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:33:12 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-06-06 17:33:14 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-06-06 17:33:14 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-06-06 17:33:26 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-06-06 17:33:27 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
