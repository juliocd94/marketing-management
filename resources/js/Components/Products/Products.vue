<script setup>
import ProductCard from "@/Components/Products/ProductCard.vue";
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
                    <h3>KEEP YOUR PRODUCT IN TOP CONDITION</h3>
                    <p>Find maintenance parts for your specific product</p>
                </div>
                <div class="products-list">
                    <ProductCard
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
    margin-top: 0px;
    text-align: center;
    height: 432px;
    gap: 40px;
}

.product-head {
    width: 100%;
    text-align: left;
    margin-bottom: 40px;
    margin-left: 6px;
    padding-top: 40px;
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

.product-head p {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    text-align: left;
    color: #5A5959;

}

.container-products {
    position: relative;
    top: 40px;
    width: 100%;
    max-width: 912px;
    margin: 0 auto;
}

.products-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 16px;
    justify-items: center;
}

@media (max-width: 576px) {
    .container-principal {
        width: 100%;
        padding-left: 5%;
        padding-right: 5%;
    }

    .products-section {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-top: 0;
        text-align: center;
        height: 669px;
    }

    .product-head {
        text-align: left;
        margin-bottom: 40px;
        margin-left: 0;
        padding-top: 40px;
    }

    .product-head h3 {
        font-size: 24px;
        font-style: italic;
        font-weight: 700;
        line-height: 21.6px;
        letter-spacing: -0.02em;
        text-align: left;
        color: #232222;
    }

    .product-head p {
        font-family: Poppins, serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 19.24px;
        text-align: left;
        color: #5A5959;
    }

    .container-products {
        position: relative;
        top: 40px;
        max-width: 912px;
        margin: 0 auto;
    }

    .products-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
        justify-items: center;
    }
}

@media (min-width: 577px) and (max-width: 1024px) {
    .container-principal {
        width: 100%;
        padding-left: 5%;
        padding-right: 5%;
    }

    .products-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        justify-items: center;
    }
}

</style>
