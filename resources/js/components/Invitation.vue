<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ALOOOO</div>

                    <div class="card-body">I'm an example component.</div>
                    <!-- component -->
                    <!-- This is an example component -->
                    <div class="flex flex-col">
                        <div>
                            <button
                                type="button"
                                class="bg-blue-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                Notifications
                                <span
                                    class="bg-white p-1 rounded text-blue-600 text-xs ml-2"
                                    >4</span
                                >
                            </button>
                        </div>
                        <div class="mt-8 flex">
                            <button
                                type="button"
                                class="mr-2 bg-blue-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>
                            <button
                                type="button"
                                class="mr-2 bg-red-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="mr-2 bg-orange-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="mr-2 bg-green-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="bg-white text-black p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>
                        </div>

                        <div class="mt-8 flex">
                            <button
                                type="button"
                                class="rounded-full px-4 mr-2 bg-blue-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>
                            <button
                                type="button"
                                class="rounded-full px-4 mr-2 bg-red-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="rounded-full px-4 mr-2 bg-orange-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="rounded-full px-4 mr-2 bg-green-600 text-white p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>

                            <button
                                type="button"
                                class="rounded-full px-4 bg-white text-black p-2 rounded leading-none flex items-center"
                            >
                                New
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
