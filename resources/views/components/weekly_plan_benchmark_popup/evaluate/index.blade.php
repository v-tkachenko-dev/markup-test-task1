<div class="popup-content">
    <div class="evaluate-plan-container">
        <div class="evaluate-plan-options-container ">
            @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                'src' => 'images/emotions/nervous.png',
                'name' => 'Too hard',
                'description' => 'I need easier plan',
                'value' => 'too_hard',
            ])
            @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                'src' => 'images/emotions/surprised.png',
                'name' => 'Very Hard',
                'description' => 'Let’s repeat to get use to it',
                'value' => 'very_hard',
            ])
            @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                'src' => 'images/emotions/happy.png',
                'name' => 'Doable',
                'description' => 'Let’s continue Level up',
                'value' => 'doable',
            ])
            @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                'src' => 'images/emotions/tongue.png',
                'name' => 'Too Easy',
                'description' => 'I need a harder plan',
                'value' => 'too_easy',
                'selected' => false
            ])
        </div>
    </div>
</div>

<div class="popup-footer">
    @include('components.weekly_plan_benchmark_popup.continue_button')
</div>
