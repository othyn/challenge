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

            <dl>
                <dt>Your name *</dt>
                <dd>
                    <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" name="customer_name" value="{{ old('customer_name') }}" required>
                    @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </dd>

                <dt>Friend's name *</dt>
                <dd>
                    <input type="text" class="form-control @error('friend_name') is-invalid @enderror" id="friend_name" name="friend_name" value="{{ old('friend_name') }}" required>
                    @error('friend_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </dd>

                <dt>Friend's email *</dt>
                <dd>
                    <input type="text" class="form-control @error('friend_email') is-invalid @enderror" id="friend_email" name="friend_email" value="{{ old('friend_email') }}" required>
                    @error('friend_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </dd>

                <dd>
                    <button type="submit">→ Submit</button>
                </dd>
            </dl>
        </form>
    </div>

</section>

@endsection
