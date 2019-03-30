@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'bio',
        'label' => 'BIO',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias',[
        'name' => 'profile',
        'label' => 'Profile picture',
    ])
@stop
