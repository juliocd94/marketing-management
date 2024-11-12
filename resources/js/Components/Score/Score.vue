<script setup>

</script>

<template>
    <div class="container-principal">
        <p>What do you think of this page?</p>
        <div class="content-score">
            <img src="images/score/star.png">
            <img src="images/score/star.png">
            <img src="images/score/star.png">
            <img src="images/score/star.png">
            <img src="images/score/star.png">
        </div>
    </div>
</template>

<style scoped>
.container-principal {
    background: #EEEEC8;
    text-align: center;
    padding-top: 60px;
    padding-bottom: 70px;
}

.content-score img {
    margin: 6px;
}

@media (max-width: 768px) {
    .container-principal {
        padding-bottom: 45px;
    }

    .content-score {
        margin: 5%;
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(34, 34, 34, 0.5);
    }

    .content-score img {
        width: 25.47px;
        height: 24px;
    }
}
</style>
