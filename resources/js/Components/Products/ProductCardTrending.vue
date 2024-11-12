<script setup>
const props = defineProps({
    productImage: String,
    productName: String,
    productUrl: String,
});
</script>

<template>
    <div>
        <div class="head">
            <img :src="productImage" alt="product Image">
        </div>
        <div class="body">
            <div>
                <h4>{{ productName }}</h4>
                <p>
                    sgsdgrfsgndrn hrhergweg vsvsdvsdvqw
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.head {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 440px;
    height: 122px;
    padding: 41px 58px 41px 58px;
    gap: 8px;
    border-radius: 24px 24px 0 0;
    border: 1px solid #232222;
    background: #5A5959;
}

.body div{
    width: 360px;
    height: 75px;
    gap: 12px;
}

.body {
    width: 440px;
    height: 139px;
    padding: 24px 40px 40px 40px;
    gap: 46px;
    border-radius: 0 0 24px 24px;
    border-width: 0 1px 1px 1px;
    border-style: solid;
    border-color: #232222;
}

.body div h4{
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 700;
    line-height: 20.72px;
    text-align: left;
    color: #232222;
}

.body div p{
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 20.72px;
    text-align: left;
    color: #232222;
}

@media (max-width: 1024px) {
    .head {
        width: 100%;
    }

    .body div{
        width: 100%;
        height: 61px;
        gap: 4px;
    }

    .body {
        width: 100%;
        height: 93px;
        padding: 8px 16px 24px 16px;
        gap: 22px;
    }

    .body div h4{
        font-size: 13px;
        line-height: 19.24px;
    }

    .body div p{
        font-size: 13px;
        line-height: 19.24px;
    }
}
</style>
