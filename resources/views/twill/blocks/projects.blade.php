@twillBlockTitle('Projects')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="title"
    label="Title"
    :translated="true"
/>

<x-twill::browser
    route-prefix=""
    module-name="projects"
    name="projects"
    label="Projects"
    :max="10"
/>
