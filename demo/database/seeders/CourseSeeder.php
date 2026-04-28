<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $trainer = User::where('email', 'trainer@edulms.com')->first();
        $instructorName = $trainer ? $trainer->name : 'Expert Trainer';

        $courses = [
            [
                'title' => 'Master Diploma in MEP',
                'description' => 'A comprehensive master-level program covering Mechanical, Electrical, and Plumbing engineering. Master the core principles of building services and integrated system design.',
                'thumbnail' => '/images/courses/master_diploma_mep.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 25000,
                'learning_outcomes' => "Complete MEP System Design\nIntegrated Building Services Coordination\nInternational Standards Compliance\nProject Management Fundamentals"
            ],
            [
                'title' => 'Master Diploma in BIM D',
                'description' => 'Advanced Building Information Modeling program focused on high-level digital construction. Learn to manage complex projects using state-of-the-art BIM methodologies.',
                'thumbnail' => '/images/courses/master_diploma_bim_d.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 28000,
                'learning_outcomes' => "Advanced BIM Model Management\n4D & 5D BIM Simulations\nStandardized Digital Workflows\nProject Collaboration Strategies"
            ],
            [
                'title' => 'Professional MEP Diploma in HVAC',
                'description' => 'Deep dive into Heating, Ventilation, and Air Conditioning systems. Learn HVAC design, load calculations, and equipment selection for residential and commercial buildings.',
                'thumbnail' => '/images/courses/professional_mep_hvac.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 15000,
                'learning_outcomes' => "Psychrometric Analysis\nHeat Load Calculations\nDuct Design & Pipe Sizing\nHVAC Equipment Selection"
            ],
            [
                'title' => 'Professional MEP Diploma in Electrical Design and Drafting',
                'description' => 'Specialized training in electrical system design and drafting. Covers everything from power distribution to lighting design and building automation.',
                'thumbnail' => '/images/courses/professional_mep_electrical.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 15000,
                'learning_outcomes' => "Power Distribution Design\nLighting & Lux Level Calculations\nEarthing & Lightning Protection\nBuilding Automation Systems"
            ],
            [
                'title' => 'Professional MEP Diploma in Fire Fighting and Plumbing',
                'description' => 'Master the essential building safety and utility systems. Learn fire suppression techniques and efficient plumbing design following global safety codes.',
                'thumbnail' => '/images/courses/professional_mep_fire_plumbing.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 15000,
                'learning_outcomes' => "Fire Suppression System Design\nHydraulic Calculations\nSanitary & Water Supply Pipe Sizing\nNFPA & IPC Standards"
            ],
            [
                'title' => 'Professional BIM Diploma in Revit and Navisworks',
                'description' => 'Become a pro in Autodesk Revit and Navisworks. Master 3D modeling, documentation, and clash detection for multidisciplinary AEC projects.',
                'thumbnail' => '/images/courses/professional_bim_revit_navisworks.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 20000,
                'learning_outcomes' => "Advanced Revit Architecture/MEP Modeling\nClash Detection & Resolution\nParametric Family Creation\nModel Coordination in Navisworks"
            ],
            [
                'title' => 'Professional Training in AutoCAD',
                'description' => 'The foundation of engineering design. Master 2D drafting and 3D modeling using AutoCAD to create precise technical drawings and blueprints.',
                'thumbnail' => '/images/courses/professional_autocad.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 8000,
                'learning_outcomes' => "Advanced 2D Drafting Techniques\nLayer Management & Dynamic Blocks\nIntroduction to 3D Modeling\nPlotting & Publishing Standards"
            ],
            [
                'title' => 'Professional BIM Diploma in Sketch up and Lumion',
                'description' => 'Master the art of architectural visualization. Learn to create stunning 3D models in SketchUp and render hyper-realistic cinematic visualizations in Lumion.',
                'thumbnail' => '/images/courses/professional_bim_sketchup_lumion.png',
                'youtube_link' => 'https://youtu.be/jA35u7B9VFg?si=X-Homrzbbz8A-KUY',
                'price' => 18000,
                'learning_outcomes' => "High-Speed 3D Modeling\nRealistic Materials & Textures\nCinematic Rendering Techniques\nLandscaping & Environment Design"
            ],
        ];

        foreach ($courses as $courseData) {
            $courseData['instructor_name'] = $instructorName;
            Course::create($courseData);
        }
    }
}
