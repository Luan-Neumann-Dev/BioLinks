<x-layout.app>
    <div>
        <h1>Dashboard</h1>

        @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

        <a href="{{ route('profile') }}">Update profile</a>
        <a href="{{ route('links.create') }}">Create a new link!</a>

        <ul>
            @foreach ($links as $link )
            <li style="display: flex; gap: 10px;">
                @unless($loop->last)
                <form action="{{ route('links.down', $link) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button>⬇️</button>
                </form>
                @endunless

                @unless($loop->first)
                <form action="{{ route('links.up', $link) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button>⬆️</button>
                </form>
                @endunless

                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->id }} . {{ $link->name }}
                </a>

                <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Tem certeza?')">
                    @csrf
                    @method('DELETE')
                    <button>DELETE</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>

</x-layout.app>