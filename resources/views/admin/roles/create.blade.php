<x-admin-layout>

    <div class="bg-white shadow rounded-lg p-6">

        <form action="{{route('admin.roles.store')}}" method="POST">

            @csrf

            <x-validation-errors class="mb-4" />

            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input class="w-full"
                    name="name"
                    placeholder="Ingrese el nombre del rol"
                    value="{{old('name')}}" />
            </div>

            <div class="mb-4">

                <ul>
                    @foreach ($permissions as $permission)
                        
                        <li>
                            <label>
                                <x-checkbox
                                    name="permissions[]"
                                    value="{{$permission->id}}"
                                    :checked="in_array($permission->id, old('permissions', []))"
                                    />
                                {{$permission->name}}
                            </label>
                        </li>

                    @endforeach
                </ul>

            </div>

            <x-button>
                Crear rol
            </x-button>
        </form>

    </div>

</x-admin-layout>