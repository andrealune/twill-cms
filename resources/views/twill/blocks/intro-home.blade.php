@twillBlockTitle('Intro')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::medias
    name="media"
    label="Images"
    :max="3"
/>

<x-twill::input
    name="text"
    label="Text"
    :translated="true"
/>

<x-twill::input
    name="cta"
    label="CTA"
    :translated="true"
/>

<x-twill::input
    name="link"
    label="Link"
    :translated="true"
/>
