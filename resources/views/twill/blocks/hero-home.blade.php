@twillBlockTitle('Hero')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::files
    name="video"
    label="Video"
    :max="1"
/>

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::input
    name="text"
    label="Text"
    :translated="true"
/>
