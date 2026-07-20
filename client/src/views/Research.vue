<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Our Research Areas"
          subtitle="We focus on several key areas shaping the future of cyber defence"
        />
      </div>
    </section>

    <!-- Research Areas -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-12">
          <div
            v-for="(area, index) in researchAreas"
            :key="area.title"
            class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center"
            :class="{ 'lg:flex-row-reverse': index % 2 === 1 }"
          >
            <div :class="{ 'lg:order-2': index % 2 === 1 }">
              <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                  <component :is="area.icon" class="w-6 h-6 text-primary" />
                </div>
                <h3 class="text-2xl font-bold text-white">{{ area.title }}</h3>
              </div>
              <p class="text-gray-300 leading-relaxed">{{ area.description }}</p>
              <ul class="mt-4 space-y-2">
                <li
                  v-for="point in area.points"
                  :key="point"
                  class="flex items-start gap-2 text-gray-400 text-sm"
                >
                  <svg
                    class="w-5 h-5 text-primary shrink-0 mt-0.5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12l2 2 4-4"
                    />
                  </svg>
                  {{ point }}
                </li>
              </ul>
            </div>
            <div
              :class="{ 'lg:order-1': index % 2 === 1 }"
              class="bg-secondary/50 border border-gray-800 rounded-xl p-8 flex items-center justify-center min-h-62.5"
            >
              <component :is="area.icon" class="w-24 h-24 text-primary/30" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { h, type Component } from 'vue'
import SectionTitle from '@/components/SectionTitle.vue'

interface ResearchArea {
  title: string
  description: string
  icon: Component
  points: string[]
}

const BrainIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
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
      { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01',
        }),
      ],
    )
  },
}

const ShieldIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
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

const UserIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
      [
        h('path', {
          'stroke-linecap': 'round',
          'stroke-linejoin': 'round',
          'stroke-width': '2',
          d: 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
        }),
      ],
    )
  },
}

const ScaleIcon = {
  render() {
    return h(
      'svg',
      { class: 'w-6 h-6', fill: 'none', stroke: 'currentColor', viewBox: '0 0 24 24' },
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

const researchAreas: ResearchArea[] = [
  {
    title: 'AI-Driven Threat Detection & Response',
    description:
      'We develop intelligent systems that leverage machine learning and behavioural analytics to detect, predict, and respond to advanced cyber attacks.',
    icon: BrainIcon,
    points: [
      'Machine learning for anomaly detection',
      'Behavioural analytics for threat prediction',
      'Automated incident response systems',
      'Real-time threat intelligence processing',
    ],
  },
  {
    title: 'Secure Network Architectures',
    description:
      'Researching resilient infrastructure designs that minimize attack surfaces and resist exploitation.',
    icon: NetworkIcon,
    points: [
      'Zero-trust architecture implementation',
      'Network segmentation strategies',
      'Secure cloud infrastructure design',
      'Software-defined security solutions',
    ],
  },
  {
    title: 'Digital Risk & Vulnerability Assessment',
    description:
      'Creating tools and frameworks for identifying, prioritizing, and mitigating digital risks across networks and systems.',
    icon: ShieldIcon,
    points: [
      'Automated vulnerability scanning',
      'Risk quantification methodologies',
      'Penetration testing frameworks',
      'Continuous security monitoring',
    ],
  },
  {
    title: 'Human-Centered Cybersecurity',
    description:
      'Understanding how humans interact with technology to design training, tools, and interfaces that reduce risk and enhance security practices.',
    icon: UserIcon,
    points: [
      'Security awareness training programs',
      'Usable security interface design',
      'Social engineering defence strategies',
      'Security behaviour analytics',
    ],
  },
  {
    title: 'Policy, Governance & Ethics',
    description:
      'Advancing research on cybersecurity policy, ethical frameworks, and regulatory compliance for secure digital ecosystems.',
    icon: ScaleIcon,
    points: [
      'Cybersecurity regulatory compliance',
      'Ethical AI in security applications',
      'International cyber policy frameworks',
      'Privacy-preserving technologies',
    ],
  },
]
</script>
