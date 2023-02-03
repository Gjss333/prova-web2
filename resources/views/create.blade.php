<x-guest-layout>
    <form action="{{route('filmes.store')}}" method="POST">
        @csrf

        <div>

            <x-input-label for="email" :value="__('title')" />
            <x-text-input id="email" class="block mt-1 w-full" name="title" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('director')" />
            <x-text-input id="email" class="block mt-1 w-full" name="director" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('genre')" />
            <x-text-input id="email" class="block mt-1 w-full" name="genre" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('release_yeah')" />
            <x-text-input id="email" class="block mt-1 w-full" name="release_yeah" type="number" />
        </div>

        <x-primary-button class="mt-3">ENVIAR</x-primary-button>
        
    </form>
</x-guest-layout>

