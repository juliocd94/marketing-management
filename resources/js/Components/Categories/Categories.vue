<script setup>
import CategoryCard from "@/Components/Categories/CategoryCard.vue";
import Filter from "@/Components/Filters/Filter.vue";
</script>

<template>
    <div class="container-principal">
        <div class="banner">
            <div class="search-container">
                <img
                    src="images/search.png"
                    class="search-icon"
                    alt="Search"
                >
                <input
                    class="search"
                    type="text"
                    placeholder="Search for a product"
                >
            </div>
        </div>

        <div class="categories">
            <div class="category-list">
                <CategoryCard url-icon="images/categories/parts_cons.png" text="Transmission"/>
                <CategoryCard url-icon="images/categories/engine.png" text="Engine"/>
                <CategoryCard url-icon="images/categories/steering-wheel.png" text="Steering"/>
                <CategoryCard url-icon="images/categories/door.png" text="Body"/>
                <CategoryCard url-icon="images/categories/row3_1.png" text="Suspension"/>
                <CategoryCard url-icon="images/categories/starters.png" text="Starters"/>
                <CategoryCard url-icon="images/categories/row1_1.png" text="Gauges"/>
                <CategoryCard url-icon="images/categories/interior.png" text="Interior"/>
                <CategoryCard url-icon="images/categories/wheels.png" text="Wheels"/>
                <CategoryCard url-icon="images/categories/other.png" text="Other"/>
            </div>
        </div>

        <div class="inter-container">
        </div>

        <div class="filters">
            <div class="filter-list">
                <img
                    src="images/filters/filter.png"
                    alt="Icon Filter"
                >

                <Filter text="Discounts"/>
                <Filter text="Free Shipping"/>
                <Filter text="Cash Only"/>
                <Filter text="Near Me"/>

                <img
                    class="line-intermedie"
                    src="images/filters/line1.png"
                    alt="Icon Filter"
                >

                <div
                    class="mileage-filter">
                    50 miles <img
                    src="images/filters/slider.png"
                    alt="Icon Filter"
                >
                    1200 miles
                </div>
            </div>
        </div>
        <div
            class="mileage-filter-2"
        >
            0 miles
            <img
                src="images/filters/slider2.png"
                alt="Icon Filter"
            >
            2356 miles
        </div>
    </div>
</template>

<style>
.container-principal{
    background: #EEEEC8;
}
.banner {
    margin-top: 112px;
    width: 100%;
    height: 255px;
    background-image: url("../../../../public/images/gears-image.png");
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}

.search-container {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 864px;
    margin-top: 245px;
    padding: 0 16px;
}

.search {
    background-color:  #F2F2D6;
    width: 100%;
    height: 54px;
    padding-left: 48px;
    border-radius: 64px;
    border: 1px solid #232222;
}

.search-icon {
    position: absolute;
    margin-left: 16px;
    font-size: 24px;
    color: #232222;
}

.categories {
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

.inter-container {
    border-bottom: 1px solid #232222;
}

.category-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(70px, 1fr));
    gap: 0;
    width: 100%;
    max-width: 864px;
    padding-bottom: 8px;
}

.filters {
    display: flex;
    justify-content: center;
    margin-top: 40px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
    scrollbar-width: none;
    margin-left: 5%;
}

.filter-list {
    display: flex;
    gap: 16px;
    min-width: max-content;
    padding-right: 5%;
    scroll-snap-align: start;
}

.mileage-filter {
    display: flex;
    align-items: center;
    gap: 6px;
}

.mileage-filter-2 {
    display: none;
}

@media (max-width: 768px) {
    .mileage-filter {
        display: none;
    }

    .mileage-filter-2 {
        display: block;
        font-family: Poppins, serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 19.24px;
        padding-top: 30px;
        padding-left: 5%;
        opacity: 25%;
    }

    .mileage-filter-2 img {
        width: 165px;
        margin: 3%;
    }

    .banner {
        margin-top: 70px;
        height: 0;
        background-image: none;
    }

    .search-container {
        margin-top: 100px;
    }

    .categories {
        display: block;
        margin-top: 100px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        scrollbar-width: none;
        margin-left: 5%;
        box-sizing: border-box;
    }

    .line-intermedie {
        display: none;
    }

    .categories::-webkit-scrollbar {
        display: none;
    }

    .inter-container {
        margin-left: 5%;
    }

    .category-list {
        padding-right: 5%;
        display: flex;
        gap: 16px;
        width: auto;
        scroll-snap-align: start;
        justify-content: flex-start;
    }

    .filters {
        opacity: 25%;
        margin-left: 5%;
        justify-content: start;
    }

    .filter-list {
        padding-right: 5%;
        min-width: max-content;
        width: auto;
    }
}
</style>
