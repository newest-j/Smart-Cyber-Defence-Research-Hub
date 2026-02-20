<template>
  <div>
    <!-- Hero Section -->
    <Hero />

    <!-- About Preview Section -->
    <section class="py-20 bg-secondary/30">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Who We Are"
          subtitle="An interdisciplinary research community focused on addressing pressing cybersecurity challenges"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            v-for="(mission, index) in missions"
            :key="index"
            class="bg-dark/50 border border-gray-800 rounded-xl p-6 hover:border-primary/50 transition-all duration-300"
          >
            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
              <span class="text-primary font-bold">{{ index + 1 }}</span>
            </div>
            <p class="text-gray-300 text-sm">{{ mission }}</p>
          </div>
        </div>

        <div class="text-center mt-10">
          <router-link
            to="/about"
            class="inline-flex items-center text-primary hover:text-accent transition-colors"
          >
            Learn more about us
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
            </svg>
          </router-link>
        </div>
      </div>
    </section>

    <!-- Research Areas Preview -->
    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Our Research Areas"
          subtitle="Shaping the future of cyber defence through innovation and collaboration"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div
            v-for="area in researchAreas"
            :key="area.title"
            class="bg-secondary/50 border border-gray-800 rounded-xl p-6 hover:border-primary/50 transition-all duration-300 group"
          >
            <FeatureCard :icon="area.icon" :title="area.title" :description="area.description" />
            <!-- <div
              class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors"
            >
              <component :is="area.icon" class="w-6 h-6 text-primary" />
            </div> -->
            <!-- <h3 class="text-xl font-semibold text-white mb-3">{{ area.title }}</h3>
            <p class="text-gray-400 text-sm leading-relaxed">{{ area.description }}</p> -->
          </div>
        </div>

        <div class="text-center mt-10">
          <router-link
            to="/research"
            class="inline-flex items-center text-primary hover:text-accent transition-colors"
          >
            View all research areas
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
            </svg>
          </router-link>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-linear-to-r from-primary/20 via-secondary to-accent/20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Get Involved</h2>
        <p class="text-gray-300 mb-8 text-lg">
          Whether you are a researcher seeking collaboration, a student interested in opportunities,
          or an organization looking to partner with us — you're welcome to join our mission.
        </p>
        <router-link
          to="/contact"
          class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200"
        >
          Contact Us
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </router-link>
      </div>
    </section>

    <!-- Partners Section -->
    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Partners & Supporters"
          subtitle="We collaborate with academic institutions, government agencies, industry leaders, and international research organizations"
        />

        <div class="flex flex-wrap justify-center items-center gap-12">
          <div
            v-for="i in 5"
            :key="i"
            class="w-32 h-16 bg-gray-800/50 rounded-lg flex items-center justify-center text-gray-500 text-sm"
          >
            Partner {{ i }}
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { h, type Component } from 'vue'
import Hero from '@/components/Hero.vue'
import SectionTitle from '@/components/SectionTitle.vue'
import FeatureCard from '@/components/FeatureCard.vue'

interface ResearchArea {
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

// Icon components
const ShieldIcon = {
  //  h(tag, props?/ attributes, children?content
  // render tell vue what to display and the h create a virtual DOM nodes
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
          d: 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        }),
      ],
    )
  },
}

const researchAreas: ResearchArea[] = [
  {
    title: 'AI-Driven Threat Detection',
    description:
      'Intelligent systems leveraging machine learning and behavioural analytics to detect, predict, and respond to advanced cyber attacks.',
    icon: BrainIcon,
  },
  {
    title: 'Secure Network Architectures',
    description:
      'Researching resilient infrastructure designs that minimize attack surfaces and resist exploitation.',
    icon: NetworkIcon,
  },
  {
    title: 'Digital Risk Assessment',
    description:
      'Creating tools and frameworks for identifying, prioritizing, and mitigating digital risks across networks and systems.',
    icon: ShieldIcon,
  },
]
</script>
