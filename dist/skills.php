<div class=" border border-green-300 flex flex-row items-center justify-center w-full">
<!-- tech skills-->
<div>
<h2 class="w-full text-2xl font-medium tracking-tight  sm:text-6xl text-center mt-14">Technical Skills</h2>
<div class="p-6 grid grid-cols-4 gap-2 items-center  justify-center border align-ite border-red-500 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

<?php
$folder = '../images/skills/';
$pattern = $folder . '*';

$files = glob($pattern);
foreach ($files as $file) {
    // Extract the skill name from the filename
    $filename = basename($file);
    $skillName = explode('.', $filename)[0];
    $colorName = explode('.', $filename)[1];
?>

<div class="flex flex-col items-center  justify-center ">
    <div class="skill-icon w-16 h-16 bg-<?php echo $colorName; ?>-100 p-4 rounded-full m-2">
        <img src="<?php echo $file ?>" alt="">
    </div>
    <div class="skill-name text-xs text-gray-500">
        <p><?php echo $skillName ?></p>
    </div>
</div>

<?php
}
?>

</div>
</div>




<!-- soft skills -->
<div>
<h2 class="w-full text-2xl font-medium tracking-tight  sm:text-6xl text-center mt-14">Soft Skills</h2>
<div class="p-6 grid grid-cols-3 gap-2 items-center  justify-center border align-ite border-red-500 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

<?php
$skills = ['Team Leadership', 'Teamwork', 'Problem Solving', 'Time Management', 'Teaching & Presentation'];?>
<?php foreach ($skills as $skill) { ?>
    <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-purple-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="ms-3 text-sm font-normal"><?php echo $skill ?></div>
    </div>
<?php } ?>







</div>
</div>

</div>