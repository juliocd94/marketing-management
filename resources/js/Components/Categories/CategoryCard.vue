<script setup>
const props = defineProps({
    urlIcon: String,
    text: String
});
</script>

<template>
    <div class="category-list">
        <div class="container-category">
            <img :src="urlIcon" alt="" class="object-fit-none">
            <p>{{ text }}</p>
        </div>
    </div>
</template>

<style scoped>
.category-list {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
}

.container-category {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 81px;
    height: 69px;
    gap: 6px;
}

.container-category img {
    width: 40px;
    height: 40px;
}

.container-category p {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
}

@media (max-width: 768px) {
    .container-category {
        width: auto;
        height: 85px;
    }

    .container-category p {
        font-size: 13px;
        font-weight: 500;
        line-height: 19.24px;
        text-align: left;

    }
}
</style>
