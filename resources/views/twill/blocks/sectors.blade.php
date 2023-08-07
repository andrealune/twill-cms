@twillBlockTitle('Sectors')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::input
    name="subtitle"
    label="Subtitle"
    :translated="true"
/>

<x-twill::browser
    route-prefix=""
    module-name="sectors"
    name="sectors"
    label="Sectors"
    :max="10"
/>
