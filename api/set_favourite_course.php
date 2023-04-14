<?php

namespace local_suap;

require_once('../../../config.php');
require_once('../../../course/externallib.php');
require_once('../locallib.php');
require_once("servicelib.php");

class set_favourite_course extends \local_suap\service{

    function do_call() {
        global $DB, $USER;

        $USER = $DB->get_record('user', ['username' => $_GET['username']]);

        $course = $DB->get_record('course', ['id' => $_GET['courseid']]);
        $favourite = $_GET['favourite'];

        return $this->execute($course->id, $favourite);
    }

    function execute($courseid, $favourite) {
         return \core_course_external::set_favourite_courses([['id'=>$courseid, 'favourite'=>$favourite]]);
    }


}

(new set_favourite_course())->call();
