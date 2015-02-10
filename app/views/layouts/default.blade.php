<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    {{HTML::style("css/default.css")}}
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                STEM Cards
                <div class="pull-right">
                    @if(Auth::check())
                    {{Auth::user()->name}}
                    @endif
                </div>
            </div>
        </div>
    </header>
    <div class="contentWrapper container-fluid">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @yield("content")
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script type="text/javascript"
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
    {{HTML::script("scripts/initial.js")}}
    {{HTML::script("scripts/DeckController.js")}}
</body>