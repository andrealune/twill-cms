@twillRepeaterTitle('Tab')
@twillRepeaterMax('10')

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

<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
    :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean'
    ]"
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
