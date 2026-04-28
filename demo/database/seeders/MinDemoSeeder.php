<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseQuestion;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MinDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Users (from LoginDataOnlySeeder)
        $admin = User::updateOrCreate(
            ['email' => 'admin@edulms.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'is_trainer' => false,
                'is_active' => true,
            ]
        );

        $trainer = User::updateOrCreate(
            ['email' => 'trainer@edulms.com'],
            [
                'name' => 'Expert Trainer',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => true,
                'is_active' => true,
                'whatsapp_number' => '+919876543210',
                'linkedin_url' => 'https://linkedin.com/search/results/all/?keywords=expert-trainer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'student@edulms.com'],
            [
                'name' => 'Rahul Sharma',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => false,
                'is_active' => true,
                'whatsapp_number' => '+919999999999',
                'linkedin_url' => 'https://linkedin.com/in/rahul-sharma',
            ]
        );

        // 2. Seed 2 Courses (from CourseSeeder)
        $coursesData = [
            [
                'title' => 'Master Diploma in MEP',
                'description' => 'A comprehensive master-level program covering Mechanical, Electrical, and Plumbing engineering. Master the core principles of building services and integrated system design.',
                'thumbnail' => '/images/courses/master_diploma_mep.png',
                'youtube_link' => 'https://youtu.be/nCt7Hm0KMYc',
                'price' => 25000,
                'learning_outcomes' => "Complete MEP System Design\nIntegrated Building Services Coordination\nInternational Standards Compliance\nProject Management Fundamentals"
            ],
            [
                'title' => 'Master Diploma in BIM D',
                'description' => 'Advanced Building Information Modeling program focused on high-level digital construction. Learn to manage complex projects using state-of-the-art BIM methodologies.',
                'thumbnail' => '/images/courses/master_diploma_bim_d.png',
                'youtube_link' => 'https://youtu.be/nCt7Hm0KMYc',
                'price' => 28000,
                'learning_outcomes' => "Advanced BIM Model Management\n4D & 5D BIM Simulations\nStandardized Digital Workflows\nProject Collaboration Strategies"
            ],
        ];

        foreach ($coursesData as $cData) {
            $course = Course::updateOrCreate(
                ['title' => $cData['title']],
                array_merge($cData, ['instructor_name' => $trainer->name])
            );

            // 3. Seed 3 Lessons for each course (from LessonSeeder)
            $lessons = [
                ['title' => "Introduction to {$course->title}", 'order' => 1],
                ['title' => "Core Modules of {$course->title}", 'order' => 2],
                ['title' => "{$course->title}: Advanced Project", 'order' => 3],
            ];

            foreach ($lessons as $lData) {
                Lesson::updateOrCreate(
                    ['course_id' => $course->id, 'title' => $lData['title']],
                    [
                        'video_url' => 'https://youtu.be/nCt7Hm0KMYc',
                        'order' => $lData['order'],
                    ]
                );
            }

            // 4. Seed Assessments (from AssessmentSeeder)
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
                        'correct_option' => 'a',
                    ]
                ],
                'Master Diploma in BIM D' => [
                    [
                        'question' => 'What is the primary benefit of using BIM in construction projects?',
                        'option_a' => 'Reduced material cost only',
                        'option_b' => 'Improved collaboration and conflict detection',
                        'option_c' => 'Faster internet speeds on site',
                        'option_d' => 'Automatic project funding',
                        'correct_option' => 'a',
                    ]
                ],
            ];

            if (isset($questionsData[$course->title])) {
                foreach ($questionsData[$course->title] as $qData) {
                    CourseQuestion::updateOrCreate(
                        ['course_id' => $course->id, 'question' => $qData['question']],
                        array_merge($qData, ['points' => 5])
                    );
                }
            }
        }

        $this->command->info('✅ MinDemoSeeder completed: 3 Users, 2 Courses, 6 Lessons, and 3 Assessments seeded.');
    }
}
