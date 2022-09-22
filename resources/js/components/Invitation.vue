<template>
    <div class="flex w-full justify-between">
        <div class="justify-start p-14">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
                <img
                    src="images/save_date.jpg"
                    width="400"
                    height="400"
                    alt="Save the Date"
                />
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">
                        Потврди присуство
                    </h5>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Виктор Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Дијана Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Тест Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Још Едн Димковиќ</span
                        >
                    </label>
                    <br />
                    <br />
                    <button
                        type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white"
                    >
                        Потврди
                    </button>
                </div>
            </div>
        </div>
        <div class="justify-end p-14">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
                <img
                    src="images/save_date.jpg"
                    width="400"
                    height="400"
                    alt="Save the Date"
                />
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">
                        Потврди присуство
                    </h5>
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Виктор Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Дијана Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Тест Димковиќ</span
                        > </label
                    ><br />
                    <label class="inline-flex items-center mt-3">
                        <input
                            type="checkbox"
                            class="form-checkbox h-5 w-5 text-gray-600"
                            checked
                        /><span class="unselectable ml-2"
                            >Још Едн Димковиќ</span
                        >
                    </label>
                    <br />
                    <br />
                    <button
                        type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out text-white"
                    >
                        Потврди
                    </button>
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

<style scoped>
.unselectable {
    -webkit-user-select: none; /* Safari */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+/Edge */
    user-select: none; /* Standard */
}
</style>
