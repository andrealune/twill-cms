@twillBlockTitle('Gallery Technical')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::medias
    name="media"
    label="Images"
    :max="20"
/>

<x-twill::repeater type="sheet"/>
