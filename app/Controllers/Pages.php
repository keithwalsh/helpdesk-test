<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function __construct()
    {
        require_once APPPATH . 'Services/StarWarsService.php';
    }

    public function index(): string
    {
    }

    public function one(): string
    {
        return view('page_one.php');
    }

    public function two(): string
    {
        $posts = [
            [
                "title" => "The Future of AI: Trends to Watch",
                "image" => "https://picsum.photos/500/300?random=1",
                "excerpt" => "Explore the latest advancements in AI and how they are shaping the future of technology."
            ],
            [
                "title" => "10 Productivity Hacks for Remote Workers",
                "image" => "https://picsum.photos/500/300?random=2",
                "excerpt" => "Boost your efficiency while working from home with these proven productivity tips."
            ],
            [
                "title" => "The Ultimate Guide to Web Security",
                "image" => "https://picsum.photos/500/300?random=3",
                "excerpt" => "Learn essential security practices to keep your website safe from cyber threats."
            ],
            [
                "title" => "Mastering Laravel: Tips for Advanced Developers",
                "image" => "https://picsum.photos/500/300?random=4",
                "excerpt" => "Take your Laravel development skills to the next level with these expert techniques."
            ],
            [
                "title" => "Why Cloud Computing is the Future of Business",
                "image" => "https://picsum.photos/500/300?random=5",
                "excerpt" => "Discover the benefits of cloud computing and how it can transform your business operations."
            ],
            [
                "title" => "How to Optimize Your Website for SEO in 2025",
                "image" => "https://picsum.photos/500/300?random=6",
                "excerpt" => "A step-by-step guide to improving your website’s ranking on search engines."
            ],
            [
                "title" => "The Rise of No-Code Development Platforms",
                "image" => "https://picsum.photos/500/300?random=7",
                "excerpt" => "Explore how no-code and low-code platforms are changing software development."
            ],
            [
                "title" => "Top 5 Programming Languages to Learn in 2025",
                "image" => "https://picsum.photos/500/300?random=8",
                "excerpt" => "Find out which programming languages will be most in demand in the coming years."
            ],
            [
                "title" => "The Art of Writing Clean Code",
                "image" => "https://picsum.photos/500/300?random=9",
                "excerpt" => "Learn best practices for writing maintainable and readable code."
            ],
            [
                "title" => "A Beginner’s Guide to API Development",
                "image" => "https://picsum.photos/500/300?random=10",
                "excerpt" => "Understand the basics of designing and building APIs effectively."
            ],
            [
                "title" => "Cybersecurity Tips for Small Businesses",
                "image" => "https://picsum.photos/500/300?random=11",
                "excerpt" => "Protect your business from cyber threats with these security measures."
            ],
            [
                "title" => "How to Build Scalable Web Applications",
                "image" => "https://picsum.photos/500/300?random=12",
                "excerpt" => "Discover key principles for designing high-performance, scalable web apps."
            ]
        ];

        return view('page_two.php', ['post' => $post]);
    }

    public function three(): string
    {
        $sw = new \App\Services\StarWarsService();
        $films = $sw->getFilms();

        return view('page_three.php', ['films' => $films]);
    }
}
