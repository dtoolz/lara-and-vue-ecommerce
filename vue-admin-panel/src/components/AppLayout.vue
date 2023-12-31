<template>
    <div class="min-h-full flex bg-gray-100">
          <!--the sidebar-->
          <Sidebar :class="{'-ml-[200px]': !sidebarOpened}"/>

          <div class="flex-1">
            <Navbar @toggle-sidebar="toggleSidebar"/>
            <main class="p-6">
               <router-view></router-view>
            </main>
          </div>
          
    </div>
</template>
    
<script setup>
    import {ref, onMounted, onUnmounted, } from 'vue';
    import Sidebar from "./Sidebar.vue";
    import Navbar from "./Navbar.vue";
    import store from '../store';

    const sidebarOpened = ref(true);

    function toggleSidebar(){
        sidebarOpened.value = !sidebarOpened.value;
    }

    onMounted(()=>{
      store.dispatch('getUser');
      handleOpenedSidebar();
      window.addEventListener('resize', handleOpenedSidebar);
    });

    onUnmounted(()=>{
       window.removeEventListener('resize', handleOpenedSidebar);
    });

    function handleOpenedSidebar(){
        if(window.outerWidth <= 768) {
          sidebarOpened.value = false;
        } else {
          sidebarOpened.value = true;
        }
    }
</script>

<style scoped>
    
</style>