<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Our Team"
          subtitle="Our hub is powered by a diverse and multidisciplinary team of cybersecurity researchers, data scientists, engineers, and policy experts"
        />
      </div>
    </section>

    <!-- Team Grid -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Leadership -->
        <h3 class="text-2xl font-bold text-white mb-8 text-center">Leadership</h3>
        <div class="flex justify-center mb-16">
          <div
            class="bg-secondary/50 border border-gray-800 rounded-xl p-8 text-center max-w-sm hover:border-primary/50 transition-all duration-300"
          >
            <div
              class="w-24 h-24 bg-primary/10 rounded-full mx-auto mb-4 flex items-center justify-center"
            >
              <svg
                class="w-12 h-12 text-primary"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                />
              </svg>
            </div>
            <h4 class="text-xl font-semibold text-white mb-2">Lead Researcher / Director</h4>
            <p class="text-primary text-sm mb-3">Director</p>
            <p class="text-gray-400 text-sm">
              Leading the vision and strategic direction of the Smart Cyber Defence Research Hub.
            </p>
          </div>
        </div>

        <!-- Team Members -->
        <h3 class="text-2xl font-bold text-white mb-8 text-center">Research Team</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            v-for="member in teamMembers"
            :key="member.role"
            class="bg-secondary/50 border border-gray-800 rounded-xl p-6 text-center hover:border-primary/50 transition-all duration-300"
          >
            <div
              class="w-20 h-20 bg-primary/10 rounded-full mx-auto mb-4 flex items-center justify-center"
            >
              <component :is="member.icon" class="w-10 h-10 text-primary" />
            </div>
            <h4 class="text-lg font-semibold text-white mb-2">{{ member.role }}</h4>
            <p class="text-gray-400 text-sm">{{ member.description }}</p>
          </div>
        </div>

        <!-- Join the Team CTA -->
        <div class="mt-16 text-center">
          <div
            class="bg-linear-to-r from-primary/10 via-secondary to-accent/10 rounded-xl p-8 border border-gray-800"
          >
            <h3 class="text-2xl font-bold text-white mb-4">Join Our Team</h3>
            <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
              We're always looking for talented researchers, engineers, and professionals passionate
              about cybersecurity.
            </p>
            <router-link
              to="/contact"
              class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200"
            >
              Get in Touch
            </router-link>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { h, type Component } from 'vue'
import SectionTitle from '@/components/SectionTitle.vue'

interface TeamMember {
  role: string
  description: string
  icon: Component
}

const BrainIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-10 h-10', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
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

const NetworkIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-10 h-10', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2',
        }),
      ],
    )
  },
}

const ScaleIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-10 h-10', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3',
        }),
      ],
    )
  },
}

const AcademicIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-10 h-10', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', { d: 'M12 14l9-5-9-5-9 5 9 5z' }),
        h('path', {
          d: 'M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z',
        }),
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222',
        }),
      ],
    )
  },
}

const teamMembers: TeamMember[] = [
  {
    role: 'AI & Machine Learning Experts',
    description: 'Developing intelligent systems for threat detection and automated response.',
    icon: BrainIcon,
  },
  {
    role: 'Network Security Engineers',
    description: 'Building secure and resilient network architectures.',
    icon: NetworkIcon,
  },
  {
    role: 'Cyber Policy and Ethics Advisors',
    description: 'Guiding ethical frameworks and regulatory compliance.',
    icon: ScaleIcon,
  },
  {
    role: 'PhD Researchers and Graduate Fellows',
    description: 'Conducting cutting-edge research in cybersecurity.',
    icon: AcademicIcon,
  },
]
</script>
