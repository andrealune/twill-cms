@twillBlockTitle('Embed Video')
@twillBlockIcon('image')
@twillBlockGroup('app')

<x-twill::medias
    name="image"
    label="Preview image"
    :max="1"
    :extra-metadatas="[
        [
            'name' => 'show_info',
            'label' => 'Show info',
            'type' => 'checkbox'
        ],
    ]"
/>

<x-twill::input
    name="url"
    label="Video URL"
    :translated="true"
/>
