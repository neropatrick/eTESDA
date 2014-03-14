<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-07-29 05:34:59 --> Severity: Warning  --> Illegal string offset 'lID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 341
ERROR - 2013-07-29 05:34:59 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 345
ERROR - 2013-07-29 05:34:59 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 353
ERROR - 2013-07-29 05:45:27 --> Severity: Warning  --> Illegal string offset 'lID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 341
ERROR - 2013-07-29 05:45:27 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 345
ERROR - 2013-07-29 05:45:27 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 353
ERROR - 2013-07-29 06:16:50 --> Severity: Warning  --> Missing argument 2 for Model_users::countPassSC(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php on line 168 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 497
ERROR - 2013-07-29 06:16:50 --> Severity: Notice  --> Undefined variable: learnerID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 503
ERROR - 2013-07-29 06:16:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND tb.type = 'Self Check' AND sr.remarks = 'Competent'
        GROUP BY sr.sect' at line 5 - Invalid query: SELECT sr.sResID, ts.moduleID
        FROM default_testbank tb JOIN default_testresult tr ON tb.testID = tr.testID
        JOIN default_test_sections ts ON tb.testID = ts.testbankID
        JOIN default_section_results sr ON tr.resultID = sr.resultID AND ts.sectionID = sr.sectionID 
        WHERE tb.courseID = 3 AND tr.learnerID =   AND tb.type = 'Self Check' AND sr.remarks = 'Competent'
        GROUP BY sr.sectionID
ERROR - 2013-07-29 16:17:06 --> Severity: Warning  --> Missing argument 1 for Admin::courseList() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 161
ERROR - 2013-07-29 16:17:06 --> Severity: Notice  --> Undefined variable: sectorID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 163
ERROR - 2013-07-29 16:17:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 2 - Invalid query: SELECT dcc.id, dcc.title FROM default_course_courses dcc JOIN default_syllabus sylla ON dcc.id = sylla.HeirarchyID
        WHERE sylla.Type = 2 AND sylla.ParentID = (SELECT ID FROM default_syllabus WHERE Type = 1 AND HeirarchyID = )
ERROR - 2013-07-29 16:17:54 --> Severity: Warning  --> Missing argument 1 for Admin::courseList() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 161
ERROR - 2013-07-29 16:17:54 --> Severity: Notice  --> Undefined variable: sectorID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 163
ERROR - 2013-07-29 16:17:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 2 - Invalid query: SELECT dcc.id, dcc.title FROM default_course_courses dcc JOIN default_syllabus sylla ON dcc.id = sylla.HeirarchyID
        WHERE sylla.Type = 2 AND sylla.ParentID = (SELECT ID FROM default_syllabus WHERE Type = 1 AND HeirarchyID = )
ERROR - 2013-07-29 16:17:58 --> Severity: Warning  --> Missing argument 1 for Admin::courseList() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 161
ERROR - 2013-07-29 16:17:58 --> Severity: Notice  --> Undefined variable: sectorID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 163
ERROR - 2013-07-29 16:17:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 2 - Invalid query: SELECT dcc.id, dcc.title FROM default_course_courses dcc JOIN default_syllabus sylla ON dcc.id = sylla.HeirarchyID
        WHERE sylla.Type = 2 AND sylla.ParentID = (SELECT ID FROM default_syllabus WHERE Type = 1 AND HeirarchyID = )
ERROR - 2013-07-29 16:26:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:26:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:26:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:26:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:26:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:26:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:27:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:28:01 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:29:43 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStatList.php 28
ERROR - 2013-07-29 16:37:54 --> Page Missing: admin/syllabus/viewCourseStat/3
ERROR - 2013-07-29 16:41:58 --> Severity: Notice  --> Undefined index: counr C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStat.php 26
ERROR - 2013-07-29 16:41:58 --> Severity: Notice  --> Undefined index: counr C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\views\admin\courseStat.php 30
ERROR - 2013-07-29 16:45:12 --> Severity: Notice  --> Undefined variable: gradss C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\controllers\admin.php 194
ERROR - 2013-07-29 17:45:35 --> Severity: Warning  --> Illegal string offset 'lID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 342
ERROR - 2013-07-29 17:45:35 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 346
ERROR - 2013-07-29 17:45:35 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 354
ERROR - 2013-07-29 17:45:36 --> Severity: Warning  --> Illegal string offset 'lID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 342
ERROR - 2013-07-29 17:45:36 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 346
ERROR - 2013-07-29 17:45:36 --> Severity: Warning  --> Illegal string offset 'HeirarchyID' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 354
ERROR - 2013-07-29 17:46:33 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-29 17:46:33 --> Severity: Notice  --> mysql_pconnect(): send of 12 bytes failed with errno=10053 An established connection was aborted by the software in your host machine.
 C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-29 17:46:38 --> Page Missing: test/undefinedsyllabus/viewedTopic
ERROR - 2013-07-29 17:46:38 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-29 17:46:41 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-29 17:46:42 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-07-29 17:47:06 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
