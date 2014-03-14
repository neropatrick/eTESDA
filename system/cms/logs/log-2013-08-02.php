<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-08-02 08:12:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-02 08:12:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-02 08:12:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-02 08:12:13 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\modal_course.php 3
ERROR - 2013-08-02 08:12:15 --> Severity: Notice  --> Undefined variable: cID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleList.php 62
ERROR - 2013-08-02 08:12:15 --> Severity: Notice  --> Undefined variable: module C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleList.php 63
ERROR - 2013-08-02 08:12:15 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleList.php 63
ERROR - 2013-08-02 08:20:37 --> Severity: Notice  --> Undefined property: CI::$getCourses C:\xampp\htdocs\eTESDA\system\cms\libraries\MX\Controller.php 57
ERROR - 2013-08-02 14:30:15 --> Severity: Notice  --> Undefined variable: sectorName C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_topic.php 6
ERROR - 2013-08-02 14:30:15 --> Severity: Notice  --> Undefined variable: courses C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_topic.php 7
ERROR - 2013-08-02 08:44:24 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status = 'live' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-08-02 08:44:24 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status = 'live' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-08-02 08:50:19 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 149
ERROR - 2013-08-02 08:50:19 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 08:50:19 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 150
ERROR - 2013-08-02 08:50:19 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-08-02 08:50:19 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 196
ERROR - 2013-08-02 08:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-08-02 09:08:52 --> Query error: Table 'etesda.default_sample' doesn't exist - Invalid query: SELECT *
FROM `default_sample`
ERROR - 2013-08-02 09:10:43 --> Severity: Notice  --> Undefined variable: items C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 70
ERROR - 2013-08-02 09:29:13 --> Severity: Notice  --> Undefined variable: formoptions C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 78
ERROR - 2013-08-02 09:29:13 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\system\codeigniter\helpers\form_helper.php 339
ERROR - 2013-08-02 09:29:40 --> Page Missing: admin/statistics/load_indexTable20
ERROR - 2013-08-02 09:39:59 --> Page Missing: admin/statistics/load_indexTable20
ERROR - 2013-08-02 09:41:53 --> Page Missing: admin/statistics/courseStat1
ERROR - 2013-08-02 09:47:55 --> Page Missing: admin/statistics/courseStat1
ERROR - 2013-08-02 09:48:28 --> Page Missing: admin/statistics/courseStat1
ERROR - 2013-08-02 09:48:33 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 180
ERROR - 2013-08-02 09:48:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM default_course_courses where id = 
ERROR - 2013-08-02 14:06:01 --> Severity: Notice  --> Undefined property: stdClass::$dateCreated C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 47
ERROR - 2013-08-02 15:07:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:07:36 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:06 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:08:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:11:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:08 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:12:28 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:15:49 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:24 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:16:46 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Notice  --> Undefined property: stdClass::$sComp C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:17:07 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:18:44 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsOA.php 207
ERROR - 2013-08-02 15:25:03 --> Severity: Notice  --> Undefined index: learnerID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 205
ERROR - 2013-08-02 15:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3 - Invalid query: SELECT applicants.firstname, applicants.middlename, applicants.dateJoined, applicants.lastname, applicants.picture, users.email
            FROM users JOIN applicants on applicants.userid = users.userid
            WHERE users.usertypeid = 2 and users.userid = 
            
ERROR - 2013-08-02 15:25:08 --> Severity: Notice  --> Undefined index: learnerID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 205
ERROR - 2013-08-02 15:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3 - Invalid query: SELECT applicants.firstname, applicants.middlename, applicants.dateJoined, applicants.lastname, applicants.picture, users.email
            FROM users JOIN applicants on applicants.userid = users.userid
            WHERE users.usertypeid = 2 and users.userid = 
            
ERROR - 2013-08-02 15:25:32 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 395
ERROR - 2013-08-02 15:25:32 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT applicants.firstname, applicants.middlename, applicants.dateJoined, applicants.lastname, applicants.picture, users.email
            FROM users JOIN applicants on applicants.userid = users.userid
            WHERE users.usertypeid = 2 and users.userid = Array
            
ERROR - 2013-08-02 15:25:54 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 395
ERROR - 2013-08-02 15:25:54 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT applicants.firstname, applicants.middlename, applicants.dateJoined, applicants.lastname, applicants.picture, users.email
            FROM users JOIN applicants on applicants.userid = users.userid
            WHERE users.usertypeid = 2 and users.userid = Array
            
ERROR - 2013-08-02 15:26:06 --> Severity: Warning  --> Missing argument 1 for Template::set(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php on line 209 and defined C:\xampp\htdocs\eTESDA\system\cms\libraries\Template.php 188
ERROR - 2013-08-02 15:26:06 --> Severity: Notice  --> Undefined variable: name C:\xampp\htdocs\eTESDA\system\cms\libraries\Template.php 191
ERROR - 2013-08-02 15:26:06 --> Severity: Notice  --> Undefined variable: name C:\xampp\htdocs\eTESDA\system\cms\libraries\Template.php 191
ERROR - 2013-08-02 15:26:06 --> Severity: Notice  --> Undefined variable: name C:\xampp\htdocs\eTESDA\system\cms\libraries\Template.php 202
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:33 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 38
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:27:57 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 48
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 39
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: firstname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: middlename C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: lastname C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 40
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: dateJoined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 41
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: email C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 42
ERROR - 2013-08-02 15:30:09 --> Severity: Notice  --> Undefined index: userid C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerList.php 49
ERROR - 2013-08-02 23:01:11 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 232
ERROR - 2013-08-02 23:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND tb.type = 'Self Check'
            GROUP BY DATE(tr.dateTaken)' at line 5 - Invalid query: SELECT COUNT(tr.resultID) count, YEAR(tr.dateTaken) yDate, MONTH(tr.dateTaken)-1 mDate, DAY(tr.dateTaken) dDate
            FROM default_testbank tb JOIN default_testresult tr ON tb.testID = tr.testID
            JOIN default_test_sections ts ON ts.testbankID = tb.testID
            WHERE MONTH(tr.dateTaken) = 08 AND YEAR(tr.dateTaken) = 2013
            AND ts.moduleID =  AND tb.type = 'Self Check'
            GROUP BY DATE(tr.dateTaken)
ERROR - 2013-08-02 23:01:18 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 232
ERROR - 2013-08-02 23:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND tb.type = 'Self Check'
            GROUP BY DATE(tr.dateTaken)' at line 5 - Invalid query: SELECT COUNT(tr.resultID) count, YEAR(tr.dateTaken) yDate, MONTH(tr.dateTaken)-1 mDate, DAY(tr.dateTaken) dDate
            FROM default_testbank tb JOIN default_testresult tr ON tb.testID = tr.testID
            JOIN default_test_sections ts ON ts.testbankID = tb.testID
            WHERE MONTH(tr.dateTaken) = 08 AND YEAR(tr.dateTaken) = 2013
            AND ts.moduleID =  AND tb.type = 'Self Check'
            GROUP BY DATE(tr.dateTaken)
ERROR - 2013-08-02 23:02:15 --> Severity: Notice  --> Undefined variable: oaTakers C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsSC.php 105
ERROR - 2013-08-02 23:02:15 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\testStatisticsSC.php 105
ERROR - 2013-08-02 17:21:42 --> Query error: Table 'etesda.default_sample' doesn't exist - Invalid query: SELECT *
FROM `default_sample`
ERROR - 2013-08-02 17:22:08 --> Severity: Notice  --> Undefined property: CI::$sample_m C:\xampp\htdocs\eTESDA\system\cms\libraries\MX\Controller.php 57
ERROR - 2013-08-02 23:57:05 --> Severity: Notice  --> Undefined variable: enrollee C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\reports\views\admin\load_report.php 20
ERROR - 2013-08-02 23:57:05 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\reports\views\admin\load_report.php 20
ERROR - 2013-08-02 18:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND YEAR(dlc.dateStarted) = Choose' at line 3 - Invalid query: SELECT dcc.title, dlc.learnerID, dlc.status, dlc.dateStarted 
            FROM default_learner_courses dlc JOIN default_course_courses dcc ON dcc.id = dlc.courseID
            WHERE MONTH(dlc.dateStarted) =  AND YEAR(dlc.dateStarted) = Choose
ERROR - 2013-08-02 20:17:56 --> Page Missing: learner/profilingTest
ERROR - 2013-08-02 21:33:28 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 21:34:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 21:35:27 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 21:35:33 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 21:36:26 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 21:41:40 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-08-02 17:47:19 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-02 17:47:26 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-08-02 17:47:30 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-08-02 17:47:30 --> Query error: Unknown column 'undefinedsyllabus' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = undefinedsyllabus AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-08-02 23:47:40 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
