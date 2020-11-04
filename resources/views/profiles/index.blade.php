@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/c"><button class="btn btn-primary btn-md">Add course </button></a>
                 
                </div>
               
            </div>
            @foreach($user->curses as $curse)
                <div class="card">
                    <div class="card-header text-capitalize">{{ $curse -> name}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><strong>URL: </strong> {{ $curse -> v_link }}</p>

                        <p><strong>Teams/Slack: </strong>
                        @if($curse -> chat != '')
                            {{ $curse-> chat }}
                        @else
                            N/A
                        @endif 
                        </p>
                    
                    </div>
                
                </div>
            @endforeach
            <div id="deletebutton" index="1"></div>
         
        </div>
    </div>
</div>
@endsection
