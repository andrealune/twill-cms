@twillBlockTitle('Gallery')
@twillBlockIcon('image')
@twillBlockGroup('app')

<x-twill::medias
    name="image"
    label="Images"
    :max="20"
    :extra-metadatas="[
        [
            'name' => 'show_info',
            'label' => 'Show info',
            'type' => 'checkbox'
        ],
    ]"
/>
