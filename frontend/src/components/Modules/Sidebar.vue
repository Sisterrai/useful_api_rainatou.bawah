<template>
    <div>
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <p class="titre">Activated modules</p>
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium"> 
                    <li>
                        <Module
                            v-for="module in modules"
                            :key="module.id"
                            :module="module"
                            />
                    </li>
                </ul>
            </div>
        </aside>
    </div>

</template>

<script setup>
import { onMounted, computed } from 'vue'
import { useRouter } from 'vue-router'
import Module from './Module.vue'
import { useModuleStore } from '@/stores/moduleStore'

const moduleStore = useModuleStore()
const router = useRouter()

const modules = computed(() => moduleStore.modules)

onMounted(async () => {
  await moduleStore.fetchModules()
  console.log('Modules:', modules.value)
})
</script>

<style>
.titre {
    margin-top: 50px;
    text-align: center;
    font-weight: 900;
}

</style>