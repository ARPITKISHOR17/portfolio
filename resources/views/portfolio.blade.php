@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center pt-20 pb-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800">
    <div class="max-w-7xl mx-auto w-full">
        <div class="text-center" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
            <div x-show="show" 
                 x-transition:enter="transition ease-out duration-1000" 
                 x-transition:enter-start="opacity-0 transform translate-y-10" 
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 class="space-y-6">
                
                <div class="inline-block">
                    <span class="inline-block px-4 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-400 rounded-full text-sm font-semibold mb-4">
                        👋 Welcome to my portfolio
                    </span>
                </div>
                
                <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-bold mb-6">
                    <span class="block text-gray-900 dark:text-white mb-2">Arpit Kishor</span>
                    <span class="block bg-gradient-to-r from-primary-600 via-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Full Stack Developer
                    </span>
                </h1>
                
                <p class="text-xl sm:text-2xl md:text-3xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                    PHP / Laravel Specialist | REST API Expert
                </p>
                
                <p class="text-base sm:text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-8 leading-relaxed">
                    I'm a Full Stack PHP / Laravel Developer with 3+ years of experience building secure, scalable, 
                    enterprise-grade web applications including SaaS systems, APIs, and product-based platforms. 
                    I work with Agile teams and have experience with enterprise MNC clients.
                </p>
                
                <div class="flex flex-wrap justify-center gap-4 mb-10">
                    <a href="#projects" class="btn-primary group">
                        <span>View My Projects</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="/resume.pdf" download class="btn-secondary group">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Download Resume</span>
                    </a>
                    <a href="#contact" class="btn-outline">
                        <span>Contact Me</span>
                    </a>
                </div>
                
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6 text-gray-600 dark:text-gray-400">
                    <a href="mailto:arpitkishor5647@gmail.com" class="flex items-center space-x-2 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span class="text-sm sm:text-base">arpitkishor5647@gmail.com</span>
                    </a>
                    <a href="tel:+917984821975" class="flex items-center space-x-2 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span class="text-sm sm:text-base">+91 7984821975</span>
                    </a>
                    <a href="https://linkedin.com/in/arpit-k-5a3093241" target="_blank" class="flex items-center space-x-2 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm sm:text-base">LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">About Me</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-gray-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 md:p-12 shadow-xl border border-gray-200 dark:border-gray-700">
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    I'm a Full Stack PHP / Laravel Developer with over 3 years of experience delivering 
                    enterprise-grade applications and backend systems. I specialize in Laravel (10–12), REST API 
                    architecture, database optimization, and secure coding practices.
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    I have hands-on experience working on production systems, SaaS platforms, banking portals, and mobile 
                    application backends. I've worked in Agile environments and contributed to projects involving 
                    MNC clients including Tech Mahindra.
                </p>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    My expertise includes backend architecture, RBAC security implementation, database performance 
                    optimization, and building scalable REST APIs for mobile and web platforms. I'm passionate about 
                    writing clean, maintainable code and delivering high-quality solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Technical Skills</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 text-lg">Technologies and tools I work with</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Backend Development -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Backend Development</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Laravel 10–12</span>
                    <span class="skill-tag">CodeIgniter 3</span>
                    <span class="skill-tag">REST API</span>
                    <span class="skill-tag">MVC Architecture</span>
                    <span class="skill-tag">OOP</span>
                    <span class="skill-tag">Eloquent ORM</span>
                    <span class="skill-tag">Queues & Jobs</span>
                    <span class="skill-tag">Middleware</span>
                </div>
            </div>

            <!-- Frontend -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Frontend</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">HTML</span>
                    <span class="skill-tag">CSS</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">jQuery</span>
                    <span class="skill-tag">Bootstrap</span>
                    <span class="skill-tag">Tailwind CSS</span>
                </div>
            </div>


            <!-- Database -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Database</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">PostgreSQL</span>
                    <span class="skill-tag">SQLite</span>
                    <span class="skill-tag">Query Optimization</span>
                    <span class="skill-tag">Database Indexing</span>
                </div>
            </div>

            <!-- Security -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Security</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">JWT</span>
                    <span class="skill-tag">Sanctum</span>
                    <span class="skill-tag">RBAC</span>
                    <span class="skill-tag">CSRF Protection</span>
                    <span class="skill-tag">XSS Prevention</span>
                    <span class="skill-tag">SQL Injection Prevention</span>
                    <span class="skill-tag">Encryption</span>
                </div>
            </div>

            <!-- Tools -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Tools</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Bitbucket</span>
                    <span class="skill-tag">GitHub</span>
                    <span class="skill-tag">GitLab</span>
                    <span class="skill-tag">Postman</span>
                    <span class="skill-tag">Jira</span>
                    <span class="skill-tag">Asana</span>
                </div>
            </div>

            <!-- DevOps -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">DevOps</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">Linux</span>
                    <span class="skill-tag">Apache</span>
                    <span class="skill-tag">CI/CD Basics</span>
                    <span class="skill-tag">Docker Basics</span>
                </div>
            </div>

            <!-- Testing -->
            <div class="skill-card group">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="skill-card-title">Testing</h3>
                </div>
                <div class="skill-tags">
                    <span class="skill-tag">PHPUnit</span>
                    <span class="skill-tag">API Testing</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Experience Section -->
<section id="experience" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Professional Experience</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 text-lg">My journey in software development</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-8">
            <!-- IPOP Solution -->
            <div class="experience-card">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Laravel Developer</h3>
                        <p class="text-xl text-primary-600 dark:text-primary-400">IPOP Solution – Ahmedabad</p>
                    </div>
                    <span class="text-gray-600 dark:text-gray-400 font-semibold">Mar 2025 – Present</span>
                </div>
                <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Developed and enhanced a scalable enterprise Order Taking System using Laravel 12
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Designed secure REST APIs using JWT and Sanctum for mobile apps and third-party integrations
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Improved API response time by 35% through database indexing, query optimization, and eager loading
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Implemented authentication, authorization, RBAC validation and middleware security
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Worked as a dedicated developer for MNC client Tech Mahindra
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Collaborated with Agile development teams
                    </li>
                </ul>
            </div>


            <!-- Phoenix IT Park -->
            <div class="experience-card">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">PHP Web Developer</h3>
                        <p class="text-xl text-primary-600 dark:text-primary-400">Phoenix IT Park – Ahmedabad</p>
                    </div>
                    <span class="text-gray-600 dark:text-gray-400 font-semibold">Dec 2022 – Feb 2025</span>
                </div>
                <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Developed secure web applications using Laravel, Core PHP, and CodeIgniter 3
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Built banking information portals for Sahakari and Nagarik Banks
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Designed MySQL schemas and optimized CRUD operations
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Implemented secure data handling using encryption, hashing, and session protection
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Applied enterprise-level backend security practices
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Developed responsive UI using Bootstrap, HTML, CSS, and jQuery
                    </li>
                </ul>
            </div>


            <!-- Trivedi Infoway -->
            <div class="experience-card">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">PHP Developer Intern</h3>
                        <p class="text-xl text-primary-600 dark:text-primary-400">Trivedi Infoway Pvt Ltd – Ahmedabad</p>
                    </div>
                    <span class="text-gray-600 dark:text-gray-400 font-semibold">Sep 2022 – Nov 2022</span>
                </div>
                <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Built backend modules using CodeIgniter 3 MVC framework
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Assisted in developing web application features and debugging systems
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Featured Projects</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 text-lg">Real-world applications I've built</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="project-card">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Food Ordering & Pickup System</h3>
                    <span class="px-4 py-1 bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300 rounded-full text-sm font-semibold">Laravel Backend</span>
                </div>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    A scalable backend system powering an Android mobile application available on the Play Store.
                </p>
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Key Features:</h4>
                    <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            REST API architecture
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Meal customization functionality
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Scheduling system
                        </li>


                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Secure checkout and order processing
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-primary-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Performance optimization using caching and query optimization
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Technology Stack:</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">REST APIs</span>
                        <span class="tech-badge">Authentication</span>
                        <span class="tech-badge">Caching</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section id="achievements" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Key Achievements</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 text-lg">Measurable impact and results</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="achievement-card">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">35% Performance Boost</h3>
                <p class="text-gray-700 dark:text-gray-300">Improved API performance by 35% using database optimization techniques</p>
            </div>
            
            <div class="achievement-card">
                <div class="text-4xl mb-4">🔐</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Secure API Architecture</h3>
                <p class="text-gray-700 dark:text-gray-300">Built secure REST API architectures for production mobile applications</p>
            </div>
            
            <div class="achievement-card">
                <div class="text-4xl mb-4">🛡️</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">RBAC Implementation</h3>
                <p class="text-gray-700 dark:text-gray-300">Implemented RBAC based access control systems</p>
            </div>
            
            <div class="achievement-card">
                <div class="text-4xl mb-4">🏦</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Banking Solutions</h3>
                <p class="text-gray-700 dark:text-gray-300">Delivered enterprise applications used by banking organizations</p>
            </div>
            
            <div class="achievement-card">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">MNC Collaboration</h3>
                <p class="text-gray-700 dark:text-gray-300">Worked on enterprise projects with Tech Mahindra client collaboration</p>
            </div>
        </div>
    </div>
</section>


<!-- Education Section -->
<section id="education" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Education</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="education-card">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">M.Sc. Information Technology</h3>
                <p class="text-lg text-primary-600 dark:text-primary-400 mb-2">B.A.O.U. Ahmedabad</p>
                <p class="text-gray-600 dark:text-gray-400">Year: 2025</p>
            </div>
            
            <div class="education-card">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Bachelor of Engineering</h3>
                <p class="text-lg text-primary-600 dark:text-primary-400 mb-2">Gujarat Technological University (GTU)</p>
                <p class="text-gray-600 dark:text-gray-400">Year: 2025</p>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto mt-12">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">Languages</h3>
            <div class="flex justify-center gap-6">
                <span class="language-badge">English</span>
                <span class="language-badge">Hindi</span>
                <span class="language-badge">Gujarati</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Get In Touch</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-primary-600 to-blue-600 mx-auto mt-4"></div>
            <p class="text-gray-600 dark:text-gray-400 mt-4 text-lg">Let's work together on your next project</p>
        </div>
        
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required 
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full">Send Message</button>
                </form>
            </div>


            <!-- Contact Information -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Contact Information</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white">Email</p>
                                <a href="mailto:arpitkishor5647@gmail.com" class="text-primary-600 dark:text-primary-400 hover:underline">arpitkishor5647@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white">Phone</p>
                                <a href="tel:+917984821975" class="text-primary-600 dark:text-primary-400 hover:underline">+91 7984821975</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-primary-600 dark:text-primary-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white">LinkedIn</p>
                                <a href="https://linkedin.com/in/arpit-k-5a3093241" target="_blank" class="text-primary-600 dark:text-primary-400 hover:underline">linkedin.com/in/arpit-k-5a3093241</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .section-title {
        @apply text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white;
    }
    
    .btn-primary {
        @apply inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-blue-600 hover:from-primary-700 hover:to-blue-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg;
    }
    
    .btn-secondary {
        @apply inline-flex items-center px-6 py-3 bg-gray-800 hover:bg-gray-900 dark:bg-gray-700 dark:hover:bg-gray-600 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg;
    }
    
    .btn-outline {
        @apply inline-flex items-center px-6 py-3 border-2 border-primary-600 text-primary-600 dark:text-primary-400 dark:border-primary-400 hover:bg-primary-600 hover:text-white dark:hover:bg-primary-400 dark:hover:text-gray-900 font-semibold rounded-xl transition-all duration-300 transform hover:scale-105;
    }

    .skill-card {
        @apply bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 hover:border-primary-300 dark:hover:border-primary-700;
    }
    
    .skill-card-title {
        @apply text-lg font-bold text-gray-900 dark:text-white;
    }
    
    .skill-tags {
        @apply flex flex-wrap gap-2;
    }
    
    .skill-tag {
        @apply px-3 py-1.5 bg-primary-50 dark:bg-primary-900/20 text-primary-700 dark:text-primary-300 rounded-lg text-sm font-medium hover:bg-primary-100 dark:hover:bg-primary-900/40 transition-colors;
    }
    
    .experience-card {
        @apply bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl border border-gray-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-300;
    }
    
    .project-card {
        @apply bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-8 shadow-xl border border-gray-200 dark:border-gray-700 hover:shadow-2xl transition-all duration-300;
    }
    
    .tech-badge {
        @apply px-4 py-2 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 text-gray-800 dark:text-gray-200 rounded-lg text-sm font-semibold hover:scale-105 transition-transform;
    }
    
    .achievement-card {
        @apply bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-200 dark:border-gray-700 text-center hover:border-primary-300 dark:hover:border-primary-700 hover:-translate-y-1;
    }
    
    .education-card {
        @apply bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl p-6 shadow-lg border border-gray-200 dark:border-gray-700 hover:shadow-xl transition-all duration-300;
    }
    
    .language-badge {
        @apply px-6 py-3 bg-gradient-to-r from-primary-100 to-blue-100 dark:from-primary-900/30 dark:to-blue-900/30 text-primary-700 dark:text-primary-300 rounded-full text-lg font-semibold hover:scale-105 transition-transform;
    }
    
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection
