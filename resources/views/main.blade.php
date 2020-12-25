@extends('layouts.app')

@section('content')
    <div class="main-page-container">
        <button type="button" class="button primary" data-toggle="modal" data-target="#planEvaluationPopup">
            Open
        </button>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(() => {
            $('#planEvaluationPopup').modal('show');
        });
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
                validateActiveStep();
            });

            $('.current-weight-input').on('input', function() {
                if (this.value.length > this.maxLength) {
                    $(this).val(this.value.substr(0, this.maxLength)).change();
                }
            });

            $('.evaluate-plan-options-container .item').on('click', function () {
                $('input[name=evaluate_option]', this).prop('checked', true).change();
                $('.evaluate-plan-options-container .item').removeClass('selected');
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
                stepperNextStep();
                updateActiveProgressValue();
                validateActiveStep();
            }
        }

        function stepperNextStep() {
            const evaluateOption = $('#evaluate_plan_form input[name=evaluate_option]:checked').val();
            const currentStep = getCurrentStep();

            // good plan evaluation flow
            if (currentStep === 'current-weight-step' && ['doable', 'too_easy'].includes(evaluateOption)) {
                stepper.to(5);
                return;
            }

            stepper.next();
        }

        function getCurrentStep() {
            return $('#stepper .content.active').attr('id');
        }

        function updateActiveProgressValue() {
            const value = $('#stepper .step.active').data('progress-value');
            $('#stepper .progress .progress-bar').attr('aria-valuenow', value).css('width', value + '%');

            setRunnerPosition(value);
            hideProgressIfLastStep();
        }

        function hideProgressIfLastStep() {
            const stepId = getCurrentStep();
            if (stepId === 'complete-step') {
                $('#stepper .progress-container').hide();
            }
        }

        function setRunnerPosition(left) {
            left -= 1.7; // center icon

            $('.progress-container .runner-icon').css('left', left + '%')
        }

        function validateActiveStep() {
            const stepId = $('#stepper .content.active').attr('id');
            const stepRules = rules[stepId];
            if (! stepRules) {
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

            updateActiveStepContinueButtonStatus(result);

            return result;
        }

        function updateActiveStepContinueButtonStatus(isEnabled) {
            const button = $('#stepper .content.active .continue-button');

            if (isEnabled) {
                button.removeClass('disabled')
            } else {
                button.addClass('disabled')
            }
        }

        function closePopup() {
            $('#planEvaluationPopup').modal('toggle');
            stepper.reset();
            $('#evaluate_plan_form').trigger('reset');
            $('.evaluate-plan-options-container .item').removeClass('selected');
            validateActiveStep();
            $('#stepper .progress-container').show();
            updateActiveProgressValue();
        }
    </script>
@endsection
