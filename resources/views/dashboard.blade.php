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
                                <hr>
                            @endforeach


                                    <script>
                                        var sites = {!! json_encode($products, JSON_HEX_TAG) !!};
                                        document.addEventListener("DOMContentLoaded", function(){
                                            console.log("blubb");
                                            console.log(sites);
                                        });
                                    </script>
                                <script src="js/vuecode.js" defer></script>
                            <div id="app-shop">
                                <shop-item
                                    v-for="item in groceryList"
                                    v-bind:shop="item"
                                ></shop-item>
                            </div>

                            <script>/*
                                document.addEventListener("DOMContentLoaded", function(){
                                    console.log('loading items');
                                    Vue.component('shop-item', {
                                        props: ['shop'],
                                    })
                                    var appshop = new Vue({
                                        el: '#app-shop',
                                        data: {
                                            groceryList: [
                                                [{"id":1,"article_number":10001,"name":"Besen","description":"Besen mit langem Stiel und wei\u00dfen Borsten","price":"9.99","image":"\/images\/besen.jpg"},{"id":2,"article_number":10002,"name":"Messer","description":"Gro\u00dfes Messer mit scharfer Klinge","price":"39.99","image":"\/images\/messer.jpg"},{"id":3,"article_number":10003,"name":"Rasenm\u00e4her","description":"Elektrischer Rasenm\u00e4her mit Fangkorb","price":"199.99","image":"\/images\/rasenmaeher.jpg"},{"id":4,"article_number":10004,"name":"Schaufel","description":"Kleine Schaufel f\u00fcr gro\u00dfe und kleine G\u00e4rtner","price":"4.99","image":"\/images\/schaufel.jpg"},{"id":5,"article_number":10005,"name":"Schaufel und Besen","description":"Set bestehend aus Besen und Kehrschaufel. Hier entkommt kein Schmutz.","price":"29.99","image":"\/images\/schaufel_besen.jpg"},{"id":6,"article_number":10006,"name":"Schere","description":"Schneidet einfach alles. Au\u00dfer Tiernahrung.","price":"19.99","image":"\/images\/schere.jpg"},{"id":7,"article_number":10007,"name":"Gartenger\u00e4te-Set","description":"Set bestehend aus verschiedenen kleinen Gartenger\u00e4ten. auch perfekt f\u00fcr den Balkon geeignet.","price":"24.99","image":"\/images\/set.jpg"}]
                                                { id: 0, name: 'Besen',description:'Besen mit Stiel',price: 2.22, image:'bild1 '},
                                                { id: 1, name: 'Schaufel',description:'Schaufel mit Stiel',price: 3.22, image:'bild2 '},
                                                { id: 2, name: 'Spaten',description:'Spaten mit Stiel',price: 4.22, image:'bild3 '},

                                            ]
                                        }
                                    })
                                })*/
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
