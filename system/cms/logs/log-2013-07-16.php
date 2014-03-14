<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-07-16 17:38:10 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:12 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:13 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND default_testbank.type = 'Online Assessment' GROUP BY cID' at line 3 - Invalid query: SELECT default_testbank.courseID cID, default_testbank.noOfItems FROM default_testbank JOIN
          default_testresult ON default_testbank.testID = default_testresult.testID WHERE
          default_testresult.learnerID =  AND default_testbank.type = 'Online Assessment' GROUP BY cID
ERROR - 2013-07-16 17:38:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND default_testbank.type = 'Online Assessment' GROUP BY cID' at line 3 - Invalid query: SELECT default_testbank.courseID cID, default_testbank.noOfItems FROM default_testbank JOIN
          default_testresult ON default_testbank.testID = default_testresult.testID WHERE
          default_testresult.learnerID =  AND default_testbank.type = 'Online Assessment' GROUP BY cID
ERROR - 2013-07-16 17:38:27 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:31 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:36 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:38:57 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:39:09 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:39:24 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:39:35 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-07-16 17:39:36 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-07-16 17:40:54 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:41:14 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-07-16 17:41:15 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-16 17:41:16 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
