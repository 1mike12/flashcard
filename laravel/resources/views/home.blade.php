<html ng-app="myApp">
<head>
    @include("head")
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Tex Cards</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#/"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
                <li><a href="#deck"><i class="fa fa-comment"></i> Deck List</a></li>
            </ul>
        </div>
    </nav>
</header>
<div ng-view>

</div>
<footer class="navbar navbar-default">
    i am the footer
    @include("scripts")
</footer>
</body>
</html>