@twillBlockTitle('Quote Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    name="quote"
    type="textarea"
    label="Quote text"
    :maxlength="250"
    :rows="4"
    :translated="true"
/>

<x-twill::input
    name="author_name"
    label="Quote author name"
    :translated="true"
/>

<x-twill::input
    name="author_role"
    label="Quote author role"
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
