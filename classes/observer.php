<?php
/**
 * Local stuff for category enrolment plugin.
 *
 * @package    local_suap
 * @copyright  2022 kelson Medeiros {@link https://github.com/kelsoncm}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


class local_suap_observer {
    public static function user_enrolment_created(\core\event\user_enrolment_created $event) {
        global $DB;
    }

    public static function user_enrolment_deleted(\core\event\user_enrolment_deleted $event) {
        global $DB;
    }
    
    public static function user_enrolment_updated(\core\event\user_enrolment_updated $event) {
        global $DB;
    }
}
