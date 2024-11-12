<script setup>
const props = defineProps({
    productImage: String,
    productName: String,
    productDescription: String,
    productPrice: Number
});
</script>

<template>
    <div>
        <div class="head">
            <img :src="productImage" alt="Product Image">
        </div>
        <div class="body">
            <div class="content-card">
                <h4>{{ productName }}</h4>
                <div class="content-card-description">
                    {{ productDescription }}
                </div>
                <div class="content-card-price">
                    ${{ productPrice }}
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.head{
    width: 282.67px;
    height: 122px;
    padding: 41px 58px 41px 58px;
    gap: 8px;
    border-radius: 24px 24px 0 0;
    border: 1px solid #232222;
    background: #5A5959;
    text-align: center;
}

.body{
    width: 282.67px;
    height: 210px;
    padding: 24px 40px 40px 40px;
    gap: 46px;
    border-radius: 0 0 24px 24px;
    border-width: 0 1px 1px 1px;
    border-style: solid;
    border-color: #232222;
}

.content-card{
    width: 202.67px;
    height: 75px;
    gap: 12px;
}

.content-card h4{
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 700;
    line-height: 20.72px;
    text-align: left;

}

.content-card-description{
    width: 202.67px;
    height: 42px;
    gap: 0;
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 20.72px;
    text-align: left;
}

.content-card-price{
    position: relative;
    bottom: -65px;
    width: 202.67px;
    height: 25px;
    gap: 0;
    font-family: Poppins, serif;
    font-size: 28px;
    font-style: italic;
    font-weight: 700;
    line-height: 25.2px;
    letter-spacing: -0.02em;
    text-align: left;
}

@media (max-width: 1024px) {
    .head {
        width: 100%;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .head img {
        width: 40px;
        height: 40px;
    }

    .body{
        width: 100%;
        height: 156px;
        padding: 8px 16px 24px 16px;
        gap: 22px;
    }

    .content-card{
        width: 100%;
        height: 80px;
        gap: 4px;
    }

    .content-card h4{
        font-family: Poppins, serif;
        font-size: 13px;
        line-height: 19.24px;
    }

    .content-card-description{
        width: 100%;
        height: 57px;
        gap: 0;
        font-family: Poppins,serif;
        font-size: 13px;
        font-weight: 400;
        line-height: 19.24px;
        text-align: left;
    }

    .content-card-price{
        position: relative;
        bottom: -25px;
        width: 90%;
        height: 25px;
        gap: 0;
        font-size: 24px;
        font-style: italic;
        font-weight: 700;
        line-height: 21.6px;
        letter-spacing: -0.02em;
        text-align: left;
    }
}
</style>
