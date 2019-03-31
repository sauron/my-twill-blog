@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'bio',
        'label' => 'BIO',
        'type' => 'textarea',
        'translated' => true,
        'maxlength' => 300
    ])

    @formField('medias',[
        'name' => 'profile',
        'label' => 'Profile picture',
    ])
@stop
