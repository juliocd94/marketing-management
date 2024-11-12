<script setup>
</script>

<template>
    <nav class="custom-navbar border-bottom-nav fixed-top container-height">
        <div class="navbar-container">
            <a class="logo-container" href="marketplace">
                <img src="images/Logo.svg" alt="Logo" class="logo-img"/>
            </a>

            <div class="menu-button-container">
                <img src="images/Menu.png" alt="Menu" class="menu-img"/>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.container-height {
    height: 112px;
}

.border-bottom-nav {
    border-bottom: 1.5px solid #202222;
}

.custom-navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 16px;
    background: #EEEEC8;
    width: 100%;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.logo-container {
    display: flex;
    align-items: center;
}

.menu-button-container {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.logo-img {
    height: 54.89px;
    width: 64px;
}

.menu-img {
    height: 56px;
    width: 56px;
    cursor: pointer;
}

@media (max-width: 768px) {
    .custom-navbar {
        background: #EEEEC8;
    }

    .container-height{
        height: 70px;
    }

    .menu-button-container {
        justify-content: flex-end;
    }

    .logo-img {
        height: 40px;
        width: auto;
    }

    .menu-img {
        height: 40px;
        width: 40px;
        cursor: pointer;
    }
}
</style>
