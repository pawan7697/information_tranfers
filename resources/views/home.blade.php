@extends('layouts.app')

@section('content')
<div class="container">


   <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
</div>

            <div class="clearfix"></div>
            <section>
                <div class="row">
                    <div class="text-home">
                        <h5>Welcome, {{ Auth::user()->name }}</h5>
                        <h2>Creative Mints</h2>
                        <h4>FILL THE FORM TO LIST YOUR QUERY</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="home-cat">
                        <div class="home-cat-1">
                            <div class="box">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4>hello</h4>

                        </div>
                        <div class="home-cat-2">
                            <div class="box">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4>hello</h4>
                        </div>
                        <div class="home-cat-3">
                            <div class="box">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4>hello</h4>
                        </div>
                        <div class="home-cat-4">
                            <div class="box">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h4>hello</h4>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="choice-categories">

                    <h3>Choose a categories</h3>
                    <div class="choice-categories-1"><i class="fas fa-university"></i>
                        <p>bank</p>
                    </div>
                    <div class="choice-categories-2"><i class="fas fa-university"></i>
                        <p>bank</p>
                    </div>
                </div>
            </section>
    
@endsection
