@component('common.popup', [
    'id' => 'planEvaluationPopup'
])
    @slot('title')
        Title
    @endslot

    @slot('body')
        Body
    @endslot

    @slot('footer')
        Footer
    @endslot
@endcomponent
