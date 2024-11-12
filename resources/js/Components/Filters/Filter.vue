<script setup>
const props = defineProps({
    text: String
});
</script>

<template>
    <div class="container-category">
        <p>{{ text }}</p>
    </div>
</template>

<style scoped>
body{
    background: #EEEEC8;
}
.container-category {
    background: #EEEEC8;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: auto;
    height: 37px;
    padding: 8px 16px 8px 16px;
    gap: 8px;
    border-radius: 24px;
    border: 1px solid #232222
}

.container-category p {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    text-align: center;
    margin: 0;
    white-space: nowrap;
}
</style>
