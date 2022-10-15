<template>
    <div
        class="flex w-full justify-between font-sans font-medium mt-96 sm:mt-0"
    >
        <div
            class="justify-end w-full p-4 sm:p-14 2xl:w-4/12 xl:w-5/12 md:w-7/12 sm:w-full"
        >
            <Transition name="slide-fade">
                <div
                    class="rounded-lg shadow-lg bg-rose-50"
                    v-if="detailsVisible"
                >
                    <div class="p-6 pt-10">
                        <div class="">
                            <div class="">
                                <div class="relative flex py-3 items-center">
                                    <div
                                        class="flex-grow border-t border-gray-400"
                                    ></div>
                                    <span
                                        class="flex items-center flex-col md:flex-row  justify-items-center mx-4 text-gray-900 text-3xl" style="font-family:'lovelygrace';font-size:350%;color:#4b024b"
                                        ><div class="md:mr-2">Дијана</div><div class="md:mr-2"> и </div><div>Виктор</div></span
                                    >
                                    <div
                                        class="flex-grow border-t border-gray-400"
                                    ></div>
                                </div>
                                <p class="flex justify-center py-1">
                                    30 октомври 2022 | недела
                                </p>
                                <p
                                    class="sm:flex justify-center align-start py-1"
                                >
                                    <a
                                        target="_blank"
                                        class="flex justify-center align-center inline-block px-6 py-2 bg-transparent text-blue-600 font-medium leading-tight rounded bg-fuchsia-200 focus:text-red-700 focus:fuchsia-200 focus:outline-none focus:ring-0 active:bg-fuchsia-300 active:text-blue-800 transition duration-300 ease-in-out ml-2 text-base"
                                        href="https://www.google.com/maps/place/Centropalas+letna+gradina/@42.1647837,21.7508051,17z/data=!3m1!4b1!4m5!3m4!1s0x135451e75876c7ff:0xa498503cb01ca030!8m2!3d42.1647837!4d21.7529991"
                                        ><img
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Google_Maps_icon_%282020%29.svg/16px-Google_Maps_icon_%282020%29.svg.png"
                                            class="mr-2"
                                            alt="Локација"
                                        /><span class="pt-1"
                                            >Центропалас Летна Градина,
                                            Куманово</span
                                        ></a
                                    >
                                </p>
                                <p class="flex justify-center py-1">
                                    Прием на гости од 18:00 до 18:30
                                </p>
                                <hr
                                    class="mt-4 h-px bg-gray-300 border-0 dark:bg-gray-700"
                                />
                                <p
                                    class="flex justify-center align-start py-1 w-1/16 text-center"
                                >
                                    Сите среќни моменти се комплетни кога ги
                                    споделуваш со роднини и пријатели, па затоа ве
                                    покануваме заедно да ја прославиме љубовта.
                                </p>
                                <p
                                    class="flex justify-center align-start py-1 pb-3 w-1/16 text-center" style="font-size:14px"
                                >
                                    P.S. Наместо цвеќе, донесете грепка. 😊
                                </p>
                            </div>
                            <div>
                                <!-- <div
                                    class="flex justify-around align-start py-1"
                                >
                                    <span  style="font-family:'palai';font-weight:550">Семејство</span><br>
                                    <span  style="font-family:'palai';font-weight:550">Димковиќ</span>
                                    <span  style="font-family:'palai'">Семејство</span>
                                    <span  style="font-family:'palai'">Ефтимови</span>
                                </div> -->
                                <div
                                    class="flex justify-around align-start py-1">
                                <div
                                    style=""
                                >
                                    <span  style="font-family:'palai';font-weight:550">Семејство </span><br>
                                    <span style="font-family:'palai';font-weight:550">Димковиќ</span>
                                </div>
                                <div
                                    style=""
                                >
                                    <span  style="font-family:'palai'">Семејство </span>
                                    <br>
                                    <span style="font-family:'palai';font-weight:550">Ефтимови</span>
                                </div>
                                </div>
                            </div>
                            <!-- <div class="flex justify-around align-start py-1">
                                <button
                                    type="button"
                                    @click="showRSVP"
                                    v-show="!rsvpVisible"
                                    class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                >
                                    Потврди присуство
                                </button>
                            </div> -->
                        </div>
                        <!-- <hr
                            class="mt-4 h-px bg-gray-300 border-0 dark:bg-gray-700"
                        /> -->
                        <Transition name="slide-fade">
                            <div class="">
                                <div class="justify-center">
                                    <div class="">
                                        <!-- <h5
                                            class="text-gray-900 text-xl font-medium mb-2 flex justify-center"
                                        >
                                            Потврди присуство
                                        </h5> -->
                                        <div
                                            class="relative flex py-3 items-center"
                                        >
                                            <div
                                                class="flex-grow border-t border-gray-400"
                                            ></div>
                                            <span
                                                class="flex-shrink mx-4 text-gray-900 text-2xl" style="color:#4b024b"
                                                >Потврди присуство</span
                                            >
                                            <div
                                                class="flex-grow border-t border-gray-400"
                                            ></div>
                                        </div>
                                        
                                        <div
                                            v-for="(user, index) in data"
                                            :key="index"
                                            class="flex justify-start ml-10 sm:ml-4 md:ml-10 lg:ml-32 xl:ml-32"
                                        >
                                        
                                            <label
                                                class="inline-flex items-center mt-3 cursor-pointer "
                                            >
                                                <input
                                                    type="checkbox"
                                                    :checked="user.attending"
                                                    class="form-checkbox accent-purple-800 h-5 w-5 text-red-600 cursor-pointer "
                                                    v-model="user.attending"
                                                /><span
                                                    class="unselectable ml-2 "
                                                    >{{ user.name }}</span
                                                >
                                            </label>
                                        </div>

                                        <div class="flex justify-center mt-3">
                                            <!-- <button
                                                type="button"
                                                @click="showDetails"
                                                class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                            >
                                                Назад
                                            </button> -->
                                            <button
                                                type="button"
                                                @click="submitRSVP"
                                                :disabled="disabledBtn"
                                                class="inline-block px-6 py-2.5 bg-purple-800 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out text-white disabled:opacity-50 mr-3"
                                            >
                                                Потврди
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
        this.detailsVisible = true;
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
