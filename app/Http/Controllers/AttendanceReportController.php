<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendances;
use App\Models\Teaching_unit;
use App\Models\Student_attendance;

class AttendanceReportController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();
        $teachingUnits = Teaching_unit::all();

        $query = Student_attendance::query();

        // Filtrar por nombre de estudiante
        if ($request->filled('student_name')) {
            $query->whereHas('student', function($q) use ($request) {
                $q->where('first_name', 'like', '%' . $request->student_name . '%')
                  ->orWhere('last_name', 'like', '%' . $request->student_name . '%');
            });
        }

        // Filtrar por nombre de curso
        if ($request->filled('course_name')) {
            $query->whereHas('attendance.teachingUnitAssignment.teachingUnit', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->course_name . '%');
            });
        }

        // Cargar relaciones necesarias
        $studentAttendances = $query->with(['attendance.teachingUnitAssignment.teachingUnit', 'student', 'attendanceType', 'attitude'])->get();

        return view('reports.attendance_report', compact('students', 'teachingUnits', 'studentAttendances'));
    }
}
