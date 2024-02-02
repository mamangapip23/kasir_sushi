document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items: [
            { id: 1, name: 'Paket A', img: '1.jpg', price: 10000 },
            { id: 2, name: 'Paket B', img: '2.jpg', price: 16000 },
            { id: 3, name: 'Paket C', img: '3.jpg', price: 40000 },
            { id: 4, name: 'Ayam Geprek', img: '4.jpg', price: 10000 },
            { id: 5, name: 'Nugget Geprek', img: '5.jpg', price: 10000 },
            { id: 6, name: 'Sushi Nasor', img: '6.jpg', price: 10000 },
            { id: 7, name: 'Kimbab Roll', img: '7.jpg', price: 10000 },
            { id: 8, name: 'Crispy Roll', img: '8.jpg', price: 10000 },
            { id: 9, name: 'Mix Ori', img: '9.jpg', price: 10000 },
        ],
    }));
});