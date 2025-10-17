
<template>
  <div>
    <Module
      v-for="module in modules"
      :key="module.id"
      :module="module"
    />
  </div>
</template>

<script setup>
import { onMounted, computed } from 'vue'
import { useRouter } from 'vue-router'
import Module from './Module.vue'
import { useModuleStore } from '@/stores/moduleStore'

const moduleStore = useModuleStore()
const router = useRouter()

// Automatically use the store's state
const modules = computed(() => moduleStore.modules)

onMounted(async () => {
  await moduleStore.fetchModules()
  console.log('Modules:', modules.value)
})
</script>
