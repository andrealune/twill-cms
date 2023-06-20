@twillBlockTitle('Embed Video')
@twillBlockIcon('image')
@twillBlockGroup('app')

<x-twill::files
    name="video"
    label="video"
    note="Video will overwrite previously selected images"
    :max="1"
/>
