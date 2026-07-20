<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="About Us"
          subtitle="Learn more about the Smart Cyber Defence Research Hub and our mission"
        />
      </div>
    </section>

    <!-- Who We Are -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-3xl font-bold text-white mb-6">Who We Are</h2>
            <p class="text-gray-300 mb-6 leading-relaxed">
              The Smart Cyber Defence Research Hub is an interdisciplinary research community
              focused on addressing pressing cybersecurity challenges through research, innovation,
              and collaboration.
            </p>
            <p class="text-gray-300 leading-relaxed">
              Our hub spans expertise in artificial intelligence for cyber defence, threat
              intelligence, network security, and human-centric cyber safety.
            </p>
          </div>
          <div class="flex justify-center">
            <img src="/logo.jpeg" alt="SCDRH Logo" class="w-64 h-auto" />
          </div>
        </div>
      </div>
    </section>

    <!-- Our Mission -->
    <section class="py-16 bg-secondary/30">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white mb-12 text-center">Our Mission</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div
            v-for="(mission, index) in missions"
            :key="index"
            class="flex items-start gap-4 bg-dark/50 border border-gray-800 rounded-xl p-6"
          >
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center shrink-0">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 13l4 4L19 7"
                />
              </svg>
            </div>
            <p class="text-gray-300">{{ mission }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Values -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white mb-12 text-center">Our Values</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div v-for="value in values" :key="value.title" class="text-center">
            <div
              class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4"
            >
              <component :is="value.icon" class="w-8 h-8 text-primary" />
            </div>
            <h3 class="text-xl font-semibold text-white mb-3">{{ value.title }}</h3>
            <p class="text-gray-400">{{ value.description }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { h, type Component } from 'vue'
import SectionTitle from '@/components/SectionTitle.vue'

interface Value {
  title: string
  description: string
  icon: Component
}

const missions: string[] = [
  'Advance cyber threat detection and response through research-led innovation.',
  'Build smart defensive systems that adapt to emerging threats.',
  'Foster collaboration between academia, industry, and government stakeholders.',
  'Educate the next generation of cyber defence professionals.',
]

const InnovationIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-8 h-8', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
        }),
      ],
    )
  },
}

const CollaborationIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-8 h-8', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        }),
      ],
    )
  },
}

const IntegrityIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-8 h-8', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
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

const values: Value[] = [
  {
    title: 'Innovation',
    description:
      'Pushing boundaries in cybersecurity research and developing cutting-edge solutions.',
    icon: InnovationIcon,
  },
  {
    title: 'Collaboration',
    description:
      'Working together with academia, industry, and government to achieve common goals.',
    icon: CollaborationIcon,
  },
  {
    title: 'Integrity',
    description: 'Maintaining the highest ethical standards in all our research and partnerships.',
    icon: IntegrityIcon,
  },
]
</script>
