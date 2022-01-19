require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
/*
document.addEventListener("DOMContentLoaded", function(){
    console.log('loading items');
    Vue.component('shop-item', {
        props: ['shop'],
        template: '<div class="p-6 border-t border-gray-200 md:border-t md:border-l"><div class="flex content-center items-center"><input type="hidden" :value="shop.article_number"><div  class="ml-4 text-lg text-gray-600 leading-7 font-semibold text-center">{{shop.name}}</div></div><div class=""><div class=""><img src="" class="img-responsive" style="width:100%" :alt="shop.image"></div><div class="mt-2 text-sm text-gray-500">{{shop.description}}</div><div class="mt-3 flex items-center text-sm font-semibold text-gray-600"><div>{{shop.price}} €</div></div></div></div>'
    })
    var appshop = new Vue({
        el: '#app-shop',
        data: {
            groceryList: [
                sites,
                {"id":1,"article_number":10001,"name":"Besen","description":"Besen mit langem Stiel und wei\u00dfen Borsten","price":"9.99","image":"\/images\/besen.jpg"},{"id":2,"article_number":10002,"name":"Messer","description":"Gro\u00dfes Messer mit scharfer Klinge","price":"39.99","image":"\/images\/messer.jpg"},{"id":3,"article_number":10003,"name":"Rasenm\u00e4her","description":"Elektrischer Rasenm\u00e4her mit Fangkorb","price":"199.99","image":"\/images\/rasenmaeher.jpg"},{"id":4,"article_number":10004,"name":"Schaufel","description":"Kleine Schaufel f\u00fcr gro\u00dfe und kleine G\u00e4rtner","price":"4.99","image":"\/images\/schaufel.jpg"},{"id":5,"article_number":10005,"name":"Schaufel und Besen","description":"Set bestehend aus Besen und Kehrschaufel. Hier entkommt kein Schmutz.","price":"29.99","image":"\/images\/schaufel_besen.jpg"},{"id":6,"article_number":10006,"name":"Schere","description":"Schneidet einfach alles. Au\u00dfer Tiernahrung.","price":"19.99","image":"\/images\/schere.jpg"},{"id":7,"article_number":10007,"name":"Gartenger\u00e4te-Set","description":"Set bestehend aus verschiedenen kleinen Gartenger\u00e4ten. auch perfekt f\u00fcr den Balkon geeignet.","price":"24.99","image":"\/images\/set.jpg"},
                { id: 8, name: 'Besen',description:'Besen mit Stiel',price: 2.22, image:'bild1 '},
                { id: 9, name: 'Schaufel',description:'Schaufel mit Stiel',price: 3.22, image:'bild2 '},
                { id: 10, name: 'Spaten',description:'Spaten mit Stiel',price: 4.22, image:'bild3 '},
                { id: 11, name: 'Schere', description: 'Schere mit weichem Griff', price: 4.99, image: 'bild5'},
            ]
        }
    })
})*/
