<template>
  <div class="text-center mb-12">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 text-balance">
      {{ title }}
    </h2>
    <p v-if="subtitle" class="text-gray-400 max-w-2xl mx-auto text-pretty">
      {{ subtitle }}
    </p>
    <div class="mt-6 flex justify-center">
      <div class="w-24 h-1 bg-primary rounded-full"></div>
    </div>
  </div>
</template>

<script setup lang="ts">
interface Props {
  title: string
  subtitle?: string
}

defineProps<Props>()
</script>
