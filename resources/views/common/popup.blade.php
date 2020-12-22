<div class="popup-container modal fade in" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="header-title" aria-hidden="true">
    <div class="popup-inner-container modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content popup-content">
            <div class="modal-header">
                @isset($title)
                    <h5 class="modal-title text-center" id="header-title">{{ $title }}</h5>
                @endisset
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="body modal-body">
                {{ $body }}
            </div>
            <div class="footer modal-footer">
                {{ $footer }}
            </div>
        </div>
    </div>
</div>
