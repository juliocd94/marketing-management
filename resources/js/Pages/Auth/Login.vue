<script setup>
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar/Navbar.vue";
import FooterAuth from "@/Components/FooterAuth.vue";
import Checkbox from "@/Components/Checkbox.vue";

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

        <Navbar/>

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
                            <h3 class="title-login">HELLO</h3>
                            <div class="top-text">
                                <p>Sign in to Grease Monkey Swaps or...</p>
                                <Link class="top-text-link" href="/register"
                                >Create An Account
                                </Link
                                >
                            </div>
                        </div>
                        <div class="mt-4">
                            <form @submit.prevent="submit">
                                <div class="container-inputs">
                                    <input
                                        class="custom-input"
                                        autocomplete="username"
                                        placeholder="Email or username"
                                        v-model="form.email"
                                        id="email"
                                        type="email"
                                        required
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.email"
                                    />
                                </div>

                                <div class="container-inputs">
                                    <input
                                        class="custom-input"
                                        placeholder="Enter your password"
                                        v-model="form.password"
                                        id="password"
                                        autocomplete="password"
                                        type="password"
                                        required
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.password"
                                    />

                                    <div class="text-end mb-2">
                                        <Link
                                            v-if="canResetPassword"
                                            :href="route('password.request')"
                                            class="no-default-link"
                                        >
                                            Forgot Password?
                                        </Link>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <PrimaryButton
                                        class="button-submit"
                                    >
                                        LOGIN
                                    </PrimaryButton>

                                    <div class="divider">
                                        <span class="divider-text">Or</span>
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
                        <div class="midd-text">
                            <p>
                                <Checkbox />
                                Stay signed in
                            </p>
                            <p>Using a public or shared device? Uncheck to</p>
                            <p>protect your account</p>
                            <Link href="test" class="midd-text-link"
                            >Learn more
                            </Link
                            >
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
    background: #EEEEC8;
}

.general-container {
    background-color: #EEEEC8;
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
    color: #cb333b;
}

.content-container {
    margin-top: 112px;
}

.midd-text {
    margin-top: 45px;
    text-align: center;
    font-family: Poppins, serif;
    font-size: 14px;
    line-height: 20.72px;
    font-weight: 500;
}

.midd-text p {
    margin: 0;
}

.midd-text-link {
    color: #cb333b;
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
    background: #cb333b;
    color: #f2f1f0;
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

.divider {
    display: flex;
    align-items: center;
    text-align: center;
    margin: 1rem 0;
}

.divider::before,
.divider::after {
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

@media (max-width: 768px) {
    .content-container {
        background: #eeeec8;
        margin-top: 70px;
    }

    .title-login {
        font-size: 32px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .general-container {
        background-color: #EEEEC8;
        padding-left: 5%;
        padding-right: 5%;
        margin: auto;
    }

    .custom-input {
        margin-top: 7px;
        height: 54px;
    }

    .top-text {
        margin: 0;
    }

    .midd-text {
        margin-top: 28px;
        text-align: center;
        font-family: Poppins, serif;
        font-size: 13px;
        line-height: 19.24px;
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
