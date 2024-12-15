<?php
namespace local_mprogress\output;

use renderable;
use templatable;
use renderer_base;
use core_completion\progress;
use core_completion\cm_completion_details;

class dashboard implements renderable, templatable {
    private $userid;

    public function __construct($userid) {
        $this->userid = $userid;
    }

    public function export_for_template(renderer_base $output) {
        global $DB;

        $courses = enrol_get_users_courses($this->userid);
        $progress_data = [];

        foreach ($courses as $course) {
            // Получение итоговой оценки
            $grade = $DB->get_record_sql(
                "SELECT finalgrade, grademax
                 FROM {grade_items} gi
                 JOIN {grade_grades} gg ON gi.id = gg.itemid
                 WHERE gi.courseid = ? AND gg.userid = ? AND gi.itemtype = 'course'",
                [$course->id, $this->userid]
            );

            $finalgrade = $grade && $grade->grademax > 0 
                ? round(($grade->finalgrade / $grade->grademax) * 100, 2) 
                : 0;

            // Получение прогресса курса
            $progress = progress::get_course_progress_percentage($course, $this->userid);
            $progress = $progress !== null ? round($progress, 2) : 0;

            // Получение заданий курса
            $activities = $this->get_course_activities($course->id);

            $progress_data[] = [
                'course_name' => $course->fullname,
                'course_id' => $course->id,
                'final_grade' => $finalgrade,
                'progress' => $progress,
                'activities' => $activities
            ];
        }

        return [
            'courses' => $progress_data
        ];
    }

    private function get_course_activities($courseid) {
        global $DB;
    
        $modinfo = get_fast_modinfo($courseid);
        $activities = [];
    
        foreach ($modinfo->cms as $cm) {
            if ($cm->uservisible) {
                // Получаем детали завершения
                $completion = cm_completion_details::get_instance($cm, $this->userid);
                $completion_state = isset($completion->completionstate) ? $completion->completionstate * 100 : 0;
    
                // Получаем информацию об оценке
                $grade_info = grade_get_grades($courseid, 'mod', $cm->modname, $cm->instance, $this->userid);
    
                // Рассчитываем процент выполнения задания
                $percentage = (isset($grade_info->items[0]->grades[$this->userid]) && isset($grade_info->items[0]->grademax) && $grade_info->items[0]->grademax > 0) 
                    ? round(($grade_info->items[0]->grades[$this->userid]->grade / $grade_info->items[0]->grademax) * 100) 
                    : 0;
    
                $activities[] = [
                    'name' => $cm->name,
                    'completion' => $completion_state, // Прогресс завершения активности
                    'grade' => isset($grade_info->items[0]->grades[$this->userid]) 
                        ? intval($grade_info->items[0]->grades[$this->userid]->grade) 
                        : null,
                    'grademax' => isset($grade_info->items[0]) 
                        ? intval($grade_info->items[0]->grademax) 
                        : null,
                    'percentage' => $percentage, // Новый ключ для процента выполнения
                ];
            }
        }
    
        return $activities;
    }
}
