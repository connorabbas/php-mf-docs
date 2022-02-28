<?php
class DocumentationController extends SiteController
{

    public function index()
    {
// Path Code
ob_start();
?>
<pre>
<code class="shadow-sm language-html">// Example linking a style sheet
&lt;link href=&quot;&lt;?= App::path('/resources/css/styles.css') ?&gt;&quot; rel=&quot;stylesheet&quot;&gt;

// Example link to a page
&lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= App::path('/documentation') ?&gt;&quot;&gt;Docs&lt;/a&gt;

// Example linking an image 
&lt;img src=&quot;&lt;?= App::path('/resources/images/logo.png') ?&gt;&quot; alt=&quot;img_alt&quot;&gt;
</code>
</pre>
<?php
$pathCode = ob_get_clean();

// Redirect Code
ob_start();
?>
<pre>
<code class="shadow-sm language-php">// Example redirect user to login page
&lt;?php
App::redirect('/login?loggedOut=1');
</code>
</pre>
<?php
$redirectcode = ob_get_clean();


// Env Code
ob_start();
?>
<pre>
<code class="shadow-sm language-php">&lt;?php
// Enviroment specific variables

// Database
putenv("DB_HOST=127.0.0.1");
putenv("DB_USERNAME=root");
putenv("DB_PASSWORD=");
putenv("DB_NAME=");

// Site Base Directory
putenv("BASE_DIR=/php-mf/public/");
</code>
</pre>
<?php
$code1 = ob_get_clean();

// Router Code
ob_start();
?>
<pre>
<code class="shadow-sm language-php">$routes-&gt;get($uri, $callback);
$routes-&gt;post($uri, $callback);
$routes-&gt;put($uri, $callback);
$routes-&gt;patch($uri, $callback);
$routes-&gt;delete($uri, $callback);
</code>
</pre>
<?php
$routeMehthods = ob_get_clean();
ob_start();
?>
<pre>
<code class="shadow-sm language-php">&lt;?php
// Basic home route where callback is callable function
$routes->get('/', function() {
    return 'Hello World';
});

// Alternatively, use a controller class and a method to store your logic in
$routes-&gt;get('/', [HomeController::class, 'index']);
</code>
</pre>
<?php
$code2 = ob_get_clean();


ob_start();
?>
<pre>
<code class="shadow-sm language-php">// Dynamic var in your routes URL
&lt;?php
$routes->get('/blog/$id', [BlogController::class, 'index']);
</code>
</pre>
<?php
$routeSlug = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">// Ex: yoursite.com/blog/1
&lt;?php
$id = $_GET['id']; // Reference the dynamic variable
</code>
</pre>
<?php
$routeSlugDyn = ob_get_clean();

// CLI
ob_start();
?>
<pre>
<code class="shadow-sm language-bash">php mini create:controller YourControllerName
</code>
</pre>
<?php
$cliCode = ob_get_clean();
ob_start();
?>
<pre>
<code class="shadow-sm language-php">&lt;?php
class YourControllerName extends SiteController
{
    protected $db;

    public function __construct()
    {
        $this-&#x3E;db = new DB();
    }

    public function index()
    {
    }
}
</code>
</pre>
<?php
$cliCode2 = ob_get_clean();

// View
ob_start();
?>
<pre>
<code class="shadow-sm language-php">App::view($view, $data = []);
</code>
</pre>
<?php
$viewCode = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">// app/controllers/HomeController.php
&lt;?php
class HomeController 
{
    protected $db;

    public function __construct()
    {
        $this-&#x3E;db = new DB();
    }

    public function index()
    {
        return App::view(&#x27;home&#x27;, [
            &#x27;foo&#x27; =&#x3E; &#x22;Bar&#x22;,
        ]);
    }
}
</code>
</pre>
<?php
$viewCode2 = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">// define route within app/routes/public.php
&lt;?php
$routes-&gt;get('/', [HomeController::class, 'index']);
</code>
</pre>
<?php
$viewCode3 = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">// within app/views/home.php
&#x3C;?php
// extending main layout with content using Plates PHP
$this-&#x3E;layout(&#x27;template::main&#x27;, [
    &#x27;pageTitle&#x27; =&#x3E; &#x27;Home&#x27;,
    &#x27;pageDesc&#x27; =&#x3E; &#x22;Home page description&#x22;,
]);
?&#x3E;
&#x3C;div&#x3E;
    &#x3C;h1&#x3E;Home Page Content&#x3C;/h1&#x3E;
    &#x3C;p&#x3E;Test Data: &#x3C;?= $foo ?&#x3E;&#x3C;/p&#x3E;
&#x3C;/div&#x3E;
</code>
</pre>
<?php
$viewCode4 = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">// within app/routes/public.php
&lt;?php
$routes-&gt;get('/', function() {
    return App::view('home');
});
</code>
</pre>
<?php
$viewCode5 = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">&lt;?php
class Example
{
    protected $db;

    public function __construct($db)
    {
        $this-&gt;db = $db;
    }

    public function exampleQuery($data)
    {
        $sql = &quot;SELECT * FROM schema.table Where column = :data&quot;;
        $this-&gt;db-&gt;query($sql);
        $this-&gt;db-&gt;bind(':data', $data);
        $results = $this-&gt;db-&gt;resultSet();
        return $results;
    }
}
</code>
</pre>
<?php
$modelCode = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-php">&lt;?php
class TesterController extends SiteController
{
    protected $db;

    public function __construct()
    {
        $this-&#x3E;db = new DB();
    }

    public function index()
    {
        // You could also instantiate the class within the constructor if all other methods will use it
        $example = new Example($this-&gt;db);
        $exampleData = $example-&gt;exampleQuery('test_data');

        // Return the view with the retrieved data
        return App::view('documentation', [
            'exampleData' =&gt; $exampleData,
        ]);
    }
}
</code>
</pre>
<?php
$modelCode2 = ob_get_clean();

ob_start();
?>
<pre>
<code class="shadow-sm language-bash">php mini create:model YourModelName
</code>
</pre>
<?php
$modelCLICode = ob_get_clean();

        return App::view('documentation', [
            'pageTitle' => 'Docs',
            'pageDesc' => 'Documentation for the php mini framework',
            'pathCode' => $pathCode,
            'redirectcode' => $redirectcode,
            'code1' => $code1,
            'routeMehthods' => $routeMehthods,
            'code2' => $code2,
            'cliCode' => $cliCode,
            'cliCode2' => $cliCode2,
            'viewCode' => $viewCode,
            'viewCode2' => $viewCode2,
            'viewCode3' => $viewCode3,
            'viewCode4' => $viewCode4,
            'viewCode5' => $viewCode5,
            'modelCode' => $modelCode,
            'modelCode2' => $modelCode2,
            'modelCLICode' => $modelCLICode,
            'routeSlug' => $routeSlug,
            'routeSlugDyn' => $routeSlugDyn,
        ], 'docs');
    }
}