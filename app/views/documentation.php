<div class="container">
    <div class="row mt-5">
        <div class="col-4 sticky-sm-top" style="align-self: flex-start; top: 50px; z-index: 0;">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                <a class="list-group-item list-group-item-action active" href="#list-item-2">Item 2</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <div id="doc1">
<pre>
<code class="language-php">
// Basic Home Route
$routes->get('/', function(){
    return App::view('home', [
        'pageTitle' => 'Home',
        'pageDesc' => 'Welcome to the php mini framework!',
    ]);
});
</code>
</pre>
                </div>
                <h4 id="list-item-1">Item 1</h4>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                <h4 id="list-item-2">Item 2</h4>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                <h4 id="list-item-3">Item 3</h4>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                <h4 id="list-item-4">Item 4</h4>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
            </div>
        </div>
    </div>
</div>
<script>hljs.highlightAll();</script>
<?php
?>