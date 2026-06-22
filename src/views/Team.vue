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
              class="w-28 h-28 rounded-full mx-auto mb-4 overflow-hidden border-2 border-primary/30 shadow-lg shadow-primary/10"
            >
              <img
                :src="teamHead.profSodiya.image"
                :alt="teamHead.profSodiya.name"
                class="h-full w-full object-cover"
              />
            </div>
            <h4 class="text-xl font-semibold text-white mb-2">
              {{ teamHead.profSodiya.name }}
            </h4>
            <p class="text-primary text-sm mb-3">{{ teamHead.profSodiya.role }}</p>
            <p class="text-gray-300 text-sm leading-relaxed mb-3">
              {{ teamHead.profSodiya.department }}
            </p>
            <p class="text-gray-400 text-sm leading-relaxed">
              {{ teamHead.profSodiya.summary }}
            </p>
          </div>
        </div>

        <!-- Team Members -->
        <h3 class="text-2xl font-bold text-white mb-8 text-center">Research Team</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            v-for="member in teamMembers"
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
            <p class="text-gray-300 text-sm leading-relaxed mb-2">{{ member.department }}</p>
            <p class="text-gray-400 text-sm leading-relaxed">{{ member.description }}</p>
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
  department: string
  description: string
  image: string
}

import profSodiyaImage from '@/assets/images/Professor Sodiya.png'
import drAdejimiImage from '@/assets/images/Dr Adejimi.png'
import drAkintundeImage from '@/assets/images/Dr Akintunde.png'
import drFalanaImage from '@/assets/images/Dr Falana.jpg'
import drAborisadeImage from '@/assets/images/Dr Aborisade.png'

const teamHead = {
  profSodiya: {
    name: 'Prof. Adesina S. Sodiya',
    role: 'Principal Investigator',
    department: 'Department of Cybersecurity, Federal University of Agriculture, Abeokuta',
    summary:
      'Principal Investigator leading the research vision and strategic direction of the project.',
    image: profSodiyaImage,
  },
}

const teamMembers: TeamMember[] = [
  {
    name: 'Dr. Alaba O. Adejimi',
    role: 'Project Coordinator',
    department: 'Department of Computer Science, Federal University of Agriculture, Abeokuta',
    description:
      'Coordinates project activities and supports the technical direction of the research.',
    image: drAdejimiImage,
  },
  {
    name: 'Dr. Abosede A. Akintunde',
    role: 'Project Coordinator',
    department: 'Department of Statistics, Federal University of Agriculture, Abeokuta, Nigeria',
    description: 'Supports data-driven analysis and research coordination for the project.',
    image: drAkintundeImage,
  },
  {
    name: 'Dr. James O. Falana',
    role: 'Team Member',
    department: 'Department of Cybersecurity, Federal University of Agriculture, Abeokuta',
    description:
      'Contributes to the project through cybersecurity research and implementation support.',
    image: drFalanaImage,
  },
  {
    name: 'Dr. Dada O. Aborisade',
    role: 'Team Member',
    department: 'Department of Cybersecurity, Federal University of Agriculture, Abeokuta',
    description:
      'Supports research development and project execution across the cybersecurity workstream.',
    image: drAborisadeImage,
  },
]
</script>
