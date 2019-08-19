@extends ('layouts.master')

@section ('title', 'Part 2')

@section ('main-content')

@include ('components.messages.flash.success')

<section id="share-create">

    <div id="box">
        <h1>Send to a friend</h1>
        <p>Share this great deal with friends!</p>

        <form method="POST" action="{{ route('share.store') }}">
            @csrf

            <div class="form-group">
                <label>Your name *</label>
                <div class="input-group">
                    <input type="text" class="@error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" required>
                    @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Friend's name *</label>
                <div class="input-group">
                    <input type="text" class="@error('friend_name') is-invalid @enderror" name="friend_name" value="{{ old('friend_name') }}" required>
                    @error('friend_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Friend's email *</label>
                <div class="input-group">
                    <input type="text" class="@error('friend_email') is-invalid @enderror" name="friend_email" value="{{ old('friend_email') }}" required>
                    @error('friend_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label></label>
                <div class="input-group">
                    <button type="submit">→ Submit</button>
                </div>
            </div>
        </form>
    </div>

</section>

@endsection
