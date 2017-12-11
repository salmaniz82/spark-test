# Helium MVC
This name is not yet official name for this framework.

## It simply started out with basic idea
Super lightweight and the easiest PHP MVC framework you have ever seen that is why I called it helium.
 
## Why should anyone use it ?
hello

</pre>
<code>

$route = new Route();

$route->get('/', function() {
    echo "Hello World";  
})

$route->get('/about', 'pagesController@about');

$route->get('/book/{id}', function() {

    $id = Route::$params['id'];
    
});

$route->get('/contact', function() {

    return view::render('contact');
    
});


</code>

</pre>

