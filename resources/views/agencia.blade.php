<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('registerAgency') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="descricao" :value="__('Descricao')" />

                <x-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autofocus />
            </div>

            <!-- Endereço -->
            <div class="mt-4">
                <x-label for="endereco" :value="__('Endereço')" />

                <x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required />
            </div>

            <!-- Endereço -->
            <div class="mt-4">
                <x-label for="cidade" :value="__('Cidade')" />

                <x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required />
            </div>
            

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
