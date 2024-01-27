<?php 
$projects = [
    [
        'image' => '../images/projects/pharmacy.png',
        'name' => 'Pharmacy Management System',
        'description' => 'A comprehensive system for managing pharmacy operations and inventory',
        'skills_list' => ['Laravel', 'Tailwind','Mysql'],
    ],
    [
        'image' => '../images/projects/pharmacy.png',
        'name' => 'Hall Management System mobile application',
        'description' => 'This is the description for Project 2.',
        'skills_list' => ['Angular', 'Ionic', 'Firebase', 'Typescript'],
    ],
    [
        'image' => '../images/projects/pharmacy.png',
        'name' => 'Gamer Website',
        'description' => 'This is the description for Project 2.',
        'skills_list' => ['HTML5', 'CSS3', 'PHP', 'Mysql', 'Bootstrap'],
    ],

];
?>
<div class="h-screen border bg-gray-100 border-green-300 flex flex-col items-center justify-center w-full">
    <h1 class="font-medium mb-4 text-3xl text-gray-900 dark:text-white md:text-5xl lg:text-6xl">My Creative <span class="text-purple-600">Projects</span></h1>

    <div class="cards flex flex-row items-center justify-center border border-red-200">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="max-w-sm bg-white border border-red-400 m-2 rounded-lg shadow flex flex-col items-center justify-center  dark:bg-gray-800 dark:border-gray-700">
                <div class="border border-green-500">
                    <a href="#">
                        <img class="rounded-t-lg w-56" src="../images/projects/pharmacy.png" alt="" />
                    </a>
                </div>
                <div class=" p-5 border border-blue-300">
                    <a href="#">
                        <h5 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">Pharmacy
                            managment system 2024</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in .</p>
                </div>
                <div class="flex flex-row mb-3">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Html</span>
                </div>

            </div>
        <?php endfor; ?>


        </iframe>
    </div>