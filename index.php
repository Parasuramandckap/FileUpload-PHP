
<html>
    <head>
        <title>File upload</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="w-1/4">
            <form class="mt-10 px-10" action="./upload.php" method="post" enctype="multipart/form-data">
                <label class=" w-1/2 block mb-2 text-sm font-medium text-gray-900 dark:text-white" >User Name</label>
                <input type="text" class="border-2 border-gray-300 rounded-md outline-none" placeholder="user-name" name="user-name">
                <label class=" w-1/2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload file</label>
                <input class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name="uploaded-file" type="file">
                <input type="submit" class="mt-2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            </form>
        </div>
    </body>
</html>

<?php
require "connection.php";

$app['db'] = (new Database())->db;
session_start();
$all = $app["db"]->query("SELECT * FROM upload");
$all = $all->fetchAll();


foreach ($all as $key=>$value){
    ?>

    <h2><?php echo $value["user_name"]?></h2>
    <img src="<?php echo $value["file_path"]?>">
    <?php
}



