<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'id' => '001',
                'name' => 'messi',
                'program' => 'football'
            ],
            [
                'id' => '002',
                'name' => 'ronaldo',
                'program' => 'football'
            ],
            [
                'id' => '003',
                'name' => 'mbappe',
                'program' => 'football'
            ]
        ];

        return view('students.index', ['students' => $students]);
    }
}

