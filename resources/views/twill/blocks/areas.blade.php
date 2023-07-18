@twillBlockTitle('Areas')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::medias
    name="media"
    label="Images"
    :max="10"
/>

<x-twill::repeater type="area"/>
