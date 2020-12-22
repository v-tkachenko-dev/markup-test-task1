<div class="popup-header">
    How do you feel?
</div>

<div class="popup-content">
{{--    <div class="subheader">--}}
{{--        Select one or more tags--}}
{{--    </div>--}}
    <div class="select-tags-container">

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/joyful-small-grey.png',
            'name' => 'Joyful',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/powerful-small-grey.png',
            'name' => 'Powerful',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/peaceful-small-grey.png',
            'name' => 'Peaceful',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/relaxed-small-grey.png',
            'name' => 'Relaxed',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/miserable-small-grey.png',
            'name' => 'Miserable',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/hateful-small-grey.png',
            'name' => 'Hateful',
            'selected' => false
        ])

        @include('components.feel_tags_select.item', [
            'src' => 'images/emotions/anxious-small-grey.png',
            'name' => 'Anxious',
            'selected' => false
        ])
    </div>
</div>

<div class="popup-footer">
    <button type="button" class="button primary">Continue</button>
</div>
