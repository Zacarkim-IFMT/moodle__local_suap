<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Task schedule configuration for the local_suap plugin.
 *
 * @package   local_suap
 * @copyright Year, You Name <your@email.address>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$tasks = [
    [
        'classname' => 'local_suap\task\sync_up_enrolments_task',
        'blocking' => 1,
        'minute' => '*/1',
        'hour' => '*',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
];
