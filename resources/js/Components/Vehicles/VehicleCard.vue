<script setup>
const props = defineProps({
    vehicleImage: String,
    vehicleName: String,
    vehicleUrl: String,
});
</script>

<template>
    <div>
        <div class="head">
            <img :src="vehicleImage" alt="vehicle Image">
        </div>
        <div class="body">
            <h4>{{ vehicleName }}</h4>
        </div>
    </div>
</template>

<style scoped>
.head {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 277.33px;
    height: 122px;
    padding: 6px 31px;
    gap: 8px;
    border-radius: 24px 24px 0 0;
    border: 1px solid #C8C8C8;
}

.body {
    width: 277.33px;
    height: 56px;
    padding: 8px 16px 24px 16px;
    gap: 22px;
    border-radius: 0 0 24px 24px;
    border-width: 0 1px 1px 1px;
    border-style: solid;
    border-color: #C8C8C8;
    font-family: Poppins, serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 23.68px;
    text-align: center;
    color: #F2F1F0;
}

@media (max-width: 768px) {
    .head {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 204px;
        height: 122px;
        padding: 6px 31px 6px 31px;
        gap: 8px;
        border-radius: 24px 24px 0 0;
        border: 1px solid #C8C8C8;
    }

    .body {
        width: 204px;
        height: 54px;
        padding: 8px 56px 24px 16px;
        gap: 22px;
        border-radius: 0 0 24px 24px;
        border-width: 0 1px 1px 1px;
        border-style: solid;
        border-color: #C8C8C8;
    }

    .body h4 {
        font-family: Poppins, serif;
        font-size: 15px;
        font-weight: 700;
        line-height: 22.2px;
        text-align: left;
        color: #F2F1F0;
    }
}
</style>
