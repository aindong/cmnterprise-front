@extends('layouts.front2')

@section('styles')
    <style>
        .card-title.event {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
    </style>
@stop

@section('content')
    <div class="">
        <div class="row">
            <div class="col s4">
                <div class="card">
                    <div class="card-content">Search by event date</div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="datepicker">Search Event by date</label>
                            <input type="date" id="datepicker" class="datepicker">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Floating sidebar</span>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                        <label for="disabled">Disabled</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col s8">
                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/img2.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/img1.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/1.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/3.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/4.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/5.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card medium">
                        <div class="card-image">
                            <img src="/img/6.jpg">
                            <span class="card-title event">Race</span>
                        </div>

                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View Event</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop