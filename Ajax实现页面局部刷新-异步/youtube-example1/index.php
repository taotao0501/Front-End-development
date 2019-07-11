<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>load a page with ajax and no refresh</title>
    <style>
        #nav ul {
            overflow: hidden;
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        #nav ul li {
            float:left;
        }
        #nav ul li a {
            display:inline-block;
            padding: 10px 15px;
        }
        #content {
            padding: 15px;
        }
    </style>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //set trigger and container variables
            var trigger = $('#nav ul li a'),
                container = $('#content');
            //Fire on click
            trigger.on('click', function(){
                //set $this for re-use, set target from data attribute
                var $this = $(this),
                  target = $this.data('target');

                 //load target page into container
                 container.load(target + '.php');

                 //Stop mormal link behavior\
                 return false;
            });
        });
    </script>
</head>
<body>
    <nav id="nav">
        <ul>
            <li><a href="#" data-target="home">Home</a></li>
            <li><a href="#" data-target="about">About</a></li>
        </ul>
    </nav>
    <div id="content">
        <?php include('home.php'); ?>
    </div>
</body>
</html>