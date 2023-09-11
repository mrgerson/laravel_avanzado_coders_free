<x-admin-layout>

    <form action="{{route('admin.categories.store')}}" 
        method="POST"
        class="bg-white rounded-lg p-6 shadow-lg">

        @csrf

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>

            <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre de la categoría" />
        </div>

        <div class="flex justify-end">
            <x-button>
                Crear categoría
            </x-button>
        </div>

    </form>

</x-admin-layout>