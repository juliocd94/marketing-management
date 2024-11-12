<script setup>
import Seller from "@/Components/Sellers/Seller.vue";
</script>

<template>
    <div class="container-principal">
        <div class="popular-sellers-section">
            <div class="container-popular-sellers">
                <h3>POPULAR SELLERS</h3>

                <div class="sellers-list">
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
                    />
                    <Seller
                        seller-name="John Doe"
                        seller-image="images/sellers/seller-default-image.png"
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

.popular-sellers-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 80px;
}

.container-popular-sellers {
    position: relative;
    top: 40px;
    width: 100%;
    max-width: 982px;
    margin: 0 auto;
}

.container-popular-sellers h3 {
    font-family: Sharpie-Extrabold, serif;
    font-size: 28px;
    font-style: italic;
    line-height: 25.2px;
    letter-spacing: -0.02em;
    text-align: left;
    margin-bottom: 56px;
    margin-left: 45px
}

.sellers-list {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 16px;
    justify-content: space-between;
}

.sellers-list > * {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

@media (max-width: 768px) {
    .popular-sellers-section {
        padding-top: 40px;
    }

    .container-popular-sellers {
        top: 20px;
        padding: 5%;
    }

    .container-popular-sellers h3 {
        font-size: 24px;
        font-weight: 700;
        line-height: 21.6px;
        margin-bottom: 36px;
        margin-left: 0;
    }

    .sellers-list {
        grid-template-columns: repeat(4, 1fr);
    }
}

</style>
