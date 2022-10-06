<template>
    <div
        class="flex w-full justify-between font-sans font-medium mt-96 sm:mt-0"
    >
        <!-- <div class="justify-start p-14" v-show="rsvpVisible">
            <div class="rounded-lg shadow-lg bg-fuchsia-50">
                <img
                    src="../../images/save_date.jpg"
                    width="400"
                    height="400"
                    alt="Save the Date"
                />
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">
                        Потврди присуство
                    </h5>
                    <div v-for="(user, index) in data" :key="index">
                        <label
                            class="inline-flex items-center mt-3 cursor-pointer"
                        >
                            <input
                                type="checkbox"
                                :checked="user.attending"
                                class="form-checkbox h-5 w-5 text-gray-600"
                                v-model="user.attending"
                            /><span class="unselectable ml-2">{{
                                user.name
                            }}</span> </label
                        ><br />
                    </div>
                    <br />
                    <button
                        type="button"
                        @click="submitRSVP"
                        :disabled="disabledBtn"
                        class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                    >
                        Потврди
                    </button>
                </div>
            </div>
        </div> -->

        <div
            class="justify-end w-full p-4 sm:p-14 2xl:w-4/12 xl:w-5/12 md:w-7/12 sm:w-full"
        >
            <Transition name="slide-fade">
                <div
                    class="rounded-lg shadow-lg bg-fuchsia-50"
                    v-if="detailsVisible"
                >
                    <div class="p-6 pt-10">
                        <div class="">
                            <div class="">
                                <h5
                                    class="text-gray-900 text-3xl font-medium mb-2 flex justify-center"
                                >
                                    Детали
                                </h5>
                                <p class="flex justify-center py-1">
                                    Дата: 30ти Октомври, 2022
                                </p>
                                <p class="flex justify-center py-1">
                                    Прием: 18:00 - 18:30 часот
                                </p>
                                <p class="flex justify-center align-start py-1">
                                    Локација:
                                    <a
                                        target="_blank"
                                        class="inline-block px-6 py-1.5 bg-transparent text-blue-600 font-medium text-xs leading-tight rounded bg-fuchsia-100 focus:text-blue-700 focus:fuchsia-100 focus:outline-none focus:ring-0 active:bg-fuchsia-200 active:text-blue-800 transition duration-300 ease-in-out ml-2"
                                        href="https://www.google.com/maps/place/Centropalas+letna+gradina/@42.1647837,21.7508051,17z/data=!3m1!4b1!4m5!3m4!1s0x135451e75876c7ff:0xa498503cb01ca030!8m2!3d42.1647837!4d21.7529991"
                                        >Центропалас Летна Градина, Куманово</a
                                    >
                                </p>

                                <p
                                    class="flex justify-center align-start py-1 w-1/16"
                                >
                                    Сите среќни моменти се потполни кога ги
                                    споделуваш со роднини и пријатели. Затоа ве
                                    покануваме да присуствувате на нашата
                                    свадбена прослава.
                                </p>
                            </div>
                            <div>
                                <div
                                    class="flex justify-around align-start py-1"
                                >
                                    <span>Семејство Димковиќ</span>
                                    <span>Семејство Ефтимови</span>
                                </div>
                            </div>
                            <div class="flex justify-around align-start py-1">
                                <button
                                    type="button"
                                    @click="showRSVP"
                                    v-show="!rsvpVisible"
                                    class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                >
                                    Потврди присуство
                                </button>
                            </div>
                        </div>

                        <Transition name="slide-fade">
                            <div class="" v-show="rsvpVisible">
                                <div class="justify-center">
                                    <!-- <img
                    src="../../images/save_date.jpg"
                    width="400"
                    height="400"
                    alt="Save the Date"
                /> -->
                                    <div class="px-6 pt-4">
                                        <h5
                                            class="text-gray-900 text-xl font-medium mb-2 flex justify-center"
                                        >
                                            Потврди присуство
                                        </h5>
                                        <div
                                            v-for="(user, index) in data"
                                            :key="index"
                                            class="flex justify-start ml-0 sm:ml-4 md:ml-10 lg:ml-24 xl:ml-32"
                                        >
                                            <label
                                                class="inline-flex items-center mt-3 cursor-pointer"
                                            >
                                                <input
                                                    type="checkbox"
                                                    :checked="user.attending"
                                                    class="form-checkbox h-5 w-5 text-gray-600 cursor-pointer"
                                                    v-model="user.attending"
                                                /><span
                                                    class="unselectable ml-2"
                                                    >{{ user.name }}</span
                                                >
                                            </label>
                                        </div>

                                        <div class="flex justify-center mt-3">
                                            <button
                                                type="button"
                                                @click="submitRSVP"
                                                :disabled="disabledBtn"
                                                class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                            >
                                                Потврди
                                            </button>
                                            <button
                                                type="button"
                                                @click="showDetails"
                                                class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                            >
                                                Назад
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </div>
                </div>
            </Transition>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        setTimeout(() => {
            this.detailsVisible = true;
        }, 900);
    },
    props: ["users"],
    data() {
        return {
            data: this.users,
            rsvpVisible: false,
            detailsVisible: false,
            disabledBtn: false,
        };
    },
    computed: {
        rsvped() {
            this.refreshKey;

            return this.kopija.filter((x) => x.attending).length;
        },
        currUser() {
            return window.location.pathname.replace("/invitation/", "");
        },
    },
    methods: {
        showDetails() {
            this.rsvpVisible = false;
            this.detailsVisible = true;
        },
        showRSVP() {
            this.rsvpVisible = true;
        },
        submitRSVP() {
            this.disabledBtn = true;
            axios
                .post(`submit-rsvp/${this.currUser}`, { users: this.data })
                .then(({ data }) => {
                    this.disabledBtn = false;
                    this.$swal(data.message);
                })
                .catch((e) => {
                    this.disabledBtn = false;
                });
        },
        cancelAttendance() {
            this.data = this.data.map((x) => ({ ...x, attending: false }));

            axios
                .post(`submit-rsvp/${this.currUser}`, { users: this.data })
                .then(({ data }) => {});
        },
    },
};
</script>

<style scoped>
.unselectable {
    -webkit-user-select: none; /* Safari */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+/Edge */
    user-select: none; /* Standard */
}

/* we will explain what these classes do next! */
/*
  Enter and leave animations can use different
  durations and timing functions.
*/
.slide-fade-enter-active {
    transition: all 0.6s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(20px);
    opacity: 0;
}
</style>
