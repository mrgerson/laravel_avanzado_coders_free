<x-admin-layout>

    <form action="{{route('admin.categories.update', $category)}}" 
        method="POST"
        class="bg-white rounded-lg p-6 shadow-lg">

        @csrf
        @method('PUT')

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Nombre
            </x-label>

            <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre de la categoría"
                value="{{ $category->name }}" />
        </div>

        <div class="flex justify-end">
            <x-danger-button class="mr-2" onclick="deleteCategory()">
                Eliminar
            </x-danger-button>

            <x-button>
                Actualizar categoría
            </x-button>
        </div>

    </form>

    <form action="{{route('admin.categories.destroy', $category)}}"
        method="POST"
        id="formDelete">

        @csrf
        @method('DELETE')

    </form>

    @push('js')

        <script>
            function deleteCategory(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>

    @endpush

</x-admin-layout>