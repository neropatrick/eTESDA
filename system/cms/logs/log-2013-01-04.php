<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-01-04 14:06:50 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:07:08 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:07:16 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:07:26 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:08:45 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:09:34 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:10:30 --> Severity: Warning  --> Missing argument 1 for Admin::testStat() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 330
ERROR - 2013-01-04 14:10:30 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 334
ERROR - 2013-01-04 14:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: SELECT dcc.title, tb.courseID, tb.type, COUNT(tr.resultID) count FROM default_testbank tb 
            JOIN default_course_courses dcc ON tb.courseID = dcc.id
            JOIN default_testresult tr ON tb.testID = tr.testID
            WHERE tb.type = 'Online Assessment' AND tb.courseID = 
            
ERROR - 2013-01-04 07:11:41 --> Severity: Warning  --> Missing argument 1 for Admin::testStat() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 330
ERROR - 2013-01-04 14:11:41 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 334
ERROR - 2013-01-04 14:11:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: SELECT dcc.title, tb.courseID, tb.type, COUNT(tr.resultID) count FROM default_testbank tb 
            JOIN default_course_courses dcc ON tb.courseID = dcc.id
            JOIN default_testresult tr ON tb.testID = tr.testID
            WHERE tb.type = 'Online Assessment' AND tb.courseID = 
            
ERROR - 2013-01-04 07:15:03 --> Severity: Warning  --> Missing argument 1 for Admin::testStat() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 330
ERROR - 2013-01-04 14:15:03 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 334
ERROR - 2013-01-04 14:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: SELECT dcc.title, tb.courseID, tb.type, COUNT(tr.resultID) count FROM default_testbank tb 
            JOIN default_course_courses dcc ON tb.courseID = dcc.id
            JOIN default_testresult tr ON tb.testID = tr.testID
            WHERE tb.type = 'Online Assessment' AND tb.courseID = 
            
ERROR - 2013-01-04 07:19:37 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status = 'live' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-01-04 07:19:37 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status = 'live' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-01-04 07:21:13 --> Page Missing: test/undefinedsyllabus/viewedTopic
ERROR - 2013-01-04 07:21:14 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:22:28 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-01-04 07:22:52 --> Page Missing: undefinedsyllabus/modal_course
ERROR - 2013-01-04 07:22:52 --> Page Missing: undefinedsyllabus/modal_course
ERROR - 2013-01-04 07:23:04 --> Page Missing: undefinedsyllabus/modal_course
ERROR - 2013-01-04 07:23:04 --> Page Missing: undefinedsyllabus/modal_course
