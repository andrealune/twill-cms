@twillBlockTitle('Partners')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::repeater type="partner"/>
