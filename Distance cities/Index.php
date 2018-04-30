<? php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Distances btn two cities App</title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="App.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav"></ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Calculator for Portkey!</h1>
            <form class="form-horizontal" target="_blank">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label">From:</label>
                    <div class="col-xs-10">
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="to" class="col-xs-2 control-label">To:</label>
                    <div class="col-xs-10">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>
                </div>
            </form>

            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output">

            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Main.js"></script>
</body>
</html>
?>
