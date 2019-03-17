@formField('medias', [
    'name' => 'cover',
    'label' => 'Image',
    'note' => 'Minimum image width 1300px'
])

@formField('input', [
    'translated' => true,
    'name' => 'image_subtitle',
    'label' => 'Image Subtitle (translated)',
    'maxlength' => 250,
    'required' => true,
    'placeholder' => 'Description.',
    'type' => 'textarea'
])
