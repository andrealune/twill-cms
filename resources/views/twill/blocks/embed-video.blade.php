@twillBlockTitle('Embed Video')
@twillBlockIcon('image')
@twillBlockGroup('app')

<x-twill::medias
    name="media"
    label="Preview image"
    :max="1"
/>

<x-twill::input
    name="url"
    label="Video URL"
    :translated="true"
/>
