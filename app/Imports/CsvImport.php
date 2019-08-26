<?php

namespace App\Imports;

use App\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'student_no' => $row['student_no'],
            'student_pw' => \Hash::make($row['student_pw']),
            'lastname'   => $row['lastname'],
            'firstname'  => $row['firstname'],
            'middlename' => $row['middlename'],
            'course_id'  => $row['course_id'],
            'year'       => $row['year'],
            'section'    => $row['section'],
            'email_add'  => $row['email_add']
        ]);
    }
}
