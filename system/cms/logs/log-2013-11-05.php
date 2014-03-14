<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-11-05 00:25:23 --> Severity: Warning  --> Missing argument 2 for Model_users::checkOABadge(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php on line 213 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 996
ERROR - 2013-11-05 00:25:23 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND lb.learnerID = 54' at line 4 - Invalid query: SELECT lb.lbID
        FROM default_learner_badge lb JOIN default_badge_badges bb ON bb.id = lb.badgeID
        WHERE bb.activity = 'Passed an Online Assessment' AND bb.course = 
        AND lb.learnerID = 54
ERROR - 2013-11-05 00:25:32 --> Severity: Warning  --> Missing argument 2 for Model_users::checkOABadge(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php on line 213 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 996
ERROR - 2013-11-05 00:25:32 --> Severity: Notice  --> Undefined variable: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:25:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND lb.learnerID = 54' at line 4 - Invalid query: SELECT lb.lbID
        FROM default_learner_badge lb JOIN default_badge_badges bb ON bb.id = lb.badgeID
        WHERE bb.activity = 'Passed an Online Assessment' AND bb.course = 
        AND lb.learnerID = 54
ERROR - 2013-11-05 00:34:46 --> Severity: Notice  --> Undefined index: remarks C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 218
ERROR - 2013-11-05 00:41:26 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:41:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = 
ERROR - 2013-11-05 00:41:50 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = ''
ERROR - 2013-11-05 00:41:54 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:41:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = ''
ERROR - 2013-11-05 00:41:56 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1000
ERROR - 2013-11-05 00:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = ''
ERROR - 2013-11-05 00:43:08 --> Severity: Notice  --> Undefined variable: loa C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 215
ERROR - 2013-11-05 00:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = ''
ERROR - 2013-11-05 00:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
   ' at line 2 - Invalid query: SELECT tr.remarks, tb.courseID,  
            FROM default_testresult tr JOIN default_testbank tb ON tr.testID = tb.testID
            WHERE
            tr.learnerID = 54 AND tr.dateTaken = '2013-11-05 00:50:22'
ERROR - 2013-11-05 00:43:37 --> Severity: Warning  --> Illegal string offset 'courseID' C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 219
ERROR - 2013-11-05 00:43:37 --> Query error: Unknown column 'P' in 'where clause' - Invalid query: SELECT lb.lbID
        FROM default_learner_badge lb JOIN default_badge_badges bb ON bb.id = lb.badgeID
        WHERE bb.activity = 'Passed an Online Assessment' AND bb.course = P
        AND lb.learnerID = 54
ERROR - 2013-11-05 00:45:23 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\system\codeigniter\database\DB_driver.php 1059
ERROR - 2013-11-05 00:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 - Invalid query: INSERT INTO `default_learner_badge` (`learnerID`, `badgeID`, `dateEarned`) VALUES ('54', 2, )
ERROR - 2013-11-05 00:46:28 --> Query error: Incorrect datetime value: '3' for column 'dateEarned' at row 1 - Invalid query: INSERT INTO `default_learner_badge` (`learnerID`, `badgeID`, `dateEarned`) VALUES ('54', 2, '3')
ERROR - 2013-11-05 02:54:24 --> Your server does not support the GD function required to process this type of image.
ERROR - 2013-11-05 02:55:11 --> Query error: Duplicate entry '9517fd0bf8faa65' for key 'PRIMARY' - Invalid query: INSERT INTO `default_files` (`folder_id`, `user_id`, `type`, `name`, `path`, `description`, `alt_attribute`, `filename`, `extension`, `mimetype`, `filesize`, `width`, `height`, `date_added`, `id`) VALUES (5, 1, 'i', 'badges_websiteisland1_stage1.png', '{{ url:site }}files/large/700e070703b71c69dc50679d129759e6.png', '', '', '700e070703b71c69dc50679d129759e6.png', '.png', 'image/png', 5.9, 300, 327, 1383612911, '9517fd0bf8faa65')
ERROR - 2013-11-05 10:17:24 --> Severity: Notice  --> Undefined index: course C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 239
ERROR - 2013-11-05 10:17:24 --> Severity: Notice  --> Undefined index: module C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 239
ERROR - 2013-11-05 10:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND bb.module = 
        AND lb.learnerID = 54' at line 3 - Invalid query: SELECT lb.lbID
        FROM default_learner_badge lb JOIN default_badge_badges bb ON bb.id = lb.badgeID
        WHERE bb.activity = 'Passed a Self-Check' AND bb.course =  AND bb.module = 
        AND lb.learnerID = 54
ERROR - 2013-11-05 03:19:23 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 04:02:00 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 04:02:01 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined variable: params C:\xampp\htdocs\eTESDA\system\cms\libraries\pdf.php 15
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:36 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:37 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8759
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 7365
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27962
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27991
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 28063
ERROR - 2013-11-05 11:04:38 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8739
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined variable: params C:\xampp\htdocs\eTESDA\system\cms\libraries\pdf.php 15
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TH C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:27 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24291
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24478
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24502
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24543
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24551
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:28 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:29 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:30 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8759
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 7365
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27962
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27991
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 28063
ERROR - 2013-11-05 04:07:31 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8739
ERROR - 2013-11-05 13:46:20 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:47:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:49:18 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:51:58 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:57:59 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:57:59 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:58:07 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:58:07 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 13:59:30 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 14:11:03 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:11:17 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:11:24 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:14 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:23 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:31 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:31 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 227
ERROR - 2013-11-05 14:13:41 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:41 --> Severity: Notice  --> Undefined index: courseID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 221
ERROR - 2013-11-05 14:13:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND lb.learnerID = 54 LIMIT 1' at line 4 - Invalid query: SELECT lb.lbID
        FROM default_learner_badge lb JOIN default_badge_badges bb ON bb.id = lb.badgeID
        WHERE bb.activity = 'Passed an Online Assessment' AND bb.course = 
        AND lb.learnerID = 54 LIMIT 1
ERROR - 2013-11-05 14:13:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:13:47 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 227
ERROR - 2013-11-05 14:14:12 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:14:12 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 227
ERROR - 2013-11-05 07:14:29 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:15:10 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:15:32 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:15:46 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:15:52 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:15:55 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:16:58 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:17:08 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:14 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:14 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 225
ERROR - 2013-11-05 14:17:37 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:37 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 14:17:41 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:41 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 07:17:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:48 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:48 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 14:17:54 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:17:54 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 07:18:29 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:18:55 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:18:55 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 14:19:02 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:19:02 --> Severity: Notice  --> Undefined index: lbID C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 223
ERROR - 2013-11-05 07:19:19 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:19:34 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:19:42 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:19:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:19:52 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:20:02 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:20:14 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:20:19 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:20:37 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:20:44 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:20:52 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:23:30 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:23:55 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:23:55 --> Severity: Notice  --> Undefined variable: coab C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 221
ERROR - 2013-11-05 14:23:55 --> Severity: Notice  --> Undefined variable: coab C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 221
ERROR - 2013-11-05 14:24:07 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:24:13 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:24:40 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:24:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:24:52 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:24:52 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 221
ERROR - 2013-11-05 14:24:52 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php 221
ERROR - 2013-11-05 14:25:11 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:25:13 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:25:16 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:25:37 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:25:44 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:26:12 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:26:40 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:26:42 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:26:53 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:27:00 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:27:02 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:27:18 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:27:23 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:27:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:27:53 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:28:14 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:28:47 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:29:11 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:29:30 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:29:33 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:29:41 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:29:41 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 14:29:51 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:29:51 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 07:30:13 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:30:44 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:31:37 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:32:03 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:32:24 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:32:57 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:33:07 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:33:19 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:33:23 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:33:26 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:34:36 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:34:37 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:34:37 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1019
ERROR - 2013-11-05 07:34:40 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 07:34:51 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:37:06 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:37:13 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:37:18 --> Plugin method "badgeSC" does not exist on class "Plugin_Example".
ERROR - 2013-11-05 14:41:59 --> Severity: Warning  --> Missing argument 2 for Model_users::getSCID(), called in C:\xampp\htdocs\eTESDA\addons\shared_addons\plugins\example.php on line 244 and defined C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1064
ERROR - 2013-11-05 14:41:59 --> Severity: Notice  --> Undefined variable: moduleID C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1067
ERROR - 2013-11-05 14:41:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 2 - Invalid query: SELECT id FROM default_badge_badges
        WHERE activity = 'Passed a Self-Check' AND course = 4 AND module = 
        
ERROR - 2013-11-05 14:42:32 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1069
ERROR - 2013-11-05 14:44:58 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1069
ERROR - 2013-11-05 07:45:47 --> Your server does not support the GD function required to process this type of image.
ERROR - 2013-11-05 07:46:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND default_testbank.type = 'Online Assessment' GROUP BY cID' at line 3 - Invalid query: SELECT default_testbank.courseID cID, default_testbank.noOfItems FROM default_testbank JOIN
          default_testresult ON default_testbank.testID = default_testresult.testID WHERE
          default_testresult.learnerID =  AND default_testbank.type = 'Online Assessment' GROUP BY cID
ERROR - 2013-11-05 14:46:34 --> Severity: 4096  --> Object of class stdClass could not be converted to string C:\xampp\htdocs\eTESDA\system\codeigniter\database\DB_driver.php 1059
ERROR - 2013-11-05 14:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' '2013-11-05 14:46:34')' at line 1 - Invalid query: INSERT INTO `default_learner_badge` (`learnerID`, `badgeID`, `dateEarned`) VALUES ('54', , '2013-11-05 14:46:34')
ERROR - 2013-11-05 14:48:59 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1072
ERROR - 2013-11-05 07:50:32 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 07:50:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 07:50:35 --> Severity: Warning  --> unlink(system/cms/cache/default/page_m\f52a4ad2157b0a9a87663e86881204c4f3d91c08.cache): Permission denied C:\xampp\htdocs\eTESDA\system\codeigniter\helpers\file_helper.php 129
ERROR - 2013-11-05 07:50:35 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 07:50:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 07:54:41 --> Query error: Unknown column 'ASDWEWRaDF' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = ASDWEWRaDF
ERROR - 2013-11-05 07:55:00 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 07:55:00 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 07:55:00 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 07:55:00 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 07:55:00 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 574
ERROR - 2013-11-05 07:55:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 120' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 120
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined variable: params C:\xampp\htdocs\eTESDA\system\cms\libraries\pdf.php 15
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TH C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:56 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24291
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24478
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24502
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24543
ERROR - 2013-11-05 07:56:57 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24551
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:58 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:56:59 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:00 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:01 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8759
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 7365
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27962
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27991
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 28063
ERROR - 2013-11-05 07:57:02 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8739
ERROR - 2013-11-05 07:57:22 --> Query error: Unknown column 'ASDWEWRaDF' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = ASDWEWRaDF
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 07:57:22 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined variable: params C:\xampp\htdocs\eTESDA\system\cms\libraries\pdf.php 15
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:03 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:04 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TH C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:05 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24291
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24478
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24502
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24543
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24551
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:06 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:07 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:08 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:09 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:10 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8759
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 7365
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27962
ERROR - 2013-11-05 07:58:11 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27991
ERROR - 2013-11-05 07:58:12 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 28063
ERROR - 2013-11-05 07:58:12 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8739
ERROR - 2013-11-05 08:01:11 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 08:01:20 --> Query error: Unknown column 'ASDASDAS' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = ASDASDAS
ERROR - 2013-11-05 08:01:49 --> Query error: Unknown column '20order' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = 1%20order%20by%205
ERROR - 2013-11-05 08:02:13 --> Query error: Unknown column 'ASDASDAS' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = ASDASDAS
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Guest Room Attendant Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 200
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 200
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Guest Room Attendant Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 241
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 241
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Guest Room Attendant Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 262
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 262
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 200
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 200
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 241
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 241
ERROR - 2013-11-05 08:02:19 --> Severity: Notice  --> Undefined property: stdClass::$Computer Hardware Servicing C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 262
ERROR - 2013-11-05 08:02:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_LearnerProfile.php 262
ERROR - 2013-11-05 08:04:18 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:18 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:18 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:18 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:18 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:18 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:04:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:46 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Illegal string offset 'latest' C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin.php 614
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:47 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:06:48 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:01 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:01 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:01 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:02 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 70 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:20 --> Severity: Notice  --> Undefined offset: 97 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Notice  --> Undefined offset: 120 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:07:21 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 77
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:14:32 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 42
ERROR - 2013-11-05 08:18:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:18:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:18:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:18:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:18:40 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:18:51 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:21:35 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:21:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:21:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:21:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:21:38 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:21:43 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:25 --> Severity: Notice  --> Undefined index: Finished C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\views\admin\course_overview.php 45
ERROR - 2013-11-05 08:22:26 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:22:26 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:22:26 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:22:27 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:22:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:22:35 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:23:26 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:23:26 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:23:27 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:23:27 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:23:28 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:23:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:25:57 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:25:57 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:25:58 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:25:58 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:26:04 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:26:05 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:27:40 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:27:41 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:27:41 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:27:41 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:27:44 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:27:51 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:29:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:29:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:29:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:29:38 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:29:40 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:29:43 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:30:54 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:30:55 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:30:55 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:30:56 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:30:57 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:31:01 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:32:22 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:32:23 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:32:23 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:32:24 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:32:25 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:33:59 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:33:59 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:34:00 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:34:00 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:34:01 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:34:06 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:35:19 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:35:19 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:35:20 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:35:20 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:35:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:36:42 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:36:42 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:36:43 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:36:43 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:36:45 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:36:54 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:37:37 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:37:38 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:37:38 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:37:39 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:37:42 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:38:32 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:38:33 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:38:33 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:38:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:38:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:38:44 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:39:29 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:39:30 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:39:30 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:39:31 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:39:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:39:40 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:40:17 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:40:17 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:40:18 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:40:18 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:40:19 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:40:21 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:41:17 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:41:18 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:41:18 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:41:19 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:41:30 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:42:06 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:42:07 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:42:07 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:42:08 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:42:10 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:42:12 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:43:05 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:43:05 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:43:06 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:43:06 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:43:09 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:43:47 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:43:48 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:43:48 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:43:49 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:43:49 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:44:24 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:44:24 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:44:25 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:44:25 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:44:27 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 08:47:33 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 08:47:33 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 08:47:33 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 08:47:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 08:47:34 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 08:47:36 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 09:01:00 --> Query error: Table 'etesda.applicants' doesn't exist - Invalid query: SELECT DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(birthday, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') 
        < DATE_FORMAT(birthday, '00-%m-%d')) age
        FROM applicants WHERE userid = 54
ERROR - 2013-11-05 09:37:52 --> Page Missing: bootstrap/ico/favicon.png
ERROR - 2013-11-05 09:38:00 --> Page Missing: bootstrap/ico/favicon.png
ERROR - 2013-11-05 09:38:45 --> Severity: Warning  --> Missing argument 1 for Admin_geoStat::load_geoReport() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 87
ERROR - 2013-11-05 09:38:45 --> Severity: Notice  --> Undefined variable: geoType C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 88
ERROR - 2013-11-05 10:05:35 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:38 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:39 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:39 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:39 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:06:39 --> Severity: Notice  --> Object of class stdClass could not be converted to int C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\statistics\controllers\admin_geoStat.php 101
ERROR - 2013-11-05 10:19:55 --> Query error: Duplicate entry '9517fd0bf8faa65' for key 'PRIMARY' - Invalid query: INSERT INTO `default_files` (`folder_id`, `user_id`, `type`, `name`, `path`, `description`, `alt_attribute`, `filename`, `extension`, `mimetype`, `filesize`, `width`, `height`, `date_added`, `id`) VALUES (1, 1, 'd', 'installing-system-drivers.xml', '{{ url:site }}files/large/552e954e3affe3ccc3ca95009b84ac17.xml', '', '', '552e954e3affe3ccc3ca95009b84ac17.xml', '.xml', 'text/xml', 3.19, 0, 0, 1383639595, '9517fd0bf8faa65')
ERROR - 2013-11-05 10:41:25 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = bootstrap
ERROR - 2013-11-05 10:41:26 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = bootstrap
ERROR - 2013-11-05 10:55:57 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_100_f6f6f6_1x400.png
ERROR - 2013-11-05 10:55:58 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_highlight-soft_75_ffe45c_1x100.png
ERROR - 2013-11-05 10:55:58 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_gloss-wave_35_f6a828_500x100.png
ERROR - 2013-11-05 10:55:59 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ffffff_256x240.png
ERROR - 2013-11-05 10:56:00 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-icons_ef8c08_256x240.png
ERROR - 2013-11-05 10:56:24 --> Page Missing: addons/shared_addons/themes/bootstrap/css/images/ui-bg_glass_65_ffffff_1x400.png
ERROR - 2013-11-05 11:01:15 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:15 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:17 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:33 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:34 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:34 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:42 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:43 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:52 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:01:54 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:54 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:59 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:01:59 --> Query error: Unknown column 'dfafasd' in 'where clause' - Invalid query: SELECT * FROM default_course_courses where id = dfafasd
ERROR - 2013-11-05 11:02:21 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:02:47 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:02:47 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:03:49 --> Page Missing: learner/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:05:44 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:05:52 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:06:06 --> Page Missing: test/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:06:07 --> Page Missing: test/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:06:14 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\learner\models\model_users.php 1086
ERROR - 2013-11-05 11:07:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:07:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 18:13:57 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT HeirarchyID FROM default_syllabus
            WHERE Type = 4 AND ParentID = (SELECT ParentID FROM default_syllabus WHERE HeirarchyID = bootstrap AND Type = 4) ORDER BY `order`
ERROR - 2013-11-05 18:13:59 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT HeirarchyID FROM default_syllabus
            WHERE Type = 4 AND ParentID = (SELECT ParentID FROM default_syllabus WHERE HeirarchyID = bootstrap AND Type = 4) ORDER BY `order`
ERROR - 2013-11-05 11:25:29 --> Severity: Notice  --> Undefined index: items C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\admin.php 104
ERROR - 2013-11-05 11:25:29 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\admin.php 115
ERROR - 2013-11-05 11:28:54 --> Page Missing: profiling/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:28:55 --> Page Missing: profiling/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:41:51 --> Page Missing: syllabus/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:41:52 --> Page Missing: syllabus/bootstrap/ico/favicon.png
ERROR - 2013-11-05 11:42:22 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = bootstrap AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-11-05 11:42:24 --> Query error: Unknown column 'bootstrap' in 'where clause' - Invalid query: SELECT sylla.HeirarchyID FROM default_syllabus sylla JOIN default_course_courses dcc ON sylla.HeirarchyID = dcc.id
WHERE sylla.Type = 2 AND dcc.status != 'draft' AND sylla.ParentID = (
         SELECT ID FROM default_syllabus WHERE HeirarchyID = bootstrap AND Type = 1) GROUP BY sylla.HeirarchyID ORDER BY sylla.HeirarchyID
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Undefined index: answers C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 841
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Undefined index: sections C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 842
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Undefined index: questions C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 843
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Undefined index: correct C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 844
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Undefined index: moduledetails C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 845
ERROR - 2013-11-05 11:46:18 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 10
ERROR - 2013-11-05 11:46:18 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 29
ERROR - 2013-11-05 11:46:19 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 59
ERROR - 2013-11-05 11:47:48 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:47:49 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:53:55 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 11:54:24 --> Page Missing: files/large
ERROR - 2013-11-05 11:55:07 --> Page Missing: files/large
ERROR - 2013-11-05 11:57:04 --> Page Missing: files/large
ERROR - 2013-11-05 11:57:18 --> Page Missing: files/large
ERROR - 2013-11-05 11:57:33 --> Page Missing: files/large
ERROR - 2013-11-05 11:57:49 --> Page Missing: files/large
ERROR - 2013-11-05 11:58:49 --> Page Missing: files/large
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined variable: params C:\xampp\htdocs\eTESDA\system\cms\libraries\pdf.php 15
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:44 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:45 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TH C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:46 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:47 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: overflow C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24134
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24291
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24478
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24502
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24543
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24551
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:48 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: headernrows C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 24823
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 25090
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:49 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:50 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:51 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:52 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: THEAD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: THEAD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TH>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:53 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TBODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TBODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined offset: -1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14392
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: BODY C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: BODY>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TABLE>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:54 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TR C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TR>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TD C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14214
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: TD>>ID>> C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 14259
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27064
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 1 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 2 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 2453
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8759
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 7365
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27962
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined index: used C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 27991
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 28063
ERROR - 2013-11-05 12:02:55 --> Severity: Notice  --> Undefined property: mPDF::$hasOC C:\xampp\htdocs\eTESDA\system\cms\libraries\mpdf\mpdf.php 8739
ERROR - 2013-11-05 12:05:31 --> Page Missing: learner/viewAllActivities
ERROR - 2013-11-05 12:08:37 --> Query error: Duplicate entry '9517fd0bf8faa65' for key 'PRIMARY' - Invalid query: INSERT INTO `default_files` (`folder_id`, `user_id`, `type`, `name`, `path`, `description`, `alt_attribute`, `filename`, `extension`, `mimetype`, `filesize`, `width`, `height`, `date_added`, `id`) VALUES (5, 1, 'i', 'badges_websiteisland1_stage1.png', '{{ url:site }}files/large/8e880221e2dd22c081da4b64d66d21b3.png', '', '', '8e880221e2dd22c081da4b64d66d21b3.png', '.png', 'image/png', 5.9, 300, 327, 1383646117, '9517fd0bf8faa65')
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 574
ERROR - 2013-11-05 12:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:25:11 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 574
ERROR - 2013-11-05 12:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 574
ERROR - 2013-11-05 12:25:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:25:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:25:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:25:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:25:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:25:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 574
ERROR - 2013-11-05 12:25:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:26:02 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:26:02 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:26:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 575
ERROR - 2013-11-05 12:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:26:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 575
ERROR - 2013-11-05 12:26:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND learnerID = 54' at line 1 - Invalid query: SELECT lcID FROM default_learner_courses WHERE courseID =  AND learnerID = 54
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:14 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:15 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:16 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:16 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 12:28:34 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:38 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:38 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:40 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:41 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:42 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 12:28:45 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:45 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 12:28:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:46 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:46 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 518
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 38
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 519
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\models\getSectors.php 46
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\controllers\Syllabus.php 520
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 9
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 33
ERROR - 2013-11-05 12:28:47 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 80
ERROR - 2013-11-05 12:28:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 90
ERROR - 2013-11-05 12:28:48 --> Severity: Notice  --> Undefined offset: 0 C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\syllabus\views\learn_ModuleListv2.php 104
ERROR - 2013-11-05 13:10:39 --> You did not select a file to upload.
ERROR - 2013-11-05 13:10:54 --> You did not select a file to upload.
ERROR - 2013-11-05 13:11:11 --> You did not select a file to upload.
ERROR - 2013-11-05 13:11:18 --> You did not select a file to upload.
ERROR - 2013-11-05 14:10:27 --> Query error: Duplicate entry '9517fd0bf8faa65' for key 'PRIMARY' - Invalid query: INSERT INTO `default_files` (`folder_id`, `user_id`, `type`, `name`, `path`, `description`, `alt_attribute`, `filename`, `extension`, `mimetype`, `filesize`, `width`, `height`, `date_added`, `id`) VALUES (1, 1, 'i', '1457117_10153412409315858_1264552869_n.jpg', '{{ url:site }}files/large/39e2991101d8c2714e91021eab9d1674.jpg', '', '', '39e2991101d8c2714e91021eab9d1674.jpg', '.jpg', 'image/jpeg', 61.82, 960, 393, 1383653427, '9517fd0bf8faa65')
ERROR - 2013-11-05 14:51:33 --> Severity: Notice  --> Undefined variable: answer C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\admin.php 136
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Undefined index: answers C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 841
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Undefined index: sections C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 842
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Undefined index: questions C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 843
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Undefined index: correct C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 844
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Undefined index: moduledetails C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\controllers\test.php 845
ERROR - 2013-11-05 15:12:33 --> Severity: Notice  --> Trying to get property of non-object C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 10
ERROR - 2013-11-05 15:12:33 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 29
ERROR - 2013-11-05 15:12:33 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\xampp\htdocs\eTESDA\addons\shared_addons\modules\test\views\test_SelfCheck.php 59
ERROR - 2013-11-05 15:14:33 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 15:14:35 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 15:16:24 --> Page Missing: files/large
ERROR - 2013-11-05 15:16:39 --> Page Missing: files/large
ERROR - 2013-11-05 15:17:05 --> Page Missing: files/large
ERROR - 2013-11-05 17:36:54 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-05 17:36:54 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
