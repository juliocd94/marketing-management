<script setup>
import {
    MDBNavbar,
    MDBNavbarToggler,
    MDBCollapse,
    MDBNavbarNav,
    MDBNavbarItem,
    MDBBtn,
    MDBNavbarBrand,
    MDBIcon,
    MDBBadge,
    MDBTable,
    MDBContainer,
    MDBDropdown,
    MDBDropdownMenu,
    MDBDropdownItem,
} from 'mdb-vue-ui-kit';
import {ref} from "vue";

const collapse7 = ref(false);
const dropdown13 = ref(false);
</script>

<template>
        <MDBNavbar
            container
            expand="lg"
            bg="light"
            class="d-flex justify-content-between sticky-navbar"
        >
            <MDBNavbarBrand>
                <MDBIcon icon="mdb" iconStyle="fab" size="2x"/>
            </MDBNavbarBrand>
            <MDBNavbarToggler
                target="#navbarColor01"
                @click="collapse7 = !collapse7"
            ></MDBNavbarToggler>
            <MDBCollapse id="navbarColor01" v-model="collapse7">
                <MDBNavbarNav class="mb-2 mb-lg-0">
                    <MDBNavbarItem href="#" active>
                        Clientes
                    </MDBNavbarItem>
                    <MDBNavbarItem href="#">
                        Boletos
                    </MDBNavbarItem>
                    <MDBNavbarItem href="#">
                        Pagos
                    </MDBNavbarItem>
                    <MDBNavbarItem href="#">
                        Notificaciones
                    </MDBNavbarItem>
                </MDBNavbarNav>
            </MDBCollapse>

            <MDBNavbarNav class="mb-2 mb-lg-0 d-flex flex-row">
                <MDBNavbarItem
                    to="#"
                    class="me-3 me-lg-0"
                >
                    <MDBIcon icon="bell"/>
                    <MDBBadge notification color="danger" pill>1</MDBBadge>
                </MDBNavbarItem>
                <MDBNavbarItem href="#" class="me-3 me-lg-0">
                    <MDBDropdown btnGroup v-model="dropdown13">
                        <MDBIcon icon="user" @click="dropdown13 = !dropdown13"/>
                        <MDBDropdownMenu class="dropdown-right-align">
                            <MDBDropdownItem href="#">Editar perfil administrador</MDBDropdownItem>
                            <MDBDropdownItem href="#">Administrar usuarios</MDBDropdownItem>
                            <MDBDropdownItem href="#">Administrar roles</MDBDropdownItem>
                            <MDBDropdownItem href="#">Administrar permisos</MDBDropdownItem>
                            <MDBDropdownItem divider />
                            <MDBDropdownItem href="/force-logout">Cerrar sesión</MDBDropdownItem>
                        </MDBDropdownMenu>
                    </MDBDropdown>
                </MDBNavbarItem>
            </MDBNavbarNav>
        </MDBNavbar>
    <div>
        <div class="container mt-2">
            <MDBContainer class="p-3 mb-2">
                <h2>Clientes</h2>
            </MDBContainer>
            <MDBTable class="align-middle mb-0 bg-white">
                <thead class="bg-light">
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Status</th>
                    <th>Boleto (s)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="images/profile.png" alt="" style="width: 45px; height: 45px"
                                 class="rounded-circle"/>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Julio Duque</p>
                                <p class="text-muted mb-0">+58 4247265818</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Las Mesas</p>
                        <p class="text-muted mb-0">Táchira / Venezuela</p>
                    </td>
                    <td>
                        <MDBBadge badge="success" pill class="d-inline">Boleto cancelado</MDBBadge>
                    </td>
                    <td>
                        <span class="dice-style">357</span>
                    </td>
                    <td>
                        <MDBBtn color="link" size="sm" rounded class="fw-bold" :ripple="{ color: 'dark' }">
                            Editar
                        </MDBBtn>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="images/profile.png" class="rounded-circle" alt=""
                                 style="width: 45px; height: 45px"/>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Fulano de tal</p>
                                <p class="text-muted mb-0">+58 4247265818</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Huston</p>
                        <p class="text-muted mb-0">Texas / Usa</p>
                    </td>
                    <td>
                        <MDBBadge badge="primary" pill class="d-inline">Al día</MDBBadge>
                    </td>
                    <td>
                        <span class="dice-style">478</span>
                        <span class="dice-style">568</span>
                        <span class="dice-style">078</span>
                        <span class="dice-style">956</span>
                        <span class="dice-style">223</span>
                    </td>
                    <td>
                        <MDBBtn color="link" size="sm" rounded class="fw-bold" :ripple="{ color: 'dark' }">
                            Editar
                        </MDBBtn>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="images/profile.png" class="rounded-circle" alt=""
                                 style="width: 45px; height: 45px"/>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">María Daniela Rosales</p>
                                <p class="text-muted mb-0">+58 4247265818</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Las Tapias</p>
                        <p class="text-muted mb-0">Merida / Venezuela</p>
                    </td>
                    <td>
                        <MDBBadge badge="warning" pill class="d-inline">Pago retrasado</MDBBadge>
                    </td>
                    <td>
                        <span class="dice-style">472</span>
                    </td>
                    <td>
                        <MDBBtn color="link" size="sm" rounded class="fw-bold" :ripple="{ color: 'dark' }">
                            Editar
                        </MDBBtn>
                    </td>
                </tr>
                </tbody>
            </MDBTable>

        </div>
    </div>
</template>


<style scoped>
.dropdown-right-align {
    right: 0;
    left: auto;
    transform: translateX(-10px);
}

.dice-style {
    width: 22px;
    height: 22px;
    background-color: #696868;
    color: white;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
    vertical-align: middle;
    border-radius: 10px;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
    padding: 4px;
    margin: 3px;
}

.sticky-navbar {
    position: sticky;
    top: 0;
    z-index: 1000;
}

@media (max-width: 768px) {
}
</style>
