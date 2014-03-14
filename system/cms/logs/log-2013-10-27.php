<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-10-27 14:22:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MONTH(dateStarted) = 10
            AND YEAR(dateStarted) = 2013 AND isEnrolled ' at line 5 - Invalid query: 
            SELECT default_sector_sectors.title, default_sector_sectors.ID FROM default_sector_sectors JOIN default_syllabus
            ON default_sector_sectors.id = default_syllabus.HeirarchyID WHERE default_syllabus.ID IN
            (SELECT ParentID FROM default_syllabus WHERE HeirarchyID IN (SELECT courseID 
            FROM default_learner_courses WHERE status != 3
            MONTH(dateStarted) = 10
            AND YEAR(dateStarted) = 2013 AND isEnrolled = 1
            GROUP BY courseID) and Type = 2) GROUP BY 
            default_sector_sectors.title
            
ERROR - 2013-10-27 16:19:25 --> Severity: Warning  --> Missing argument 1 for Admin::modal_learners() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 453
ERROR - 2013-10-27 16:19:26 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 455
ERROR - 2013-10-27 16:19:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND status != 3' at line 2 - Invalid query: SELECT learnerID, courseID, dateStarted, status FROM default_learner_courses WHERE courseID =  
        AND status != 3
ERROR - 2013-10-27 16:43:49 --> Severity: Notice  --> Undefined variable: secCounts C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:43:49 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:44:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:10 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:16 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:29 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:33 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:33 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:33 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:45:51 --> Severity: Warning  --> Illegal string offset 'count' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 20
ERROR - 2013-10-27 16:45:51 --> Severity: Warning  --> Illegal string offset 'count' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 20
ERROR - 2013-10-27 16:45:51 --> Severity: Warning  --> Illegal string offset 'count' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 20
ERROR - 2013-10-27 16:46:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\sectorStat\load_courses.php 19
ERROR - 2013-10-27 16:47:45 --> Severity: Warning  --> Missing argument 3 for Sample_m::couInCountY(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_sectorStat.php on line 491 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\models\sample_m.php 485
ERROR - 2013-10-27 16:47:45 --> Severity: Notice  --> Undefined variable: dateNow C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\models\sample_m.php 490
ERROR - 2013-10-27 23:48:45 --> Severity: Warning  --> Missing argument 4 for Sample_m::couInCountMY(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_sectorStat.php on line 487 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\models\sample_m.php 473
ERROR - 2013-10-27 23:48:45 --> Severity: Notice  --> Undefined variable: dateNow C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\models\sample_m.php 479
ERROR - 2013-10-27 17:05:11 --> Severity: Warning  --> Missing argument 1 for Admin::modal_learners() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 453
ERROR - 2013-10-27 17:05:11 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 455
ERROR - 2013-10-27 17:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND status != 3' at line 2 - Invalid query: SELECT learnerID, courseID, dateStarted, status FROM default_learner_courses WHERE courseID =  
        AND status != 3
ERROR - 2013-10-27 17:05:46 --> Severity: Warning  --> Missing argument 1 for Admin::modal_learners() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 453
ERROR - 2013-10-27 17:05:47 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 455
ERROR - 2013-10-27 17:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND status != 3' at line 2 - Invalid query: SELECT learnerID, courseID, dateStarted, status FROM default_learner_courses WHERE courseID =  
        AND status != 3
ERROR - 2013-10-27 17:07:56 --> Severity: Notice  --> Undefined variable: courseEnr C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_learners.php 3
ERROR - 2013-10-27 17:07:56 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_learners.php 3
ERROR - 2013-10-27 17:08:54 --> Severity: Notice  --> Undefined variable: courseEnr C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_learners.php 3
ERROR - 2013-10-27 17:08:54 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_learners.php 3
ERROR - 2013-10-27 17:52:53 --> Severity: Notice  --> Undefined variable: courseEnr C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_inactives.php 3
ERROR - 2013-10-27 17:52:53 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\modal_inactives.php 3
ERROR - 2013-10-27 17:58:55 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 166
ERROR - 2013-10-27 17:58:55 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 166
ERROR - 2013-10-27 17:58:55 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 207
ERROR - 2013-10-27 17:58:55 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 207
ERROR - 2013-10-27 17:58:55 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 228
ERROR - 2013-10-27 17:58:55 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\learnerProfile.php 228
