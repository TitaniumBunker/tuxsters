<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tuxsters</title>

    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="home">Instapics</a>
                    <div class="nav-collapse">
                        <ul class="nav">

                            <li class="active"><a href="home">Home</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            @yield('content')
            <hr>
            <footer>
            <p>&copy; Instapics 2012</p>
            </footer>
        </div> <!-- /container -->
    </body>
</html>