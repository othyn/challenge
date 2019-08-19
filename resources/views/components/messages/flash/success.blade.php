@if ($message = session('flash.success'))
    <div class="alert" role="alert">
        {{ $message }}
    </div>
@endif
