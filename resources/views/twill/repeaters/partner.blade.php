@twillRepeaterTitle('Partner')
@twillRepeaterMax('10')

<x-twill::input
    name="name"
    label="Name"
    :translated="false"
/>

<x-twill::medias
    name="media"
    label="Logo"
    :max="1"
/>
