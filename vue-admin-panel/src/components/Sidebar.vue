<template>
    <div class="w-[200px] transition-all bg-indigo-600 text-gray-300 py-4 px-2">
       <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 px-3 rounded hover:bg-gray-600">
           <span class="mr-2">
            <HomeIcon class="w-5" />
           </span>
           <span>Dashboard</span>
       </router-link>
       <router-link :to="{name: 'app.products'}" class="flex items-center p-2 px-3 rounded hover:bg-gray-600">
           <span class="mr-2">
            <UsersIcon class="w-5" />
           </span>
           <span>Products</span>
       </router-link>
       <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 px-3 rounded hover:bg-gray-600">
           <span class="mr-2">
            <ViewListIcon class="w-5" />
           </span>
           <span>Users</span>
       </router-link>
       <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 px-3 rounded hover:bg-gray-600">
           <span class="mr-2">
            <ChartBarIcon class="w-5" />
           </span>
           <span>Reports</span>
       </router-link>
    </div>
</template>
    
<script setup>
    import {HomeIcon, UsersIcon, ViewListIcon, ChartBarIcon} from '@heroicons/vue/outline';
</script>

<style scoped>
    
</style>