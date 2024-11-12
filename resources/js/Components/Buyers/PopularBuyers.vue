<script setup>
import Buyer from "@/Components/Buyers/Buyer.vue";
</script>

<template>
    <div class="container-principal">
        <div class="popular-buyers-section">
            <div class="container-popular-buyers">
                <h3>INSPIRED BY YOUR SHOPPING</h3>

                <div class="buyers-list">
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                    <Buyer
                        buyer-name="John Doe"
                        buyer-image="images/sellers/seller-default-image.png"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.container-principal {
    background: #EEEEC8;
    padding-top: 115px;
}

.popular-buyers-section {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container-popular-buyers {
    position: relative;
    top: 40px;
    width: 100%;
    max-width: 982px;
    margin: 0 auto;
}

.container-popular-buyers h3 {
    font-family: Sharpie-Extrabold, serif;
    font-size: 28px;
    font-style: italic;
    line-height: 25.2px;
    letter-spacing: -0.02em;
    text-align: left;
    margin-bottom: 56px;
    margin-left: 45px
}

.buyers-list {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 16px;
    justify-content: space-between;
}

.buyers-list > * {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

@media (max-width: 768px){
    .container-principal {
        padding-top: 115px;
    }

    .popular-buyers-section {
        padding: 5%;
    }

    .container-popular-buyers {
        position: relative;
        top: 40px;
        width: 100%;
        margin: 0 auto;
    }

    .container-popular-buyers h3 {
        font-size: 24px;
        font-weight: 700;
        line-height: 21.6px;
        margin-bottom: 36px;
        margin-left: 0
    }

    .buyers-list {
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
    }
}

</style>
