<div class="container">
    <div class="row">
        <div class="col-sm-4 sticky-sm-top pt-5" style="align-self: flex-start; top: 0px; z-index: 0;">
            <div id="doc-list" class="list-group">
                <a class="list-group-item list-group-item-action" href="#doc1" id="firstitem">Overview & Basics</a>
                <a class="list-group-item list-group-item-action" href="#doc2">Enviroment</a>
                <a class="list-group-item list-group-item-action" href="#doc3">Routing</a>
                <a class="list-group-item list-group-item-action" href="#doc4">Controllers</a>
                <a class="list-group-item list-group-item-action" href="#doc5">Views</a>
                <a class="list-group-item list-group-item-action" href="#doc6">Models and Database</a>
            </div>
        </div>
        <div class="col-sm-8">
            <div data-bs-spy="scroll" data-bs-target="#doc-list" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <div id="doc1" class="">
                    <h2 class="mb-3 pt-5">Overview & Basics</h2>
                    <p class="">For security and routing purposes, all traffic for the site will be routed to index.php via htaccess rules, this makes hitting php files directly impossible. All valid routes must be registered.</p>
                    <p class="mb-4">Classes are auto loaded, so no need to worry about including the class file. Just instantiate the object and start using it!</p>
                    <h5 class="">Linking</h5>
                    <p class="mb-3">If you want to reference a linked path within the application, use the path() method. This is used for anchor tag links, importing styles and scripts locally, images, etc.</p>
                    <?= $pathCode ?>
                    <h5 class="mt-3">Page Redirects</h5>
                    <p class="mb-3">Instead of using header() with BASE_DIR or path(), just use the redirect() function with whatever route you want the user to be routed to.</p>
                    <?= $redirectcode ?>
                </div>
                <hr>
                <div id="doc2" class="pt-5 mb-5">
                    <h2 class="mb-3">Enviroment</h2>
                    <p class="">Upon installation you will need to create a env.php file in the /app directory, here is the starter code:</p>
                    <?= $code1 ?>
                    <p class="">The env.php is where you will store your enviroment spcific variables. This includes Database credentials, API keys, etc. This file is added to the gitignore file by default, so sensitive information is pushed to your remote repository.</p>
                </div>
                <hr>
                <div id="doc3" class="pt-5 mb-5">
                    <h2 class="mb-3">Routing</h2>
                    <h5>Request Methods</h5>
                    <p>The application's router offers the following methods for the common http site requests:</p>
                    <?= $routeMehthods ?>
                    <h5 class="mt-3">Callback functions</h5>
                    <p>The callback will either be a self contained function, where you can execute your routes logic, or it will be an array where the first item is the class you want to reference (usually a controller), and the second item is the method name.</p>
                    <?= $code2 ?>
                </div>
                <hr>
                <div id="doc4" class="pt-5 mb-5">
                    <h2 class="mb-3">Controllers</h2>
                    <p>Controllers are where you should store your routes logic. That includes basic pages, form submissions, ajax requests, and whatever other actions you have have in your application.</p>
                    <p>Creating a controller is easy with the built in cli tools inculded with mini. Just open a command line interface, make sure you are cd'd into the root directory of your project and enter this command:</p>
                    <?= $cliCode ?>
                    <p>The framework will then auto-generate the class file for you into the controllers directory: app/controllers</p>
                    <?= $cliCode2 ?>
                </div>
                <hr>
                <div id="doc5" class="pt-5 mb-5">
                    <h2 class="mb-3">Views</h2>
                    <p>Views are returned from the view method via the App class, it is always called statically. The method accepts the view file, an array of data you want accessible in the view, and an optional template you want to use.</p>
                    <p>When creating your view files, it's best to use the same naming convetion of the actual uri slug of the route. Ex: /about-us route, we should name the file about-us.php in the app/views directory.</p>
                    <p>When calling the view method, it should always be returned, not echod.</p>
                    <?= $viewCode ?>
                    <h5 class="mt-3 mb-3">Calling Your View Within a Controller (Preffered)</h5>
                    <?= $viewCode3 ?>
                    <?= $viewCode2 ?>
                    <?= $viewCode4 ?>
                    <h5 class="mt-3 mb-3">Calling Your View Without a Controller</h5>
                    <?= $viewCode5 ?>

                </div>
                <hr>
                <div id="doc6" class="pt-5 mb-5">
                    <h2 class="mb-3">Models and Database</h2>
                    <p>Models are meant to interact with your database. The included DB class is used to connect and execute your DB queries. The DB class uses PDO, and is setup to accept a dsn of stored credentials to connect using mySQL as the default (This could be changed to another driver like ODBC).</p>
                    <p>The database connection should be instantiated in the index.php file, and then passed into whatever class contructers need to use it.</p>
                    <p>You can create a model using the cli tools just like you can with controllers:</p>
                    <?= $modelCLICode ?>
                    <h5 class="mt-4 mb-3">Example Model Class</h5>
                    <?= $modelCode ?>
                    <h5 class="mt-4 mb-3">Using a Model Within a Controller</h5>
                    <?= $modelCode2 ?>
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