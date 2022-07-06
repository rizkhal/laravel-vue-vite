<?php

namespace App\Models;

use Smartschool\Auth\Models\Student as BaseStudentModel;

class Student extends BaseStudentModel
{
    public static function getCurrentStudents()
    {
        return Student::where('id_identitas_sekolah', auth()->user()->id_identitas_sekolah)->get();
    }
}
