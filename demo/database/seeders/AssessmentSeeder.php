<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseQuestion;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        $questionsData = [
            'Master Diploma in MEP' => [
                [
                    'question' => 'What does MEP stand for in the context of building services?',
                    'option_a' => 'Mechanical, Electrical, and Plumbing',
                    'option_b' => 'Mechanical, Engineering, and Production',
                    'option_c' => 'Manufacturing, Electronics, and Power',
                    'option_d' => 'Maintenance, Efficiency, and Planning',
                    'correct_option' => 'a',
                ],
                [
                    'question' => 'Which system is responsible for maintaining indoor air quality and thermal comfort?',
                    'option_a' => 'Plumbing',
                    'option_b' => 'Building Automation',
                    'option_c' => 'HVAC',
                    'option_d' => 'Fire Suppression',
                    'correct_option' => 'c',
                ]
            ],
            'Master Diploma in BIM D' => [
                [
                    'question' => 'What is the primary benefit of using BIM in construction projects?',
                    'option_a' => 'Reduced material cost only',
                    'option_b' => 'Improved collaboration and conflict detection',
                    'option_c' => 'Faster internet speeds on site',
                    'option_d' => 'Automatic project funding',
                    'correct_option' => 'b',
                ]
            ],
            'Professional MEP Diploma in HVAC' => [
                [
                    'question' => 'What is the purpose of a psychrometric chart in HVAC design?',
                    'option_a' => 'To calculate pipe pressure',
                    'option_b' => 'To analyze properties of moist air',
                    'option_c' => 'To determine electrical load',
                    'option_d' => 'To design duct layouts',
                    'correct_option' => 'b',
                ]
            ],
            'Professional MEP Diploma in Electrical Design and Drafting' => [
                [
                    'question' => 'In electrical design, what is the standard color for a ground wire in many international codes?',
                    'option_a' => 'Red',
                    'option_b' => 'Black',
                    'option_c' => 'Green or Green/Yellow',
                    'option_d' => 'Blue',
                    'correct_option' => 'c',
                ]
            ],
            'Professional MEP Diploma in Fire Fighting and Plumbing' => [
                [
                    'question' => 'What does NFPA stand for in fire safety standards?',
                    'option_a' => 'National Fire Protection Association',
                    'option_b' => 'National Federation of Pipe Architects',
                    'option_c' => 'New Fire Prevention Agency',
                    'option_d' => 'Network of Fire and Plumbing Authorities',
                    'correct_option' => 'a',
                ]
            ],
            'Professional BIM Diploma in Revit and Navisworks' => [
                [
                    'question' => 'Which tool in Navisworks is primarily used to identify spatial conflicts between different models?',
                    'option_a' => 'Timelapse',
                    'option_b' => 'Clash Detective',
                    'option_c' => 'Appearance Profiler',
                    'option_d' => 'Quantity Takeoff',
                    'correct_option' => 'b',
                ]
            ],
            'Professional Training in AutoCAD' => [
                [
                    'question' => 'Which AutoCAD command is used to create a mirrored copy of selected objects?',
                    'option_a' => 'COPY',
                    'option_b' => 'ROTATE',
                    'option_c' => 'MIRROR',
                    'option_d' => 'OFFSET',
                    'correct_option' => 'c',
                ]
            ],
            'Professional BIM Diploma in Sketch up and Lumion' => [
                [
                    'question' => 'In Lumion, what is the primary purpose of "Reflection Planes"?',
                    'option_a' => 'To make objects transparent',
                    'option_b' => 'To create realistic reflections on surfaces like glass or water',
                    'option_c' => 'To add wind effects to trees',
                    'option_d' => 'To change the time of day',
                    'correct_option' => 'b',
                ]
            ],
        ];

        foreach ($courses as $course) {
            $courseTitle = $course->title;
            if (isset($questionsData[$courseTitle])) {
                foreach ($questionsData[$courseTitle] as $qData) {
                    CourseQuestion::create(array_merge($qData, [
                        'course_id' => $course->id,
                        'points' => 5,
                    ]));
                }
            }
        }
    }
}
