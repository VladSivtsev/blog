@extends('layouts.app')

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Новости</title>


    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Laravel5
                    </h2>
                    <h3 class="post-subtitle">
                    Blog
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ Auth::user()->name }}</a> 2017-11-22 06:14:00</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Angular
                    </h2>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ Auth::user()->name }}</a> 2017-11-22 06:14:00</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                       Mysql
                    </h2>
                    <h3 class="post-subtitle">
                        mysql -u root -p
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ Auth::user()->name }}</a> on August 24, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        PHPstorm
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">{{ Auth::user()->name }}</a> 2017-11-22 06:14:00</p>
            </div>
            <hr>

            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>



<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>



</body>

</html>
@endsection