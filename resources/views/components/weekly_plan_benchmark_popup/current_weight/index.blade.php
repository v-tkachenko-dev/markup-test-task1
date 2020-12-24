<div class="popup-header">
    Your current weight?
</div>

<div class="popup-content">
    <div class="current-weight-container">
        <div class="container">
            <div class="row">
                <div class="subheader col-sm-12">
                    Enter weight so we could adjust your plan for better results
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="current-weight-input-group-container col-sm-2 mx-auto">
                    <div class="current-weight-input-container">
                        <input type="number" name="current_weight" class="form-input current-weight-input" placeholder="0" value="" maxLength="3" autofocus>
                        <span class="weight-meter">KG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-footer">
    @include('components.weekly_plan_benchmark_popup.continue_button')
</div>
