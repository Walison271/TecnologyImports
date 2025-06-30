    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartSidebar = document.getElementById('cartSidebar');
    const cartItems = document.getElementById('cartItems');
    const closeCart = document.getElementById('closeCart');
    const overlay = document.getElementById('overlay');

    function openCart() {
        cartSidebar.classList.add('open');
        overlay.classList.add('show');
    }

    function closeCartSidebar() {
        cartSidebar.classList.remove('open');
        overlay.classList.remove('show');
    }

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const name = button.dataset.name;
            const img = button.dataset.img;

            const li = document.createElement('li');
            li.innerHTML = `
                <img src="${img}" alt="${name}">
                <span>${name}</span>
                <button class="remove">&times;</button>
            `;

            li.querySelector('.remove').addEventListener('click', () => {
                li.remove();
            });

            cartItems.appendChild(li);
            openCart();
        });
    });

    closeCart.addEventListener('click', closeCartSidebar);
    overlay.addEventListener('click', closeCartSidebar);
