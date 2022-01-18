<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                            @foreach($productlist as $data)
                            <div class="p-6 border-t border-gray-200 md:border-t md:border-l">
                                <div class="flex content-center items-center">
                                    <input type="hidden" value="{{$data->article_number}}">
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-center">{{$data->name}}</div>
                                </div>

                                <div class="">
                                    <div class=""><img src="{{$data->image}}" class="img-responsive" style="width:100%" alt="Image"></div>
                                    <div class="mt-2 text-sm text-gray-500">
                                        {{$data->description}}
                                    </div>
                                    <div class="mt-3 flex items-center text-sm font-semibold text-gray-600">
                                        <div>{{$data->price}} €</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
