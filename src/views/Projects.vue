<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Our Projects"
          subtitle="We are actively researching and deploying projects that solve real cybersecurity challenges"
        />
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            v-for="project in projects"
            :key="project.title"
            class="bg-secondary/50 border border-gray-800 rounded-xl overflow-hidden hover:border-primary/50 transition-all duration-300 group"
          >
            <div
              class="h-48 bg-linear-to-br from-primary/20 to-accent/20 flex items-center justify-center"
            >
              <component
                :is="project.icon"
                class="w-16 h-16 text-primary/50 group-hover:text-primary transition-colors"
              />
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <span
                  class="px-2 py-1 text-xs font-medium rounded-full"
                  :class="statusClasses[project.status]"
                >
                  {{ project.status }}
                </span>
              </div>
              <h3 class="text-xl font-semibold text-white mb-3">{{ project.title }}</h3>
              <p class="text-gray-400 text-sm leading-relaxed">{{ project.description }}</p>
            </div>
          </div>

          <!-- Coming Soon Card -->
          <div
            class="bg-secondary/30 border border-dashed border-gray-700 rounded-xl p-6 flex flex-col items-center justify-center min-h-87.5"
          >
            <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mb-4">
              <svg
                class="w-8 h-8 text-gray-500"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-500 mb-2">More Projects</h3>
            <p class="text-gray-600 text-sm text-center">Coming soon...</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { h, type Component } from 'vue'
import SectionTitle from '@/components/SectionTitle.vue'

interface Project {
  title: string
  description: string
  status: 'Active' | 'In Development' | 'Research'
  icon: Component
}

const statusClasses: Record<string, string> = {
  Active: 'bg-green-500/20 text-green-400',
  'In Development': 'bg-yellow-500/20 text-yellow-400',
  Research: 'bg-blue-500/20 text-blue-400',
}

const ChartIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-16 h-16', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        }),
      ],
    )
  },
}

const ShieldIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-16 h-16', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        }),
      ],
    )
  },
}

const GameIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-16 h-16', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z',
        }),
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        }),
      ],
    )
  },
}

const projects: Project[] = [
  {
    title: 'Advanced Threat Analytics Platform',
    description:
      'A real-time system that uses machine learning to correlate anomaly data and flag sophisticated threats before they cause damage.',
    status: 'Active',
    icon: ChartIcon,
  },
  {
    title: 'Autonomous Network Defence Framework',
    description:
      'A prototype that integrates adaptive controls to automatically mitigate network intrusions without human intervention.',
    status: 'In Development',
    icon: ShieldIcon,
  },
  {
    title: 'Cyber Workforce Simulation Lab',
    description:
      'An interactive environment for training defenders using gamified cyber scenarios and realistic threat models.',
    status: 'Research',
    icon: GameIcon,
  },
]
</script>
