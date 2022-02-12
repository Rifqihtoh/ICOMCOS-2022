@extends('layout')

@section('content')

<div class="container-fluid my-5">
    <div class="p-5">
        <div class="container">
            <h1 class="display-3">Welcome to ICOMCOS 2022</h1>
            <p class="lead">to get started with our activity, here are some events that you can join</p>
            <hr class="mt-2 mb-5">

            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Presentation</h4>
                            <p class="card-text">Each presenter is allowed to submit their full paper OR abstract to present in our conference.</p>
                        </div>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg mt-2" href="{{ route('submission.create') }}" role="button">Submission</a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Workshop</h4>
                            <p class="card-text">Join our workshop and learn more about mathematics, statistics, and computanional science.</p>
                        </div>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg mt-2" href="{{ route('workshop.create') }}" role="button">Count me in!</a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Listener</h4>
                            <p class="card-text">You are welcome to join our presentation session as participants and engage with our presenters.</p>
                        </div>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg mt-2" href="{{ route('participant.create') }}" role="button">I want to participate!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection