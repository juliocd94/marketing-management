<script setup>
import VehicleCard from "@/Components/Vehicles/VehicleCard.vue";
</script>

<template>
    <div class="container-principal">
        <div class="vehicles-section">
            <div class="container-vehicles">
                <div class="vehicle-head">
                    <h3>KEEP YOUR VEHICLE IN TOP CONDITION</h3>
                    <p>Find maintenance parts for your specific vehicle</p>
                </div>
                <div class="vehicles-list">
                    <VehicleCard vehicle-image="images/vehicles/car&Truck.png" vehicle-name="Car & Truck Parts"
                                 vehicle-url="/test"/>
                    <VehicleCard vehicle-image="images/vehicles/car&Truck.png" vehicle-name="Car & Truck Parts"
                                 vehicle-url="/test"/>
                    <VehicleCard vehicle-image="images/vehicles/car&Truck.png" vehicle-name="Car & Truck Parts"
                                 vehicle-url="/test"/>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.container-principal {
    background: #EEEEC8;
    padding-top: 80px;
}

.vehicles-section {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: center;
    height: 432px;
    gap: 40px;
    background: #CB333B;
}

.vehicle-head {
    width: 100%;
    text-align: left;
    margin-bottom: 56px;
    margin-left: 6px;
    padding-top: 40px;
}

.vehicle-head h3 {
    font-family: Sharpie-Extrabold, serif;
    font-size: 28px;
    font-style: italic;
    line-height: 25.2px;
    letter-spacing: -0.02em;
    text-align: left;
    color: #F2F1F0;
}

.vehicle-head p {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    text-align: left;
    color: #F2F1F0;
}

.container-vehicles {
    position: relative;
    top: 40px;
    width: 100%;
    max-width: 912px;
    margin: 0 auto;
}

.vehicles-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    justify-items: center;
}

@media (max-width: 1024px) {

    .vehicles-section {
        height: 327px;
        gap: 16px;
        background: #CB333B;
    }

    .vehicles-section::-webkit-scrollbar {
        display: none;
    }

    .vehicles-list {
        display: flex;
        gap: 16px;
        width: auto;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        scrollbar-width: none;
        scroll-snap-align: start;
    }

    .vehicle-head {
        width: 90%;
        text-align: left;
        margin-bottom: 0;
        margin-left: 0;
        padding-top: 0;
    }

    .vehicle-head h3 {
        font-size: 24px;
        font-style: italic;
        font-weight: 700;
        line-height: 21.6px;
        letter-spacing: -0.02em;
        text-align: left;
        color: #F2F1F0;
    }

    .vehicle-head p {
        font-family: Poppins,serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 19.24px;
        text-align: left;
        color: #F2F1F0;
    }

    .container-vehicles {
        top: 20px;
        padding-left: 5%;
    }
}
</style>
