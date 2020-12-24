@extends('layouts.app')

@section('content')
    <div class="main-page-container">
    </div>
{{--        <button type="button" class="button primary" data-toggle="modal" data-target="#planEvaluationPopup">--}}
{{--            Open--}}
{{--        </button>--}}
{{--        <div>--}}
{{--            @include('components.weekly_plan_benchmark_popup.evaluate.index')--}}
{{--        </div>--}}
{{--        <div>--}}
{{--        @include('components.weekly_plan_benchmark_popup.feel_tags_select.index')--}}

{{--        </div>--}}
{{--        <div>--}}
{{--        @include('components.weekly_plan_benchmark_popup.current_weight.index')--}}

{{--        </div>--}}
{{--        @include('components.weekly_plan_benchmark_popup.consult.index')--}}
{{--        <div>--}}

{{--           @include('components.weekly_plan_benchmark_popup.complete.index')--}}
{{--        </div>--}}

    <div class="col-md-12 mt-5">
        <div id="stepper" class="bs-stepper">
            <div class="progress-container">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>

                <div class="runner-icon">
                    <img src="images/runner.png" alt="">
                </div>
            </div>

            <div class="stepper-header bs-stepper-header">
                <div class="step" data-target="#evaluate-step" data-progress-value="20">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">First step</span>
                    </button>
                </div>

                <div class="step" data-target="#feel-tags-select-step" data-progress-value="40">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Second step</span>
                    </button>
                </div>

                <div class="step" data-target="#current-weight-step" data-progress-value="60">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Third step</span>
                    </button>
                </div>

                <div class="step" data-target="#consult-step" data-progress-value="80">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">4 step</span>
                    </button>
                </div>

                <div class="step" data-target="#complete-step" data-progress-value="100">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">5 step</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form action="">
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

@endsection
@section('js')
    <script type="text/javascript">
        // $(document).ready(() => {
        //     $('#planEvaluationPopup').modal('show');
        // });
        const rules = {
            'evaluate-step': [
                {
                    name: 'evaluate_option',
                    type: 'radio'
                }
            ],
            'feel-tags-select-step': [
                {
                    name: 'feel_tags',
                    type: 'checkbox',
                    min: 1
                }
            ],
            'current-weight-step': [
                {
                    name: 'current_weight',
                    type: 'number',
                    min: 30,
                    max: 999
                }
            ],
        };

         let stepper = null;

        $(document).ready(function () {
            stepper = new Stepper($('#stepper')[0], {
                linear: true,
                animation: true
            });

            updateActiveProgressValue();
            validateActiveStep();

            $('.form-input').on('input change', function() {
                console.log('i change');
                validateActiveStep();
            });

            $('.current-weight-input').on('input', function() {
                if (this.value.length >= this.maxLength) {
                    $(this).val(this.value.substr(0, this.maxLength));
                }
            });

            $('.evaluate-plan-options-container .item').on('click', function () {
                $('input[name=evaluate_option]', this).prop('checked', true).change();
                // $('.evaluate-plan-options-container .item').each(function() {
                //     $(this).css('border', '1px solid #eeeff1');
                // });
                // $(this).css('border', '2px solid #58c19c');
                $('.evaluate-plan-options-container .item').removeClass('sle')
                $(this).addClass('selected');
            });
        });

        function handleNextStepClick(el) {
            const isDisabled = $(el).hasClass('disabled');
            if (!isDisabled) {
                nextStep()
            }
        }

        function nextStep() {
            if (validateActiveStep()) {
                stepper.next();
                updateActiveProgressValue();
                validateActiveStep();
            }
        }

        function updateActiveProgressValue() {
            const value = $('#stepper .step.active').data('progress-value');
            $('#stepper .progress .progress-bar').attr('aria-valuenow', value).css('width', value + '%');

            setRunnerPosition(value);
        }

        function setRunnerPosition(left) {
            left -= 1.7; // center icon

            $('.progress-container .runner-icon').css('left', left + '%')
        }

        function validateActiveStep() {
            const stepId = $('#stepper .content.active').attr('id');
            const stepRules = rules[stepId];
            if (! stepRules) {
                console.log('step not found', stepId);
                return true;
            }

            let value = null;
            let result = false;

            stepRules.map(rule => {
                const selector = `#stepper .content.active .form-input[name=${rule.name}]`;
                const input = $(selector);

                switch (input.attr('type')) {
                    case 'radio':
                        value = $(selector + ':checked').val();
                        result = !!value;
                        break;
                    case 'checkbox':
                        value = [];
                        $(selector + ':checked').each(function() {
                            value.push(this.value);
                        });
                        result = value.length >= rule.min;
                        break;
                    case 'number' || 'text':
                        value = input.val();
                        result = value >= rule.min && value <= rule.max;
                }
            });

            console.log(result);

            updateActiveStepContinueButtonStatus(result);

            return result;
        }

        function updateActiveStepContinueButtonStatus(isEnabled) {
            const button = $('#stepper .content.active .continue-button');
            // console.log('result', isEnabled);
            // console.log('button', button);

            if (isEnabled) {
                button.removeClass('disabled')
            } else {
                button.addClass('disabled')
            }
        }
    </script>
@endsection
