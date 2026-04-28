<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            $courseTitle = $course->title;

            Lesson::create([
                'course_id' => $course->id,
                'title' => "Introduction to $courseTitle",
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'order' => 1,
            ]);

            Lesson::create([
                'course_id' => $course->id,
                'title' => "Core Modules of $courseTitle",
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'order' => 2,
            ]);

            Lesson::create([
                'course_id' => $course->id,
                'title' => "$courseTitle: Advanced Project",
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'order' => 3,
            ]);
        }
    }
}
