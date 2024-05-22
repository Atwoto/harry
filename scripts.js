document.querySelector('.load-more').addEventListener('click', () => {
    const productGrid = document.querySelector('.product-grid');
    for (let i = 0; i < 4; i++) {
        const newProduct = document.createElement('div');
        newProduct.classList.add('product-card');
        newProduct.innerHTML = `
            <img src="product.jpg" alt="New Product">
            <div class="hover-icons">
                <span>👁️</span>
                <span>❤️</span>
                <span>🛒</span>
            </div>
            <div class="product-info">
                <p>KES 2,000</p>
                <p>NEW PRODUCT</p>
            </div>
        `;
        productGrid.appendChild(newProduct);
    }
});
