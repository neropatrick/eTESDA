<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2013-11-01 16:21:38 --> Query error: Unknown column 'default_course_courses.duration' in 'field list' - Invalid query: SELECT default_course_courses.duration, default_course_courses.image, default_course_courses.id, default_course_courses.title, 
        default_course_courses.image, COUNT(default_learner_courses.courseID) count FROM default_learner_courses JOIN
        default_course_courses ON default_course_courses.id = default_learner_courses.courseID 
        WHERE default_learner_courses.isEnrolled = 1 AND default_course_courses.status != 'draft'
        GROUP BY courseID
        ORDER BY count DESC LIMIT 4
ERROR - 2013-11-01 16:22:00 --> Page Missing: php
ERROR - 2013-11-01 23:22:00 --> Query error: Table 'etesda.default_ref_tags' doesn't exist - Invalid query: SELECT id, tag FROM default_ref_tags
ERROR - 2013-11-01 17:18:10 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-11-01 17:18:15 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-11-01 17:18:20 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-11-01 17:18:26 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
ERROR - 2013-11-01 17:18:36 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT image, id ID, title, status
            FROM default_course_courses WHERE id = undefined 
ERROR - 2013-11-01 17:18:36 --> Severity: Warning  --> mysql_pconnect(): MySQL server has gone away C:\xampp\htdocs\eTESDA\system\codeigniter\database\drivers\mysql\mysql_driver.php 107
