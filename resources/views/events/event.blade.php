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
    @include('registration.form');
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('input#input_text, textarea#textarea1').characterCounter();
        });

        var bday = 0;
        var age = 0;
        var gender = "";

        $( "#birthdate" ).change(function() {
            bday = $('#birthdate').val();
            age = Math.floor(moment(new Date()).diff(moment(bday, "DD MMM YYYY"),'years',true));

            checkCategory();

        });
        $( "#gender" ).change(function() {
            gender = $('#gender').val();

            checkCategory();

        });

        function checkCategory()
        {
            if( gender == "female" && age != 0)
            {
                if ( age <= 35 )
                {
                    $('#category').val("35 Below");
                }
                else
                {
                    $('#category').val("36 above");
                }
            }
            else if ( gender == "male" && age != 0 )
            {
                if ( age <= 20 )
                {
                    $('#category').val("Under 20");
                }
                else if ( age <= 30 && age >= 21 )
                {
                    $('#category').val("21 to 30");
                }
                else if ( age <= 40 && age >= 31 )
                {
                    $('#category').val("31 to 40");
                }
                else if ( age <= 50 && age >= 41 )
                {
                    $('#category').val("41 to 50");
                }
                else if ( age >= 51 )
                {
                    $('#category').val("51 Above");
                }
            }
            else
            {
                $('#category').val("");
            }
        }

        $('#registrationForm').submit(function() {
            var errors = 0;

            $("#registrationForm .validation").map(function(){
                if( !$(this).val() ) {
                    $(this).siblings('.warning').css('color', 'red');
                    errors++;
                    return false;
                } else if ($(this).val()) {
                    $(this).siblings('.warning').css('color', 'black');
                }
            });

            $('#registrationForm select').map(function(){
                if( !$(this).val() ) {
                    $(this).parent().parent().children('.warning').css('color', 'red');
                    $(this).parent().children('.warning').css('color', 'red');
                    errors++;
                    return false;
                } else if ($(this).val()) {
                    $(this).parent().parent().children('.warning').css('color', 'black');
                    $(this).parent().children('.warning').css('color', 'black');
                }
            });

            if(errors > 0){
                return false;
            }
            // do the ajax..
        });

    </script>
@stop