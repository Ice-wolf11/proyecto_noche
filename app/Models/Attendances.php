<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    protected $fillable = ['fecha', 'teaching_units_assignment_id'];

    public function teachingUnitAssignment()
    {
        return $this->belongsTo(Teaching_units_assignment::class, 'teaching_units_assignment_id');
    }

    public function studentAttendances()
    {
        return $this->hasMany(Student_attendance::class, 'attendance_id');
    }
}
