@twillRepeaterTitle('Gallery Slide')
@twillRepeaterMax('10')

<x-twill::input
    name="label"
    label="Label"
    :translated="true"
/>

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
    :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ]"
    :translated="true"
/>

<x-twill::medias
    name="media"
    label="Preview image"
    :max="1"
/>
