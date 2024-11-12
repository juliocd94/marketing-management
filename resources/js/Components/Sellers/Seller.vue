<script setup>
const props = defineProps({
    sellerImage: String,
    sellerName: String
});
</script>

<template>
    <div class="container-category">
        <img :src="sellerImage" alt="">
        <p>{{ sellerName }}</p>
    </div>
</template>

<style scoped>
.container-category {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 69px;
    height: 92.83px;
    gap: 8px;
}

.container-category img {
    width: 64px;
    height: 64px;
}

.container-category p {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    text-align: left;
}

@media (max-width: 768px) {
    .container-category {
        width: 64px;
        height: 92.83px;
    }

    .container-category img {
        width: 60px;
        height: 60px;
    }

    .container-category p {
        font-family: Poppins, serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 19.24px;
        text-align: left;
    }
}
</style>
