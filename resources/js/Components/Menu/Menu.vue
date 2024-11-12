<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const isMarketplace = computed(() => page.url.startsWith('/marketplace'));
const isDashboard = computed(() => page.url.startsWith('/dashboard'));
const isSearch = computed(() => page.url.startsWith('/search'));
const isInbox = computed(() => page.url.startsWith('/inbox'));
const isSelling = computed(() => page.url.startsWith('/selling'));
</script>

<template>
    <div class="container-principal">
        <div class="content">
            <div class="element">
                <Link class="element-link" :href="route('marketplace')">
                    <img v-if="isMarketplace" src="images/menu/menu1.png" alt="menu1">
                    <img v-else src="images/menu/menu1_inactive.png" alt="menu1">
                    <p :class="{'color-link-active' : isMarketplace}" class="text-menu">Market</p>
                </Link>
            </div>
            <div class="element">
                <Link class="element-link" :href="route('dashboard')">
                    <img v-if="isDashboard" src="images/menu/menu2.png" alt="menu2">
                    <img v-else src="images/menu/menu2_inactive.png" alt="menu2">
                    <p :class="{'color-link-active' : isDashboard}" class="text-menu">Dashboard</p>
                </Link>
            </div>
            <div class="element">
                <Link class="element-link" :href="route('search')">
                    <img v-if="isSearch" src="images/menu/menu3.png" alt="menu3">
                    <img v-else src="images/menu/menu3_inactive.png" alt="menu3">
                    <p :class="{'color-link-active' : isSearch}" class="text-menu">Search</p>
                </Link>
            </div>
            <div class="element">
                <Link class="element-link" :href="route('inbox')">
                    <img v-if="isInbox" src="images/menu/menu4.png" alt="menu4">
                    <img v-else src="images/menu/menu4_inactive.png" alt="menu4">
                    <p :class="{'color-link-active' : isInbox}" class="text-menu">Inbox</p>
                </Link>
            </div>
            <div class="element">
                <Link class="element-link" :href="route('selling')">
                    <img v-if="isSelling" src="images/menu/menu5.png" alt="menu5">
                    <img v-else src="images/menu/menu5_inactive.png" alt="menu5">
                    <p :class="{'color-link-active' : isSelling}" class="text-menu">Selling</p>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>
.container-principal {
    padding-top: 30px;
    padding-bottom: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content {
    background-color: #F2F2D6;
    position: fixed;
    bottom: 30px;
    height: 105.15px;
    width: 600px;
    padding: 24px 32px 24px 32px;
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    border: 1px solid #232222;
}

.element {
    width: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.element-link {
    text-decoration: none;
    color: inherit;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.element img {
    max-width: 100%;
    height: auto;
    display: block;
}

.text-menu {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    margin: 8px 0 0 0;
    text-align: center;
}

.color-link-active {
    color: #CB333B;
}

@media (max-width: 768px) {
    .content {
        height: 119px;
        width: 100%;
        bottom: 0;
        border-radius: 0;
        border: none;
        border-top: 1px solid #494949
    }

    .element {
        width: auto;
    }

    .text-menu {
        font-size: 13px;
        line-height: 19.24px;
        text-align: left;
    }
}
</style>
