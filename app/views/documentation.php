<div class="container">
    <div class="row">
        <div class="col-sm-4 sticky-sm-top pt-5" style="align-self: flex-start; top: 0px; z-index: 0;">
            <div id="doc-list" class="list-group shadow-sm mb-4" style="border:none !important;">
                <a class="list-group-item list-group-item-action" href="#doc1" id="firstitem">Overview</a>
                <a class="list-group-item list-group-item-action" href="#doc2">Installation / Enviroment</a>
                <a class="list-group-item list-group-item-action" href="#doc3">Routing</a>
                <a class="list-group-item list-group-item-action" href="#doc4">Controllers</a>
                <a class="list-group-item list-group-item-action" href="#doc5">Views</a>
                <a class="list-group-item list-group-item-action" href="#doc6">Models and Database</a>
                <a class="list-group-item list-group-item-action" href="#doc7">Other Functions</a>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="lightDarkToggle">&nbsp;
                <label class="form-check-label" for="lightDarkToggle" style="line-height: 2.5rem; vertical-align:middle;">Toggle light/dark mode</label>
            </div>
        </div>
        <div class="col-sm-8">
            <div data-bs-spy="scroll" data-bs-target="#doc-list" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <h1 class="mb-4 pt-5">PHP Mini Framework</h1>
                <hr style="margin-bottom:0 !important;">
                <div id="doc1" class="">
                    <h2 class="mb-3 pt-5">Overview</h2>
                    <h5 class="mt-4">About</h5>
                    <p class="">PHP Mini is a full-stack PHP web framework that gives you the essentials for starting a web project in a lightweight "mini" package.</p>
                    <p class="mb-1 bold">Features:</p>
                    <ul>
                        <li>Routing for GET, POST, PATCH, PUT & DELETE HTTP requests</li>
                        <li>MVC architecture</li>
                        <li>Basic CLI commands for creating Models & Controllers</li>
                        <li>Class auto loading</li>
                        <li>PDO database class</li>
                        <li>Bootstrap 5 included</li>
                    </ul>
                    <p class="">Created and maintained by: <a href="https://github.com/connorabbas" target="_blank">Connor Abbas</a>.</p>
                    <p class="mb-3">Get Framework Code: <a href="https://github.com/connorabbas/php-mf" target="_blank">Here</a></p>
                    <h5 class="mt-4">FYI</h5>
                    <p class="">All valid routes must be registered in /app/routes/public.php, you will not be able to hit a php file directly (for security reasons). When setting up your site for production, you should point the http configuration to the public folder.</p>
                    <p class="mb-5">There are no namespaces being used, classes are auto loaded. No need to worry about including the class file, just instantiate the object and start using it wherever you need.</p>
                </div>
                <hr>
                <div id="doc2" class="pt-5 mb-5">
                    <h2 class="mb-3">Installation / Enviroment</h2>
                    <p class=""><span class="text-danger fw-bold">Important!</span> After you clone/setup your project you will need to rename the env file located in /app/vars/ to env.php and run: <span class="fw-bold">composer update</span> command in the base directory via a CLI to gather dependencies for the framework's view templating.</p>
                    <p class="">The env.php file is where you will store your enviroment specific variables and private information. This includes Database credentials, API keys, etc. This file is added to the gitignore file by default, so sensitive information isn't pushed to your remote repository.</p>
                    <p>Ideally you will change the outer directoy to the name of your project. You will need to relfect this in the BASE_ENV variable.</p>
                    <p><b>Note:</b> the BASE_DIR constant is responsible for page routing, and needs to be configured correctly. You will only need to set the variable as "/your-project-name/public/" for local developments (using XAMPP for example), for production you will just set the variable to: "/". </p>
                </div>
                <hr>
                <div id="doc3" class="pt-5 mb-5">
                    <h2 class="mb-3">Routing</h2>
                    <h5>Request Methods</h5>
                    <p>The application's router offers the following methods for the common http site requests:</p>
                    <?= $routeMehthods ?>
                    <h5 class="mt-3">Callback Functions</h5>
                    <p>The callback will either be a self contained function, where you can execute your routes logic, or it will be an array where the first item is the class you want to reference (usually a controller), and the second item is the method name.</p>
                    <?= $code2 ?>
                    <h5 class="mt-3">Dynamic Values</h5>
                    <p>You can set dynamic values in your routes slug for GET requests.</p>
                    <?= $routeSlug ?>
                    <?= $routeSlugDyn ?>
                </div>
                <hr>
                <div id="doc4" class="pt-5 mb-5">
                    <h2 class="mb-3">Controllers</h2>
                    <p>Controllers are where you should store your routes logic for handling the incoming HTTP request. That includes basic pages, form submissions, ajax requests, and whatever other actions you have have in your application.</p>
                    <p>Creating a controller is easy with the built in cli tools inculded with mini. Just open a command line interface, make sure you are cd'd into the root directory of your project and enter this command:</p>
                    <?= $cliCode ?>
                    <p>The framework will then auto-generate the class file for you into the controllers directory: app/controllers</p>
                    <?= $cliCode2 ?>
                </div>
                <hr>
                <div id="doc5" class="pt-5 mb-5">
                    <h2 class="mb-3">Views</h2>
                    <p>Views are returned from the view method via the App class, it is always called statically. The method accepts the view file and an array of data you want accessible in the view.</p>
                    <?= $viewCode ?>
                    <p>By default, PHP Mini Framework uses <a href="https://platesphp.com/" target="_blank">Plates</a> for it's view templating system. This should have been installed when you ran <span class="fw-bold">composer update</span> during your setup.</p>
                    <p>When creating your view files, it's best to use the same naming convetion of the actual uri slug of the route. Ex: /about-us route, we should name the file about-us.php in the app/views directory.</p>
                    <p class="mb-4">When calling the view method, it should always be returned, not echod.</p>
                    <h5 class="mt-3 mb-3">Calling Your View Within a Controller</h5>
                    <?= $viewCode3 ?>
                    <?= $viewCode2 ?>
                    <?= $viewCode4 ?>
                    <h5 class="mt-3 mb-3">Calling Your View Directly</h5>
                    <p>This will most often be done on static pages.</p>
                    <?= $viewCode5 ?>

                </div>
                <hr>
                <div id="doc6" class="pt-5 mb-5">
                    <h2 class="mb-3">Models and Database</h2>
                    <p>Models are meant to interact with your database. The included DB class is used to connect and execute your DB queries. The DB class uses PDO, and is setup to accept a dsn of stored credentials to connect using mySQL as the default (This could be changed to another PDO supported driver like ODBC).</p>
                    <p>The database connection should be established outside the model class, and passed into the constructor as a dependency.</p>
                    <p>You can create a model using the cli tools just like you can with controllers:</p>
                    <?= $modelCLICode ?>
                    <h5 class="mt-4 mb-3">Example Model Class</h5>
                    <?= $modelCode ?>
                    <h5 class="mt-4 mb-3">Using a Model Within a Controller</h5>
                    <?= $modelCode2 ?>
                </div>
                <hr>
                <div id="doc7" class="">
                    <h2 class="mb-3 pt-5">Other Functions</h2>
                    <h5 class="">Linking</h5>
                    <p class="mb-3">If you want to reference a linked path within the application, use the path() method. This is used for anchor tags referencing local pages, importing styles and scripts locally, images, etc.</p>
                    <?= $pathCode ?>
                    <h5 class="mt-3">Page Redirects</h5>
                    <p class="mb-3">Instead of using header() with BASE_DIR or path(), just use the redirect() function with whatever route you want the user to be routed to.</p>
                    <?= $redirectcode ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>hljs.highlightAll();</script>
<script>
    $(document).ready(function(){
        $("#doc-list").find('a.active').removeClass('active');
    });
</script>