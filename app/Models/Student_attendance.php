<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_attendance extends Model
{
    protected $fillable = [
        'attendance_id', 'student_id', 'attendance_type_id', 
        'attitude_id', 'comment'
    ];
    
    public function attendance()
    {
        return $this->belongsTo(Attendances::class);
    }
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function attendanceType()
    {
        return $this->belongsTo(Attendance_type::class);
    }
    
    public function attitude()
    {
        return $this->belongsTo(Attitude::class);
    }
}
