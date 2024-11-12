<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';
import Navbar from "@/Components/Navbar/Navbar.vue";
import FooterAuth from "@/Components/FooterAuth.vue";
import {ref} from "vue";
import axios from 'axios';

axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const form = ref({
    name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    user_type: 'individual',
    registration_country: '',
    errors: {}
});

const props = defineProps({
    countries: {
        type: Array,
        required: true,
    },
});

const countriesList = ref(props.countries);
const successRegister = ref(false);
// const message = ref();
const processing = ref(false);

const submit = async () => {
    try {
        processing.value = true;
        form.value.errors = {}
        const response = await axios.post('/register', form.value);
        console.log("MENSAJE", response.data.success)

        if (response.data.success) {
            successRegister.value = true
            // processing.value = false;
        }
    } catch (error) {
        form.value.errors = error.response.data.errors
        processing.value = false;
    }
};

const isPersonal = ref(true);

const toggleAccountType = (type) => {
    isPersonal.value = type === 'personal';
    form.value.user_type = type === 'personal' ? 'individual' : 'business';
};

const checkSelected = () => {
    if (this.form.value.registration_country !== '') {
        this.$refs.select.classList.remove('default-selected');
    }
};

</script>

<template>
    <div class="container-principal">

        <Head title="Register"/>

        <Navbar :opacity="processing"/>

        <div class="container content-container">
            <div :class="{'general-container': true, 'form-processing': form.processing}">
                <div class="row justify-content-center">
                    <div :class="{'opacity-25': processing}" class="col-md-6">
                        <div class="text-center">
                            <h3 class="title-register">CREATE AN ACCOUNT</h3>
                        </div>

                        <div class="container-select">
                            <button
                                :class="isPersonal ? 'active-button' : 'inactive-button'"
                                @click="toggleAccountType('personal')"
                            >
                                Personal
                            </button>
                            <button
                                :class="!isPersonal ? 'active-button' : 'inactive-button'"
                                @click="toggleAccountType('business')"
                            >
                                Business
                            </button>
                        </div>

                        <div class="mt-4">
                            <form @submit.prevent="submit">
                                <div class="row">
                                    <div v-if="isPersonal" class="col-6">
                                        <input
                                            class="custom-input"
                                            placeholder="First name"
                                            v-model="form.name"
                                            id="name"
                                            autocomplete="name"
                                            type="text"
                                            required
                                        >
                                        <InputError v-if="form.errors.name" class="mt-1" :message="form.errors.name[0]"/>
                                    </div>

                                    <div v-else class="col-12">
                                        <input
                                            class="custom-input"
                                            placeholder="Business name"
                                            v-model="form.name"
                                            id="name"
                                            autocomplete="name"
                                            type="text"
                                            required
                                        >
                                        <InputError v-if="form.errors.name" class="mt-1" :message="form.errors.name[0]"/>
                                    </div>

                                    <div v-if="isPersonal" class="col-6">
                                        <input
                                            class="custom-input"
                                            placeholder="Last name"
                                            v-model="form.last_name"
                                            id="last_name"
                                            autocomplete="last_name"
                                            type="text"
                                            required
                                        >
                                        <InputError v-if="form.errors.last_name" class="mt-1" :message="form.errors.last_name[0]"/>
                                    </div>

                                    <div v-if="isPersonal" class="col-12">
                                        <input
                                            class="custom-input"
                                            placeholder="Email"
                                            v-model="form.email"
                                            id="email"
                                            autocomplete="username"
                                            type="email"
                                            required
                                        >
                                        <InputError v-if="form.errors.email" class="mt-1" :message="form.errors.email[0]"/>
                                    </div>

                                    <div v-else class="col-12">
                                        <input
                                            class="custom-input"
                                            placeholder="Business email"
                                            v-model="form.email"
                                            id="email"
                                            autocomplete="username"
                                            type="email"
                                            required
                                        >
                                        <InputError v-if="form.errors.email" class="mt-1" :message="form.errors.email[0]"/>
                                    </div>
                                </div>

                                <div class="container-inputs">
                                    <input
                                        class="custom-input-password"
                                        placeholder="Password"
                                        v-model="form.password"
                                        id="password"
                                        autocomplete="new-password"
                                        type="password"
                                        required
                                    >
                                    <InputError v-if="form.errors.password" class="mt-1" :message="form.errors.password[0]"/>
                                </div>

                                <div class="container-inputs">
                                    <input
                                        class="custom-input-password"
                                        placeholder="Confirm Password"
                                        v-model="form.password_confirmation"
                                        id="password_confirmation"
                                        autocomplete="new-password"
                                        type="password"
                                        required
                                    >
                                    <InputError v-if="form.errors.password" class="mt-2" :message="form.errors.password[0]"/>
                                </div>

                                <div
                                    v-if="!isPersonal"
                                    class="container-inputs"
                                >
                                    <select
                                        class="custom-select"
                                        v-model="form.registration_country"
                                        @change="checkSelected"
                                        :class="{ 'default-selected': form.registration_country === '' }"
                                    >
                                        <option value="" disabled selected hidden>Where is your business registered?</option>
                                        <option
                                            v-for="country in countriesList"
                                            :key="country.value"
                                            :value="country.value"
                                        >
                                            {{ country.value }}
                                        </option>
                                    </select>
                                </div>

                                <div class="text-end mb-2">
                                    <Link
                                        :href="route('login')"
                                        class="no-default-link"
                                    >
                                        Already registered?
                                    </Link>
                                </div>

                                <div v-if="!isPersonal" class="div-msg">
                                    <img src="images/alert.png" alt="alert">
                                    If your business isn't registered, select your country of residence.
                                </div>

                                <div class="midd-text">
                                    <p class="text-center">By selecting create personal account, you agree to aur <a
                                        href="#" class="color-link">User Agreement</a> and acknowledge reading our <a
                                        href="#" class="color-link">User Privacy Notice</a></p>
                                </div>

                                <div class="mt-4">
                                    <PrimaryButton
                                        class="button-submit"
                                        :disabled="processing"
                                        @click="submit"
                                    >
                                        {{isPersonal ? "CREATE PERSONAL ACCOUNT" : "CREATE ACCOUNT"}}
                                    </PrimaryButton>

                                    <div class="divider mt-4">
                                        <span class="divider-text">Or continue with</span>
                                    </div>

                                    <Link href="#" class="btn mt-4 session-social">
                                        CONTINUE WITH FACEBOOK
                                    </Link>

                                    <Link href="#" class="btn mt-3 session-social">
                                        CONTINUE WITH GOOGLE
                                    </Link>
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
    <div v-if="successRegister" class="alert-success">
        <img src="images/success.png" alt="success" class="success-image">
        <h6 class="text-uppercase">Account successfully created!</h6>
        <div class="mt-2">
            <p>You've successfully created your account!</p>
            <p>Please familiarize yourself with our dashboard.</p>
        </div>
        <button>
            <Link class="link-to-dashboard" :href="route('marketplace')">
                CONTINUE TO DASHBOARD
            </Link>
        </button>
    </div>
</template>

<style scoped>
.container-principal {
    background: #EEEEC8;
}

.general-container {
    background-color: #EEEEC8;
}

.title-register {
    font-family: Sharpie-Extrabold, serif;
    font-size: 48px;
    font-style: italic;
    font-weight: 700;
    line-height: 43.2px;
    letter-spacing: -0.02em;
    margin-top: 78px;
    margin-bottom: 48px;
}

.color-link {
    color: #cb333b;
}

.content-container {
    margin-top: 112px;
}

.midd-text {
    margin: 30px;
    text-align: center;
    font-family: Poppins, serif;
    font-size: 14px;
    line-height: 20.72px
}

.session-social {
    background-color: transparent;
    width: 100%;
    height: 48px;
    padding: 12px 16px 12px 16px;
    border-radius: 96px;
    border: 1px solid #cb333b;
    font-family: Poppins, serif;
    font-size: 16px;
    font-style: italic;
    font-weight: 700;
    line-height: 23.68px;
    text-align: center;
    color: #232222;
}

.session-social:hover {
    border: 1px solid #cb333b;
}

.no-default-link {
    color: #202222;
    text-decoration: none;
}

.button-submit {
    width: 100%;
    height: 48px;
    padding: 12px 16px 12px 16px;
    border: none;
    border-radius: 96px;
    background: #CB333B;
    color: #F2F1F0;
    font-style: italic;
    font-family: Poppins, serif;
    font-size: 16px;
    font-weight: 800;
    line-height: 23.68px;
    text-align: center;
}

.custom-input {
    border: 1px solid #202222;
    background-color: #F2F2D6;
    height: 54px;
    padding: 16px;
    border-radius: 64px;
    width: 100%;
    margin-top: 18px;
}

.div-msg {
    background: #F2F2D6;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 8px;
    width: 100%;
    height: 53px;
    padding: 14px;
    gap: 16px;
    border: 1px solid #232222;
    margin-top: 30px;
}

.custom-select.default-selected {
    color: #737373;
}

.custom-select {
    color: black;
    border: 1px solid #202222;
    background-color: #F2F2D6;
    height: 54px;
    padding: 16px 30px 16px 16px;
    border-radius: 64px;
    width: 100%;
    margin-top: 18px;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    position: relative;
    background-image: url("../../../../public/images/select.png");
    background-repeat: no-repeat;
    background-position: right 20px center;
    background-size: 12px;
}

.custom-input-password {
    border: 1px solid #202222;
    background-color: #F2F2D6;
    height: 56px;
    padding: 16px;
    border-radius: 64px;
    width: 100%;
    margin-top: 18px;
}

.divider {
    display: flex;
    align-items: center;
    text-align: center;
    margin: 1rem 0;
}

.divider::before, .divider::after {
    content: "";
    flex: 1;
    border-top: 1px solid #202222;
}

.divider-text {
    margin: 0 1rem;
    color: #202222;
    font-weight: bold;
}

.container-footer {
    margin-top: 70px;
}

.alert-success {
    position: fixed;
    top: 40%;
    left: 0;
    width: 100%;
    height: 100%;
    background: #F2F2D6;
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 20px;
    border-top: 1px solid #000000;
}

.alert-success h6 {
    font-family: Sharpie-Extrabold, serif;
    font-size: 24px;
    font-style: italic;
    font-weight: 700;
    line-height: 21.6px;
    text-align: center;
}

.alert-success div {
    margin-bottom: 20px;
    font-family: Poppins, serif;
    font-size: 15px;
    font-weight: 500;
    line-height: 22.2px;
    text-align: center;
}

.alert-success button {
    width: 343px;
    height: 48px;
    padding: 12px 16px 12px 16px;
    gap: 0;
    border-radius: 96px;
    justify: space-between;
    background: #CB333B;
    border: none;
}

.link-to-dashboard {
    text-decoration: none;
    font-family: Poppins, serif;
    font-size: 16px;
    font-style: italic;
    font-weight: 800;
    line-height: 23.68px;
    text-align: center;
    color: #F2F1F0;
    margin-bottom: 92px;
}

.container-select {
    border: 1px solid #202222;
    height: 37px;
    padding: 2px;
    border-radius: 64px;
}

.container-select button {
    display: inline-block;
    Height: 29px;
    font-weight: bold;
    width: 50%;
    cursor: pointer;
    padding: 4px 16px 4px 16px;
    border-radius: 40px;
}

.active-button {
    border: 1px solid #202222;
    background-color: #202222;
    color: whitesmoke;
}

.inactive-button {
    background-color: transparent;
    color: #202222;
    border: 1px solid transparent;
}

.inactive-button:hover {
    /* height: 29px; */
    border: 1px solid #202222;
}
.success-image {
    width: 178px;
    height: 178px;
    margin-bottom: 52px;
    margin-top: 25px;
}
@media (max-width: 768px) {
    .content-container {
        background: #EEEEC8;
        margin-top: 70px;
    }

    .title-register {
        font-size: 32px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .general-container {
        width: 95%;
        margin: auto;
    }

    .custom-input {
        font-size: 14px;
        margin-top: 7px;
        height: 54px;
    }

    .midd-text {
        margin: 17px;
        text-align: center;
        font-family: Poppins, serif;
        font-size: 13px;
        line-height: 19.24px
    }

    .button-submit {
        font-size: 15px;
        font-weight: 700;
        line-height: 22.2px;
        height: 46px;
    }

    .session-social {
        font-size: 15px;
        font-weight: 700;
        line-height: 22.2px;
    }

    .custom-input-password {
        font-size: 14px;
        margin-top: 7px;
        height: 54px;
    }

    .container-footer {
        margin-top: 25px;
        padding-bottom: 45px;
    }

    .div-msg {
        border-radius: 8px;
        width: 100%;
        height: 53px;
        padding: 5px;
        gap: 10px;
        border: 1px solid #232222;
        margin-top: 20px;
        font-size: 13px;
        font-weight: 400;
        line-height: 19.24px;
        text-align: center;
    }

    .div-msg img {
        width: 16px;
        height: 16px;
    }

    .custom-select {
        font-size: 14px;
        background-position: right 15px center;
    }

    .alert-success {
        position: fixed;
        top: 43%;
        left: 0;
        width: 100%;
        height: 100%;
        background: #F2F2D6;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 20px;
        border-top: 1px solid #000000;
    }

    .alert-success h6 {
        font-family: Sharpie-Extrabold, serif;
        font-size: 20px;
        font-style: italic;
        font-weight: 700;
        line-height: 18px;
        text-align: center;
    }

    .alert-success div {
        margin-bottom: 20px;
        font-family: Poppins, serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 20.72px;
        text-align: center;
    }

    .alert-success button {
        width: 95%;
        height: 38px;
        padding: 8px 10px 8px 10px;
        gap: 0;
        border-radius: 96px;
        justify: space-between;
        background: #CB333B;
        border: none;
        font-size: 14px;
        line-height: 20px;
    }
    .success-image {
        width: 138px;
        height: 138px;
        margin-bottom: 20px;
    }
}
</style>
