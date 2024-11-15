<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teaching_unit extends Model
{
    protected $fillable = ['name', 'code', 'credits', 'semester_id'];

    public function teachingUnitAssignments()
    {
        return $this->hasMany(Teaching_units_assignment::class, 'teaching_unit_id');
    }
}
