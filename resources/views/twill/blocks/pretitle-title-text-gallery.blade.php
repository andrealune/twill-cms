@twillBlockTitle('Pretitle Title Text Gallery')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="pretitle"
    label="Pretitle"
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
    label="Images"
    :max="20"
/>
