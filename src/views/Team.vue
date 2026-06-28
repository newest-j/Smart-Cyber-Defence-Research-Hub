<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle title="Meet the Team" subtitle="Meet the people driving the hub forward" />
      </div>
    </section>

    <!-- Team -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl font-bold text-white mb-8 text-center">Leadership</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
          <div
            v-for="member in hubTeam"
            :key="member.name"
            class="bg-secondary/50 border border-gray-800 rounded-xl p-6 text-center hover:border-primary/50 transition-all duration-300 group"
          >
            <div
              class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden border border-primary/20 bg-dark/40"
            >
              <img
                :src="member.image"
                :alt="member.name"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
              />
            </div>
            <h4 class="text-lg font-semibold text-white mb-2">{{ member.name }}</h4>
            <p class="text-primary text-sm font-medium mb-2">{{ member.role }}</p>
            <p class="text-gray-300 text-sm leading-relaxed">
              Federal University of Agriculture, Abeokuta
            </p>
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
import SectionTitle from '@/components/SectionTitle.vue'

interface TeamMember {
  name: string
  role: string
  image: string
}

import profSodiyaImage from '@/assets/images/Professor Sodiya.png'
import profOnashogaImage from '@/assets/images/Prof Onashoga.jpg'
import drAdejimiImage from '@/assets/images/Dr Adejimi.png'
import drFalanaImage from '@/assets/images/Dr Falana.jpg'
import drAborisadeImage from '@/assets/images/Dr Aborisade.png'

const hubTeam: TeamMember[] = [
  {
    name: 'Prof. Adesina S. Sodiya',
    role: 'Research Director/Scientific Leader',
    image: profSodiyaImage,
  },
  {
    name: 'Prof. Saidat A. Onashoga',
    role: 'Deputy Research Director',
    image: profOnashogaImage,
  },
  {
    name: 'Dr. Alaba O. Adejimi',
    role: 'Hub Manager',
    image: drAdejimiImage,
  },
  {
    name: 'Dr. James O. Falana',
    role: 'Member',
    image: drFalanaImage,
  },
  {
    name: 'Dr. Dada O. Aborisade',
    role: 'Member',
    image: drAborisadeImage,
  },
]
</script>
