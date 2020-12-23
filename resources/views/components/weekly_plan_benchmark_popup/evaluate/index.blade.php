<div class="popup-header">
    Evaluate the Difficulty of Your Plan
</div>
<div class="popup-content">
    <div class="evaluate-plan-container">
        <div class="container">
            <div class="row">
                <div class="evaluate-plan-options-container col-sm-4 mx-auto">
                    @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                        'src' => 'images/emotions/nervous.png',
                        'name' => 'Too hard',
                        'description' => 'I need easier plan',
                        'selected' => false
                    ])
                    @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                        'src' => 'images/emotions/surprised.png',
                        'name' => 'Very Hard',
                        'description' => 'Let’s repeat to get use to it',
                        'selected' => false
                    ])
                    @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                        'src' => 'images/emotions/happy.png',
                        'name' => 'Doable',
                        'description' => 'Let’s continue Level up',
                        'selected' => false
                    ])
                    @include('components.weekly_plan_benchmark_popup.evaluate.option-item', [
                        'src' => 'images/emotions/tongue.png',
                        'name' => 'Too Easy',
                        'description' => 'I need a harder plan',
                        'selected' => false
                    ])
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-footer">
    <button type="button" class="button primary">Continue</button>
</div>
