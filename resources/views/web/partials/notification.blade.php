@if (session()->has('notification'))
    <script>
        @if (session()->get('notification.type') === 'success') 
            toastr.success("{!! session()->get('notification.message') !!}");
        @else
            toastr.error("{!! session()->get('notification.message') !!}");
        @endif
    </script>
@endif