<script setup>
import { Head } from '@inertiajs/vue3';
import Categories from "@/Components/Categories/Categories.vue";
import PopularSellers from "@/Components/Sellers/PopularSellers.vue";
import Vehicles from "@/Components/Vehicles/Vehicles.vue";
import Products from "@/Components/Products/Products.vue";
import PopularBuyers from "@/Components/Buyers/PopularBuyers.vue";
import ProductTrending from "@/Components/Products/ProductTrending.vue";
import Menu from "@/Components/Menu/Menu.vue";
import Score from "@/Components/Score/Score.vue";
import NavbarPrincipal from "@/Components/Navbar/NavbarPrincipal.vue";

</script>

<template>
    <!--Styles and temporal structure-->
    <div style="background-color: #EEEEC8; width: 100%; height: 700px">

        <Head title="Inbox" />

        <NavbarPrincipal/>

        <h1 style="padding-top: 180px">Inbox</h1>

        <Menu/>
    </div>
</template>
