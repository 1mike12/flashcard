<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script src="startup/init.js"></script>
<?php
//including all files in /scripts
$files = File::allFiles("scripts");
$acceptableExtensions = ["js"];
$paths = [];
foreach ($files as $file) {
    $extension = strtolower($file->getExtension());
    if (in_array($extension, $acceptableExtensions)) {
        $paths[] = $file->getPathname();
    }
}
?>

@foreach($paths as $path)
    <script src="{{$path}}"></script>
@endforeach