@twillRepeaterTitle('Sheet')
@twillRepeaterMax('10')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::input
    name="subtitle"
    label="Description"
    :translated="true"
/>

<x-twill::repeater type="text"/>
