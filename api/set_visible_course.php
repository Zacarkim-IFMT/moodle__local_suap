<?php

namespace local_suap;

require_once('../../../config.php');
require_once('../../../course/externallib.php');
require_once('../locallib.php');
require_once("servicelib.php");

class set_hidden_course extends \local_suap\service{

    function do_call() {
        global $DB, $USER;

        $USER = $DB->get_record('user', ['username' => $_GET['username']]);

        $course = $DB->get_record('course', ['id' => $_GET['courseid']]);

        $visible = $_GET['visible'];

        return $this->execute($course, $visible);
    }

    function execute($course, $visible) {
        global $DB;

        $course->visible = $visible;
        $DB->update_record('course', $course);
        return ["error" => false];
    }


}

(new set_hidden_course())->call();