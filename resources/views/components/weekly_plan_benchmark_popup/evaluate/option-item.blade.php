<div class="item">
    <div class="icon">
        <img src="{{ $src }}" alt="">
    </div>
    <div class="info">
        <div class="name">
            {{ $name }}
        </div>
        <div class="description">
            {{ $description }}
        </div>
    </div>
    <label for="evaluate_option_{{ $value }}" class="input-container">
        <input id="evaluate_option_{{ $value }}" class="form-input" name="evaluate_option" type="radio" value="{{ $value }}">
        <span class="checkmark"></span>
    </label>
</div>
