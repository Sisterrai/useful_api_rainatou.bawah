<template>
  <div class="">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm ">
        <p>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ module.name }}</h5>
        </p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ module.description }}</p>
        <div class="flex flex-row gap-2">
            <router-link :to="`/responsecommentsection/${module.id}`" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg ">
                Activate
            </router-link>
            <router-link :to="`/responsecommentsection/${comment?.id}`" class="ml-5 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg ">
              Desactivate
            </router-link>
        </div>
        
    </div>
  </div>
</template>

<script setup>
import { useModuleStore } from '@/stores/moduleStore'

const props = defineProps({
  module: Object,
  required: true
})

</script>
