@extends('layouts.app')

@section('content')
    <div class="main-page-container">
{{--        <button type="button" class="button primary" data-toggle="modal" data-target="#planEvaluationPopup">--}}
{{--            Open--}}
{{--        </button>--}}
    </div>
@endsection
@include('components.weekly_plan_benchmark_popup.evaluate.index')
{{--@include('components.weekly_plan_benchmark_popup.feel_tags_select.index')--}}
{{--@include('components.weekly_plan_benchmark_popup.consult.index')--}}

{{--@include('components.plan_evaluation_popup')--}}

@section('js')
    <script type="text/javascript">
        // $(document).ready(() => {
        //     $('#planEvaluationPopup').modal('show');
        // });

        $('input').on('input', function() {
            if (this.value.length >= this.maxLength) {
                $(this).val(this.value.substr(0, this.maxLength));
            }
        })
    </script>
@endsection
