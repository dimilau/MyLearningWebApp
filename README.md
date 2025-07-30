# Changelog
Implement route and view. Pass in variable to view.

`resources/views/pineapple.blade.php`
```
<html>
    <head></head>
    <body>
        <h1>{{ $name }}</h1>
        <p>This is the Pineapple page.</p>
        <p>Welcome to the Pineapple page!</p>

    </body>
</html>
```
`routes/web.php`
```
Route::get('/pineapple', function () {
    return view('pineapple', ['name' => 'Pineapple']);
});
```