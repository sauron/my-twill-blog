@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias',[
        'name' => 'hero_image',
        'label' => 'Hero image',
    ])

    @formField('browser', [
        'moduleName' => 'invitees',
        'name' => 'invitees',
        'label' => 'Invitees',
        'max' => 2
    ])

    @formField('block_editor', [
        'blocks' => ['gallery', 'image_with_text', 'quote', 'paragraph']
    ])
@stop
