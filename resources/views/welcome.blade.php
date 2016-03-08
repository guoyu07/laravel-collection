<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>

                @include('editor::head')

                <div class="editor">
                    {!! Form::textarea('content', '', ['class' => 'form-control','id'=>'myEditor']) !!}
                </div>
            </div>
        </div>
    </body>
</html>
