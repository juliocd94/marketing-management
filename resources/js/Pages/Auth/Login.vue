<script setup>
import InputError from "@/Components/InputError.vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import FooterAuth from "@/Components/FooterAuth.vue";
import { MDBInput, MDBBtn } from 'mdb-vue-ui-kit';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.processing = true;
    form.post(route("login"), {
        onFinish: () => {
            form.reset("password");
            form.processing = false;
        },
    });
};
</script>

<template>
    <div class="container-principal">

        <Head title="Log in"/>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div
            :class="{ 'opacity-25': form.processing }"
            class="vh-10 container content-container"
        >
            <div :class="{'general-container': true}">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center">
                            <h3 class="title-login">Bienvenido</h3>
                            <div class="top-text">
                                <p>Inicia sesión en el portal administrativo de RVB o...</p>
                                <Link class="top-text-link" href="/register"
                                >Cree una cuenta
                                </Link
                                >
                            </div>
                        </div>
                        <div class="mt-4">
                            <form @submit.prevent="submit">
                                <div class="container-inputs">

                                    <MDBInput
                                        label="Correo electrónico"
                                        type="email"
                                        v-model="form.email"
                                        autocomplete="username"
                                        wrapperClass="mb-4"
                                        required
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.email"
                                    />
                                </div>

                                <div class="container-inputs">
                                    <MDBInput
                                        label="Contraseña"
                                        type="password"
                                        v-model="form.password"
                                        wrapperClass="mb-4"
                                        required
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.password"
                                    />

                                    <div class="text-end mb-2">
                                        <Link
                                            v-if="canResetPassword"
                                            :href="route('password.request')"
                                            class=""
                                        >
                                            Forgot Password?
                                        </Link>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <MDBBtn type="submit" color="primary" block> Sign in </MDBBtn>
                                </div>
                            </form>
                        </div>
                        <div class="container-footer">
                            <FooterAuth/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.container-principal {
}

.general-container {
}

.title-login {
    font-family: Sharpie-Extrabold, serif;
    font-size: 48px;
    font-style: italic;
    line-height: 43.2px;
    letter-spacing: -0.02em;
    margin-top: 40px;
    margin-bottom: 15px;
}

.top-text {
    font-family: Poppins, serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20.72px;
    text-align: center;
    margin-bottom: 20px;
}

.top-text p {
    margin: 0;
}

.top-text-link {
    color: #3B71CA;
}

.content-container {
}

.no-default-link {
    color: #202222;
    text-decoration: none;
}

.container-footer {
    margin-top: 70px;
}

@media (max-width: 768px) {
    .content-container {
    }

    .title-login {
        font-size: 32px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .general-container {
        padding-left: 5%;
        padding-right: 5%;
        margin: auto;
    }

    .top-text {
        margin: 0;
    }

    .container-footer {
        margin-top: 45px;
        padding-bottom: 25px;
    }
}

.container-select button {
    display: inline-block;
    height: 29px;
    font-weight: bold;
    width: 50%;
    cursor: pointer;
    padding: 4px 16px 4px 16px;
    border-radius: 40px;
}
</style>
