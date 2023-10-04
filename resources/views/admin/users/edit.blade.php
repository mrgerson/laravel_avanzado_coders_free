<x-admin-layout>

    <div class="bg-white rounded shadow-lg p-6">

        <form action="{{route('admin.users.update', $user)}}" method="POST">

            @csrf
            @method('PUT')


            <div class="mb-4">
                <x-label>
                    Nombre
                </x-label>

                <x-input name="name" value="{{ old('name', $user->name) }}" class="w-full" />
            </div>

            <div class="mb-4">
                <x-label>
                    Email
                </x-label>

                <x-input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full" />

            </div>

            <div class="mb-4">
                <x-label>
                    Password
                </x-label>

                <x-input type="password" name="password" class="w-full" />
            </div>

            <div class="mb-4">
                <x-label>
                    Confirmar Password
                </x-label>

                <x-input type="password" name="password_confirmation" class="w-full" />
            </div>

            <div class="mb-4">

                <ul>

                    @foreach ($roles as $role)
                        
                        <li>
                            <label>
                                <x-checkbox
                                    name="roles[]"
                                    value="{{$role->id}}"
                                    :checked="in_array($role->id, old('roles', $user->roles->pluck('id')->toArray()))"
                                    />
                                {{$role->name}}
                            </label>
                        </li>

                    @endforeach

                </ul>


            </div>

            <div class="flex justify-end">
                <x-button>
                    Actualizar
                </x-button>
            </div>
        </form>
    </div>

</x-admin-layout>