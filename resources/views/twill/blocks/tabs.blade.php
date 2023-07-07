@twillBlockTitle('Tabs')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::input
    name="cta_label"
    label="CTA label"
    :translated="true"
/>

<x-twill::input
    name="cta_url"
    label="CTA url"
    :translated="false"
/>

<x-twill::repeater type="tab"/>
