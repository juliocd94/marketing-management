<script setup>
import ProductCardTrending from "@/Components/Products/ProductCardTrending.vue";
import {onMounted, ref} from "vue";

const products = ref(null);

const getProducts = async () => {
    try {
        const response = await axios.get(route('products.index'));
        products.value = response.data.data;
    } catch (error) {
        console.error(error);
    }
};

onMounted(() => {
    getProducts();
})
</script>

<template>
    <div class="container-principal">
        <div class="products-section">
            <div class="container-products">
                <div class="product-head">
                    <h3>TRENDING PRODUCT TYPE</h3>
                </div>
                <div class="products-list">
                    <ProductCardTrending
                        v-if="products"
                        v-for="product in products"
                        product-image="images/gear.png"
                        :product-name="product.product_name"
                        :product-description="product.description"
                        :product-price="product.price"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.container-principal {
    background: #EEEEC8;
}

.products-section {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-top: 30px;
    text-align: center;
    gap: 40px;
}

.product-head {
    width: 100%;
    text-align: left;
    margin-bottom: 40px;
    margin-left: 6px;
    padding-top: 75px;
}

.product-head h3 {
    font-family: Sharpie-Extrabold, serif;
    font-size: 28px;
    font-style: italic;
    line-height: 25.2px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #232222;
}

.container-products {
    position: relative;
    width: 100%;
    max-width: 912px;
    margin: 0 auto;
}

.products-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(390px, 1fr));
    gap: 16px;
    justify-items: center;
}

@media (max-width: 768px) {
    .products-section {
        padding: 5%;
    }

    .product-head h3 {
        font-size: 24px;
        font-weight: 700;
        line-height: 21.6px;
    }

    .products-list {
        grid-template-columns: repeat(1, 1fr);
        gap: 16px;
        justify-items: center;
    }
}

@media (min-width: 577px) and (max-width: 1024px) {
    .products-section {
        padding: 5%;
    }

    .products-list {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
        justify-items: center;
    }
}
</style>
