<template>
  <div>
        <p>
          {{ module.name }}
        </p>
        <p>
            {{ module.description }}        
        </p>
  </div>
</template>

<script setup>
import { useModuleStore } from '@/stores/moduleStore'

const props = defineProps({
  module: Object,
  required: true
})

</script>
