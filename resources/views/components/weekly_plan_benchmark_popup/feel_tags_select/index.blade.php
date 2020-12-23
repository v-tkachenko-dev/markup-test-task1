<div class="popup-header">
    How do you feel?
</div>

<div class="popup-content">
    <div class="how-do-you-feel-container">
        <div class="container">
            <div class="row">
                <div class="subheader col-sm-12">
                    Select one or more tags
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="select-tags-container col-sm-6 mx-auto">
                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/joyful-small-grey.png',
                            'name' => 'Joyful',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/powerful-small-grey.png',
                            'name' => 'Powerful',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/peaceful-small-grey.png',
                            'name' => 'Peaceful',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/relaxed-small-grey.png',
                            'name' => 'Relaxed',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/miserable-small-grey.png',
                            'name' => 'Miserable',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/hateful-small-grey.png',
                            'name' => 'Hateful',
                            'selected' => false
                        ])

                        @include('components.weekly_plan_benchmark_popup.feel_tags_select.item', [
                            'src' => 'images/emotions/anxious-small-grey.png',
                            'name' => 'Anxious',
                            'selected' => false
                        ])
                 </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="select-tags-input-group-container col-sm-4 mx-auto">
                    <div class="personal-note-input-container">
                        <label for="personal_note">Add personal note (optional)</label>
                        <textarea id="personal_note" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-footer">
    <button type="button" class="button primary">Continue</button>
</div>
