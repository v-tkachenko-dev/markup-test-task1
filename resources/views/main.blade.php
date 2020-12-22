@extends('layouts.app')

@section('content')
    <div class="main-page-container">
        <button type="button" class="button primary" data-toggle="modal" data-target="#planEvaluationPopup">
            Open
        </button>
    </div>

@endsection

@include('components.plan_evaluation_popup')

@section('js')
    <script type="text/javascript">
        // $(document).ready(() => {
        //     $('#planEvaluationPopup').modal('show');
        // });
    </script>
@endsection
