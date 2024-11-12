<script setup>
</script>

<template>
    <div class="text-footer">
        <p>Copyright 2024 Grease Monkey Swaps Inc. All Rights Reserved <span class="span-text"> <a href="#" class="text-link">Accessibility User
        Agreement Privacy, Payments Terms of Use, Cookies, CA Privacy Notice Your Privacy Choices </a> </span></p>
    </div>
</template>

<style scoped>
.span-text{
    font-family: Poppins, serif;
    font-size: 13px;
    font-weight: 500;
    line-height: 19.24px;
    text-align: center;
}

.text-footer{
    text-align: center;
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 20.72px;
}

.text-link{
    font-family: Poppins, serif;
    font-size: 14px;
    font-style: italic;
    font-weight: 400;
    line-height: 20.72px;
    text-align: center;
    color: #cb333b;
}

@media (max-width: 768px) {
    .span-text{
        font-size: 13px;
        line-height: 19.24px;
    }

    .text-footer{
        /* background: #EEEEC8; */
        font-size: 13px;
        line-height: 19.24px;
    }

    .text-link{
        font-size: 13px;
        line-height: 19.24px;
    }
}
</style>
