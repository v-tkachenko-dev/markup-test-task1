<div class="popup-content">
    <div class="how-do-you-feel-container">
        <div class="subheader">
            Select one or more tags
        </div>

        <div class="select-tags-container">
            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/joyful-small-grey.png',
                'name' => 'Joyful',
                'value' => 'joyful',
                'selected' => false,
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/powerful-small-grey.png',
                'name' => 'Powerful',
                'value' => 'powerful',
                'selected' => false
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/peaceful-small-grey.png',
                'name' => 'Peaceful',
                'value' => 'peaceful',
                'selected' => false
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/relaxed-small-grey.png',
                'name' => 'Relaxed',
                'value' => 'relaxed',
                'selected' => false
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/miserable-small-grey.png',
                'name' => 'Miserable',
                'value' => 'miserable',
                'selected' => false
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/hateful-small-grey.png',
                'name' => 'Hateful',
                'value' => 'hateful',
                'selected' => false
            ])

            @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                'src' => 'images/emotions/anxious-small-grey.png',
                'name' => 'Anxious',
                'value' => 'anxious',
                'selected' => false
            ])
        </div>

        <div class="select-tags-input-group-container">
            <div class="personal-note-input-container">
                <label for="personal_note">Add personal note (optional)</label>
                <textarea id="personal_note" rows="5"></textarea>
            </div>
        </div>
    </div>
</div>

<div class="popup-footer">
    @include('components.weekly_plan_benchmark_popup.continue_button')
</div>
