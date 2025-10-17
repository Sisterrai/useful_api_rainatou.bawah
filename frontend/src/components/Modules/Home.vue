<template>
    <Sidebar/>
    <div class="section">
        <ModuleSection/>
    </div>
    
</template>

<script setup lang="ts">
import ModuleSection from './ModuleSection.vue';
import Sidebar from './Sidebar.vue';

</script>

<style>
    .section{
        margin-left: 300px;
        margin-top: 50px;
    }
</style>