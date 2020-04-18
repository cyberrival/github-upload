<template>
  <nav class="bg-white shadow mb-2">
    <div class="max-w-6xl mx-auto px-2 sm:px-4 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex px-2 lg:px-0">
          <div class="flex-shrink-0 flex items-center">
            <a href="/">
              <img :src="logo" alt class="hidden lg:block h-8 w-auto" />
              <img :src="icon" alt class="block lg:hidden h-8 w-auto" />
            </a>
          </div>
          <div class="hidden lg:ml-6 lg:flex">
            <a
              href="#"
              class="inline-flex items-center px-1 border-b-2 text-sm font-medium leading-5 border-transparent hover:border-blue-500"
            >Login</a>
            <a
              href="#"
              class="inline-flex ml-6 items-center px-1 border-b-2 text-sm font-medium leading-5 border-transparent hover:border-blue-500"
            >Services</a>
            <div class="relative">
              <div class="ml-6 h-full flex items-center px-1 border-b-2 border-transparent">
                <button
                  @click="isOpen = !isOpen"
                  type="button"
                  class="flex text-sm font-medium leading-5 font-medium"
                >
                  Services
                  <svg class="-mr-1 ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </button>
              </div>
              <div v-if="isOpen" class="absolute right-0 mt-2 w-56 rounded-md shadow-lg">
                <div class="rounded-md bg-white shadow-xs">
                  <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700">Edit</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
