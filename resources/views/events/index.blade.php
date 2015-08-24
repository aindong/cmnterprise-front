@extends('layouts.front2')

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
                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title grey-text text-darken-4">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop