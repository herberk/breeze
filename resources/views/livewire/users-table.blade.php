<div>
    {{--nav users--}}
    @include('layouts.nav-users')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="flex bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           wire:model="search"
                                           type="text" placeholder="Buscar..">
                                    <div class="form-input rounded-md shadow-sm mt-1 ml-6 block">
                                        <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                                            <option value="5">5 por pagina</option>
                                            <option value="10">10 por pagina</option>
                                            <option value="15">15 por pagina</option>
                                            <option value="50">50 por pagina</option>
                                            <option value="100">100 por pagina</option>
                                        </select>
                                    </div>
                                    <div class="inline-block mt-1 ml-6  w-40">
                                        <select wire:model="state"class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-300 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="3">Estado</option>
                                            <option value="1">Activo</option>
                                            <option value="0">Bloqueado</option>

                                        </select>
                                       {{--  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>--}}
                                    </div>
                                    @if($search !=='')

                                        <button wire:click="clear" class="form-input rounded  hover:bg-gray-300 px-2 py-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 2.1l4 4-4 4"/><path d="M3 12.2v-2a4 4 0 0 1 4-4h12.8M7 21.9l-4-4 4-4"/><path d="M21 11.8v2a4 4 0 0 1-4 4H4.2"/></svg>
                                        </button>
                                    @endif
                                </div>
                                @if($users->count())
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                        <tr>
             {{--                              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 tracking-wide">--}}
         {{--                                   Apodo--}}
            {{--                                    </th>--}}
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Avatar    Apódo   Nombre
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Equipo
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Estado
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Rol
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50"></th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                        {{--             <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_url}}" alt="{{$user->name}}}}">--}}
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                                {{ $user->nickname }}
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                                {{ $user->name }}
                                                            </div>
                                                            <div class="text-sm leading-5 text-gray-500">
                                                                {{ $user->email }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900">{{ $user->active }}</div>
{{--                                                <div class="text-sm leading-5 text-gray-500">{{ $user->allTeams()->pluck('name')->join(', ') }}</div>--}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    {{--            Checkbox.     data-id="{{ $user->id }}"--}}
                                                    <input  type="checkbox" name="active" wire:click="edit({{ $user->id,$user->active }})" class="w-4 h-4 " {{ $user->active == 1 ? 'checked' : '' }}>
                                                    @if($user->active=='1')
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Activo</span>
                                                    @else
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Bloqueo</span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                                    fecha ultimo visita
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        <!-- More rows... -->
                                        </tbody>
                                    </table>
                                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                        {{ $users->links() }}
                                    </div>
                                @else
                                    <div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6">
                                        No hay resultados para la busqueda {{$search}} en la pagina {{$page}} al mostrar {{$perPage}} por pagina
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<button class="px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium rounded ">Nuevo</button>
<button class="px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium rounded">Editar</button>
<button class="px-2 py-1 bg-red-500 hover:bg-red-700 text-white text-sm font-medium rounded">Eliminar</button>
<button class="px-2 py-1 bg-white hover:bg-gray-300 text-gray-700 text-sm font-medium rounded border border-gray-300">Cancelar</button>
<button class="px-2 py-1 bg-gray-800 hover:bg-gray-500 text-white text-sm font-medium rounded ">Guardar</button>--}}
{{--//boton resete
<button wire:click="resetInputFields" class="form-input rounded  hover:bg-gray-300 px-2 py-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 2.1l4 4-4 4"/><path d="M3 12.2v-2a4 4 0 0 1 4-4h12.8M7 21.9l-4-4 4-4"/><path d="M21 11.8v2a4 4 0 0 1-4 4H4.2"/></svg>
</button>
//boton descargar
<button class="form-input rounded  hover:bg-gray-300 px-2 py-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/></svg>
</button>--}}

