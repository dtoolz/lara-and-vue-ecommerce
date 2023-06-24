<template>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-md w-full space-y-8">
        <div>
          <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Change Existing Password</h2>
          <p class="mt-2 text-center text-sm text-gray-600">
            Or
            {{ ' ' }}
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> start your 14-day free trial </a>
          </p>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST">
          <input type="hidden" name="remember" value="true" />
          <div class="rounded-md shadow-sm space-y-3">
            <div>
              <label for="new-password" class="sr-only">New Password</label>
              <input id="new-password" name="password" type="password"  required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="New Password" />
            </div>
            <div>
              <label for="confirm-password" class="sr-only">Confirm New Password</label>
              <input id="confirm-password" name="confirm_password" type="password" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm New Password" />
            </div>
          </div>
  
          <div class="flex items-center justify-between">
            <div class="text-sm">
              <router-link :to="{name: 'requestPassword'}" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your password? </router-link>
            </div>
          </div>
  
          <div>
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
              </span>
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script setup>
  import { LockClosedIcon } from '@heroicons/vue/solid'
  </script>