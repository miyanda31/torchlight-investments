<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = [
            [
                'link'=>'https://pfs.pamthuziholdings.net',
                'image'=>'pic1',
                'description'=>'Financial Website',
                'cat'=>'Finance'
            ],
            [
                'link'=>'https://pcpm.pamthuziholdings.net',
                'image'=>'pic2',
                'description'=>'Construction Website',
                'cat'=>'Construction'
            ],
            [
                'link'=>'https://pamthuziholdings.net',
                'image'=>'pic3',
                'description'=>'Company Website',
                'cat'=>'Company'
            ],
            [
                'link'=>'https://apps.torchlightmw.com',
                'image'=>'pic4',
                'description'=>'Accommodation Website',
                'cat'=>'Accommodation'
            ],
            [
                'link'=>'https://loans.pamthuziholdings.net',
                'image'=>'pic5',
                'description'=>'Loan Management System',
                'cat'=>'Finance'
            ],
            [
                'link'=>'https://innovation.ctechlogic.com',
                'image'=>'pic6',
                'description'=>'Government Website',
                'cat'=>'Government'
            ],
        ];

        $faqs = [
           [ 'question' => 'What services do you offer?',
            'answer' => 'We offer a range of services including custom web design, web hosting, mobile application development, responsive website development, e-commerce solutions, digital marketing, and SEO services.',],


    [    'question' => 'How long does it take to build a website?',
        'answer' => 'The time it takes to build a website can vary depending on the complexity and size of the project. On average, our websites take between 4 to 6 weeks from start to finish.'],

['question' => 'Do you provide support after the website is live?',
'answer' => 'Yes, we provide ongoing support for all our websites. We believe in building long-term relationships with our clients.'],

[    'question' => 'Can you help me update my existing website?',
'answer' => 'Absolutely! We can help you update your existing website to make it more modern, user-friendly, and responsive.'],

['question' => 'How much does a website cost?',
'answer' => 'The cost of a website can vary depending on various factors,
including the complexity of the design, the number of pages, and any additional features you need. Contact us for a free quote.'],

   [ 'question' => ' Do you offer website hosting and domain services?',
'answer' => 'Yes, we do offer website hosting and domain services. We can help you find a domain and provide hosting solutions that fit your needs.'],

['question' => 'Will my website be mobile-friendly?',
'answer' => 'Yes, all our websites are designed to be responsive, which means they will work seamlessly on all devices, including desktops, laptops, tablets, and mobile phones.'],

[    'question' => 'How can I contact you?',
'answer' => 'You can contact us through the contact form on our website, or you can email us directly at info@torchlightmw.com. We look forward to hearing from you!'],

        ];
        return view('welcome',compact('works','faqs'));
    }


    public function about()
    {
        return view('about');
    }
    public function designing()
    {
        $reasons = [
            [
                'name'=>'Customer Support',
                'description'=>'At Torchlight, we believe that our relationship with our clients extends beyond just delivering
                 a website. We are dedicated to providing exceptional customer support.',
                'icon'=>'support',
            ],
            [
                'name'=>'Availability',
                'description'=>'Our customer support team is available 24/7 to assist you with any issues or queries you may have. We understand that your website is crucial to your business, and we\'re here to ensure it runs smoothly at all times.',
                'icon'=>'time',
            ],
            [
                'name'=>'Responsiveness',
                'description'=>'We pride ourselves on our quick response times. Our team is committed to addressing your concerns and resolving any issues as quickly as possible to minimize any potential downtime.',
                'icon'=>'phone',
            ],
            [
                'name'=>'Training',
                'description'=>'We provide comprehensive training on how to manage and update your website. Our team will guide you through the backend of your website and show you how to make changes and updates.',
                'icon'=>'git-merge',
            ],
            [
                'name'=>'Maintenance and Updates',
                'description'=>'We offer ongoing maintenance and update services to ensure your website remains secure, functional, and up-to-date with the latest web standards and technologies.',
                'icon'=>'cog',
            ],
            [
                'name'=>'Feedback',
                'description'=>'We value your feedback and use it to improve our services. We believe in continuous learning and improvement, and your feedback is crucial to our growth and success.',
                'icon'=>'user-voice',
            ],
        ];

        $websites = [
            [
                'icon'=>'cart',
                "name"=>"E-commerce Websites",
                "description"=>"These are online portals where goods and services can be bought and sold. They require features like shopping carts, secure payment gateways, and product catalogs."
            ],

    ['icon'=>'business',
        "name"=>"Business Websites",
        "description"=>"These websites provide essential information about a business such as its services, contact information, and company background."
    ],

   ['icon'=>'graduation',
       "name"=>"Educational Websites",
       "description"=>"These sites are designed for educational institutions and offer information about the institution, courses, admissions, and more."
   ],

    ['icon'=>'home-heart',
        "name"=>"Non-profit Websites",
        "description"=>"These websites are created for non-profit organizations and charities. They often include features for online donations and event registrations."
    ],

    ['icon'=>'chess',
        "name"=>"Portfolio Websites",
        "description"=>"These are used by artists, designers, photographers, and freelancers to showcase their work to potential clients."
    ],

     ['icon'=>'file',
         "name"=>"Blogs",
         "description"=>"These websites are regularly updated with articles, photos, and videos. They're often used by individuals or groups to share thoughts, ideas, and experiences."
     ],

['icon'=>'news',
    "name"=>"News Websites",
    "description"=>"These sites are dedicated to sharing news and articles on various topics. They require features to categorize and archive content."
],

['icon'=>'face',
    "name"=>"Social Media Websites",
    "description"=>"These websites are platforms where users can create profiles and interact with each other through posts, comments, and private messaging."
]

];
        return view('designing',compact('reasons','websites'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function email()
    {
        return view('contact');
    }
    public function hosting(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $reasons = [
            [
                'name'=>'99% Uptime',
                'description'=>'Time is money and we will make sure you are 99.99% there ensuring that your customers or clients are able to find you all the time',
                'icon'=>'server',
            ],
            [
                'name'=>'NVME servers',
                'description'=>'Our servers run on the latest lightining NVME storage to ensure that your website is fast and cached for better indexing',
                'icon'=>'bolt',
            ],
            [
                'name'=>'Professional Emails',
                'description'=>'Get fully customized professional email addresses that match your brand name and stand out of the cloud',
                'icon'=>'envelope',
            ],
            [
                'name'=>'Control Panel',
                'description'=>'Everything is in your hands through our state of the art cPanel to ensure that your developers manage everything.',
                'icon'=>'dashboard',
            ],
            [
                'name'=>'Maintenance and Back Up',
                'description'=>'We offer ongoing maintenance and update services to ensure your website remains secure, functional, and up-to-date with the latest web standards and technologies.',
                'icon'=>'cog',
            ],
            [
                'name'=>'Secure SSL',
                'description'=>'Your site is secure through SSL certificate provided which means you always send your data in encrypted format',
                'icon'=>'check-shield',
            ],
        ];
        return view('hosting',compact('reasons'));
    }


    public function quotation()
    {
        return view('quotation');
    }

}
