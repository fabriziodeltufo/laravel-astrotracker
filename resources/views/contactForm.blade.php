<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- TWITTER BOOTSTRAP STYLE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg=="
        crossorigin="anonymous" />

    <!-- Style -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body>

    <!-- HEADER -->
    @include('template.header')

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-8 offset-2 sma-contact">
                <div class="card-contact">
                    <div class="card-header">
                        <h2 class="text-1 sma-text-3 text-center mt-4">GET IN TOUCH.</h2>
                        <p class="text-4 sma-text-4 text-center sma-text-left">Would you like to collaborate with us? <br>Feel free
                            to contact us anytime.
                        </p>
                    </div>
                    <div class="card-body">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif

                        <form method="POST" action="{{ route('contact-form.store') }}">

                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>*Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>*Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>*Phone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>*Subject:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                                            value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>*Message:</strong>
                                        <textarea name="message" rows="8"
                                            class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="button btn-submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- FOOTER -->
    @include('template.footer-api')

</body>

</html>