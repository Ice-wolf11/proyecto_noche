<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teaching_units_assignment extends Model
{
    protected $fillable = ['teacher_id', 'teaching_unit_id', 'period_id', 'shift_id'];

    public function teachingUnit()
    {
        return $this->belongsTo(Teaching_unit::class, 'teaching_unit_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendances::class, 'teaching_units_assignment_id');
    }
}
