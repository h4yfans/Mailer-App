@extends('welcome')

@section('content')

    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-12">
                <h1 class="text-center">Laravel Mailer App</h1>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    @if(Session::has('flashmessage'))
                        <div class="alert alert-success">
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-hidden="true">       &times;
                                </button>
                                <strong>{{Session::get('flashmessage')}}</strong>  <br>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <button class="close" type="button" data-dismiss="alert"
                                        aria-hidden="true">       &times;
                                </button>
                                <strong>{{$error}}</strong>  <br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-12">
                <form action="{{url('mail/sendmail')}}" method="post" class="form-horizontal" role="form">
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                    <div class="form-group">
                        <legend style="color: #e2e2e2;">Send an email to anyone</legend>
                    </div>

                    <div class="form-group">
                        <label for="email">Sending to who?</label>
                        <input type="email" name="email" value="{{old('email')}}" title="email" class="form-control"
                               placeholder="Type an email address">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" value="{{old('subject')}}" title="subject"
                               class="form-control" placeholder="Type an subject">
                    </div>

                    <div class="form-group">
                        <label for="subject">Message</label>
                        <textarea rows="5" cols="20" name="message" title="message" value="{{old('subject')}}"
                                  class="form-control ckeditor" placeholder="Type an message"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection