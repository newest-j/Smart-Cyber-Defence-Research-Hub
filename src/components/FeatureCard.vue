<template>
  <div
    class="bg-secondary/50 border border-gray-800 rounded-xl p-6 hover:border-primary/50 transition-all duration-300 group"
  >
    <div
      class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors"
    >
      <component :is="icon" class="w-6 h-6 text-primary" />
    </div>
    <h3 class="text-xl font-semibold text-white mb-3">{{ title }}</h3>
    <p class="text-gray-400 text-sm leading-relaxed">{{ description }}</p>
  </div>
</template>

<script setup lang="ts">
import type { Component } from 'vue'

interface Props {
  icon: Component
  title: string
  description: string
}

defineProps<Props>()
</script>
