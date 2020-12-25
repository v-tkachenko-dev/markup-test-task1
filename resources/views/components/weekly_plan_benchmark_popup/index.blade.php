<div class="popup-container modal fade in" id="planEvaluationPopup" tabindex="-1" role="dialog" aria-labelledby="header-title" aria-hidden="true">
    <div class="popup-inner-container modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content popup-content">
            <div class="body modal-body">
                <button type="button" class="close" onclick="closePopup()">
                    <img src="images/close-icon.png" />
                </button>
                <div id="stepper" class="bs-stepper">
                    <div class="stepper-header bs-stepper-header">
                        <div class="stepper-header-inner-container">
                            <div class="step" data-target="#evaluate-step" data-progress-value="20">
                                <div class="popup-header">
                                    Evaluate the Difficulty of Your Plan
                                </div>
                                <button type="button" class="btn step-trigger"></button>
                            </div>

                            <div class="step" data-target="#feel-tags-select-step" data-progress-value="40">
                                <div class="popup-header">
                                    How do you feel?
                                </div>
                                <button type="button" class="btn step-trigger"></button>
                            </div>

                            <div class="step" data-target="#current-weight-step" data-progress-value="60">
                                <div class="popup-header">
                                    Your current weight?
                                </div>
                                <button type="button" class="btn step-trigger"></button>
                            </div>

                            <div class="step" data-target="#consult-step" data-progress-value="80">
                                <div class="popup-header">
                                    Consult with coach?
                                </div>
                                <button type="button" class="btn step-trigger"></button>
                            </div>

                            <div class="step" data-target="#complete-step" data-progress-value="100">
                                <button type="button" class="btn step-trigger"></button>
                            </div>

                            <div class="progress-container">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="runner-icon">
                                    <img src="images/runner.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stepper-content bs-stepper-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 mx-auto">
                                    <form id="evaluate_plan_form" action="">
                                        <div id="evaluate-step" class="content">
                                            @include('components.weekly_plan_benchmark_popup.evaluate.index')
                                        </div>
                                        <div id="feel-tags-select-step" class="content">
                                            @include('components.weekly_plan_benchmark_popup.feel_tags_select.index')
                                        </div>
                                        <div id="current-weight-step" class="content">
                                            @include('components.weekly_plan_benchmark_popup.current_weight.index')
                                        </div>
                                        <div id="consult-step" class="content">
                                            @include('components.weekly_plan_benchmark_popup.consult.index')
                                        </div>
                                        <div id="complete-step" class="content">
                                            @include('components.weekly_plan_benchmark_popup.complete.index')
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
