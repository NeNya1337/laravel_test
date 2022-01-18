Vue.component('shop-item', {
    props: ['shop'],
    template: '<div class="p-6 border-t border-gray-200 md:border-t md:border-l"><div class="flex content-center items-center"><input type="hidden" value="{{shop.article_number}}"><div  class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-center">{{shop.name}}</div></div><div class=""><div class=""><img src="" class="img-responsive" style="width:100%" :alt="shop.image"></div><div class="mt-2 text-sm text-gray-500">{{shop.description}}</div><div class="mt-3 flex items-center text-sm font-semibold text-gray-600"><div>{{shop.price}} €</div></div></div></div>'
})
var appshop = new Vue({
    el: '#app-shop',
    data: {
        groceryList: [
            { id: 0, name: 'Besen',description:'Besen mit Stiel',price: 2.22, image:'bild1 '},
            { id: 1, name: 'Schaufel',description:'Schaufel mit Stiel',price: 3.22, image:'bild2 '},
            { id: 2, name: 'Spaten',description:'Spaten mit Stiel',price: 4.22, image:'bild3 '},
        ]
    }
})
