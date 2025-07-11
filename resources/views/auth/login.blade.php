<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <input name="email" placeholder="Email" value="{{ old('email') }}"/>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Password" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Log In</button>

    </form>

</div>