<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseQuestion;
use App\Models\Lesson;
use App\Models\User;
use App\Models\LiveClassBranch;
use App\Models\LiveClass;
use App\Models\Admission;
use App\Models\Fee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MasterDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Users
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@edulms.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'is_trainer' => false,
                'is_active' => true,
            ]
        );

        // Trainers
        $trainer1 = User::updateOrCreate(
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

        $trainer2 = User::updateOrCreate(
            ['email' => 'sarah@edulms.com'],
            [
                'name' => 'Sarah Jenkins',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => true,
                'is_active' => true,
            ]
        );

        $trainer3 = User::updateOrCreate(
            ['email' => 'michael@edulms.com'],
            [
                'name' => 'Michael Chen',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => true,
                'is_active' => true,
            ]
        );

        // Students
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

        User::updateOrCreate(
            ['email' => 'emily@edulms.com'],
            [
                'name' => 'Emily Rodriguez',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => false,
                'is_active' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'david@edulms.com'],
            [
                'name' => 'David Lee',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'is_trainer' => false,
                'is_active' => true,
            ]
        );

        // 2. Seed 8 Courses
        $trainers = [$trainer1, $trainer2, $trainer3];
        $coursesData = [
            [
                'title' => 'Master Diploma in MEP',
                'description' => 'A comprehensive master-level program covering Mechanical, Electrical, and Plumbing engineering.',
                'thumbnail' => 'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 25000,
                'learning_outcomes' => "Complete MEP System Design\nIntegrated Building Services Coordination"
            ],
            [
                'title' => 'Master Diploma in BIM D',
                'description' => 'Advanced Building Information Modeling program focused on high-level digital construction.',
                'thumbnail' => 'https://images.unsplash.com/photo-1503387762-592dea58ef23?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 28000,
                'learning_outcomes' => "Advanced BIM Model Management\n4D & 5D BIM Simulations"
            ],
            [
                'title' => 'Civil Structural Design',
                'description' => 'Master the art of structural analysis and design for modern infrastructure.',
                'thumbnail' => 'https://images.unsplash.com/photo-1518005020251-582c3b204481?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 22000,
                'learning_outcomes' => "Structural Integrity Analysis\nSeismic Design Principles"
            ],
            [
                'title' => 'Electrical System Design',
                'description' => 'Industrial and residential electrical systems design and load calculation.',
                'thumbnail' => 'https://images.unsplash.com/photo-1498084393753-b411b2d26b34?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 20000,
                'learning_outcomes' => "Power Distribution Systems\nRenewable Energy Integration"
            ],
            [
                'title' => 'Project Management Professional',
                'description' => 'Learn the global standards for project management excellence.',
                'thumbnail' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 30000,
                'learning_outcomes' => "Agile & Waterfall Methodologies\nRisk Management Strategies"
            ],
            [
                'title' => 'Data Science for Engineers',
                'description' => 'Harness the power of data to optimize engineering workflows.',
                'thumbnail' => 'https://images.unsplash.com/photo-1551288049-bbda3865c17d?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 26000,
                'learning_outcomes' => "Python for Engineering\nMachine Learning Basics"
            ],
            [
                'title' => 'Digital Twin Technology',
                'description' => 'Create virtual replicas of physical assets for real-time monitoring.',
                'thumbnail' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 32000,
                'learning_outcomes' => "IoT Sensor Integration\nPredictive Maintenance Models"
            ],
            [
                'title' => 'Sustainable Architecture',
                'description' => 'Design green buildings that minimize environmental impact.',
                'thumbnail' => 'https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&q=80&w=800',
                'youtube_link' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                'price' => 24000,
                'learning_outcomes' => "LEED Certification Standards\nPassive Design Techniques"
            ],
        ];

        foreach ($coursesData as $index => $cData) {
            // Distribute across trainers (0, 1, 2, 0, 1, 2...)
            $assignedTrainer = $trainers[$index % count($trainers)];
            
            $course = Course::updateOrCreate(
                ['title' => $cData['title']],
                array_merge($cData, ['instructor_name' => $assignedTrainer->name])
            );

            // 3. Seed Lessons
            for ($i = 1; $i <= 3; $i++) {
                Lesson::updateOrCreate(
                    ['course_id' => $course->id, 'title' => "Lesson {$i} for {$course->title}"],
                    [
                        'video_url' => 'https://youtu.be/YRJ6xoiRcpQ?si=QFgS3o3SnYMUVQe4',
                        'order' => $i,
                    ]
                );
            }

            // 4. Seed Assessments
            CourseQuestion::updateOrCreate(
                ['course_id' => $course->id, 'question' => "What is the primary goal of {$course->title}?"],
                [
                    'option_a' => 'Option A',
                    'option_b' => 'Option B',
                    'option_c' => 'Option C',
                    'option_d' => 'Option D',
                    'correct_option' => 'a',
                    'points' => 5
                ]
            );
        }

        // 5. Seed Live Class Branches (Batches)
        $branch1 = LiveClassBranch::updateOrCreate(
            ['name' => 'Fullstack Web Dev - Batch A'],
            [
                'course_id' => 1,
                'trainer_id' => $trainer1->id, // Expert Trainer
                'status' => 'active'
            ]
        );
        $branch1->trainers()->sync([$trainer1->id]);

        $branch2 = LiveClassBranch::updateOrCreate(
            ['name' => 'UI/UX Mastery - Batch B'],
            [
                'course_id' => 2,
                'trainer_id' => $trainer2->id, // Sarah
                'status' => 'active'
            ]
        );
        $branch2->trainers()->sync([$trainer2->id]);

        $branch3 = LiveClassBranch::updateOrCreate(
            ['name' => 'Civil Engineering - Batch C'],
            [
                'course_id' => 3,
                'trainer_id' => $trainer3->id, // Michael
                'status' => 'active'
            ]
        );
        $branch3->trainers()->sync([$trainer3->id]);

        // 6. Seed some Live Classes
        LiveClass::updateOrCreate(
            ['title' => 'MEP Systems Deep Dive'],
            [
                'course_id' => 1,
                'live_class_branch_id' => $branch1->id,
                'instructor_name' => $trainer1->name,
                'start_time' => now()->addDays(1)->format('Y-m-d H:i:s'),
                'duration' => '2 Hours',
                'zoom_link' => 'https://zoom.us/j/123456789',
                'status' => 'upcoming'
            ]
        );

        // 7. Seed Fees for Students
        $students = User::where('is_admin', false)->where('is_trainer', false)->get();
        foreach ($students as $index => $student) {
            // Assign a fee for the first course
            Fee::updateOrCreate(
                ['user_id' => $student->id, 'course_id' => 1],
                [
                    'batch_id' => $branch1->id,
                    'total_amount' => 25000,
                    'paid_amount' => $index === 0 ? 5000 : 0, // One student has partially paid
                    'due_date' => now()->addDays(30)->format('Y-m-d'),
                    'status' => $index === 0 ? 'partially_paid' : 'pending',
                ]
            );
        }

        // 8. Seed Enrollments (Admissions) for Students
        foreach ($students as $index => $student) {
            // Enroll in Course 1
            Admission::updateOrCreate(
                ['user_id' => $student->id, 'course_id' => 1],
                [
                    'batch_id' => $branch1->id,
                    'status' => 'approved',
                    'progress' => $index === 0 ? 100 : rand(10, 80), // Rahul (index 0) is at 100%
                    'certificate_path' => $index === 0 ? 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf' : null,
                    'details' => json_encode(['note' => 'Demo Enrollment'])
                ]
            );

            // Also enroll in one more random course for variety
            $randomCourseId = rand(2, 8);
            Admission::updateOrCreate(
                ['user_id' => $student->id, 'course_id' => $randomCourseId],
                [
                    'status' => 'approved',
                    'details' => json_encode(['note' => 'Automatic Enrollment'])
                ]
            );
        }

        $this->command->info('✅ MasterDemoSeeder completed: All Users, Courses, Batches, Sessions, Fees, and Enrollments ready.');
    }
}
