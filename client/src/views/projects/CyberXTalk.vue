<template>
  <div class="pt-24 pb-20">
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
          <SectionTitle
            title="A Smart Multilingual Cyber Attack Incidents Reporting and Management System"
            subtitle="A smart multilingual cyber attack incident reporting and mitigation system for Nigeria"
          />

          <router-link
            to="/projects"
            class="inline-flex items-center gap-2 text-sm font-medium text-primary hover:text-white transition-colors"
          >
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 19l-7-7 7-7"
              />
            </svg>
            Back to projects
          </router-link>
        </div>
      </div>
    </section>

    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        <div class="grid gap-8 lg:grid-cols-[1.3fr_0.7fr]">
          <article
            class="rounded-2xl border border-gray-800 bg-secondary/50 p-8 sm:p-10 shadow-2xl shadow-black/20"
          >
            <img
              src="@/assets/images/CyberXTalk.png"
              alt="CyberXTalk artwork"
              class="w-full rounded-md mb-6"
            />
            <div class="flex flex-wrap items-center gap-3 mb-6">
              <span
                class="rounded-full bg-green-500/20 px-3 py-1 text-xs font-medium text-green-400"
                >Featured Research</span
              >
              <span class="rounded-full bg-blue-500/20 px-3 py-1 text-xs font-medium text-blue-400"
                >Cybersecurity</span
              >
              <span class="rounded-full bg-primary/20 px-3 py-1 text-xs font-medium text-primary"
                >Nigeria</span
              >
            </div>

            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">Introduction</h2>
            <p class="text-gray-300 leading-relaxed mb-4">
              The adoption of technology in virtually all sectors of life has brought numerous
              benefits, yet concurrently exposed internet users to diverse cyber threats within
              cyberspace. Cybercriminals view the internet as a key medium for performing various
              cybercrime-related activities. The social, economic, and security impacts of the
              phenomenon are enormous. Organisations are increasingly becoming victims of cybercrime
              and are therefore investing in effective means of preventing and managing cyber
              threats and cybercrimes.
            </p>
            <p class="text-gray-300 leading-relaxed mb-6">
              This research focuses on developing A Smart Multilingual Cyber Attack Incidents
              Reporting and Management System. The system can help prevent cyber attacks on
              government agencies, critical infrastructure, and private organizations in Nigeria.
              The multilingual system will improve communication and collaboration among
              stakeholders in the cybersecurity ecosystem and promote awareness and understanding of
              cybersecurity threats among diverse communities, leading to better prevention and
              response to cyber threats and making cyberspace safer and more secure for all.
            </p>

            <div class="rounded-xl border border-primary/20 bg-dark/50 p-5 sm:p-6">
              <p class="text-sm uppercase tracking-[0.2em] text-primary mb-3">Research focus</p>
              <p class="text-gray-300 leading-relaxed">
                Developing a smart multilingual cyber attack incidents reporting and management
                system that can help prevent cyber attacks on government agencies, critical
                infrastructure, and private organizations in Nigeria.
              </p>
            </div>
          </article>

          <aside class="space-y-6">
            <div
              class="rounded-2xl border border-gray-800 bg-linear-to-br from-primary/15 via-secondary/50 to-accent/15 p-6 sm:p-8"
            >
              <h3 class="text-xl font-semibold text-white mb-3">Why it matters</h3>
              <p class="text-gray-300 leading-relaxed">
                The multilingual system improves communication and collaboration among stakeholders
                in the cybersecurity ecosystem and promotes awareness across diverse communities.
              </p>
            </div>

            <div class="rounded-2xl border border-gray-800 bg-secondary/50 p-6 sm:p-8">
              <h3 class="text-xl font-semibold text-white mb-4">Policy relevance</h3>
              <ul class="space-y-3 text-gray-300">
                <li class="flex gap-3">
                  <span class="mt-2 h-2 w-2 rounded-full bg-primary"></span>
                  Supports the Federal Government of Nigeria Cybercrimes Act of 2024.
                </li>
                <li class="flex gap-3">
                  <span class="mt-2 h-2 w-2 rounded-full bg-primary"></span>
                  Aligns with the National Cybersecurity Policy and Strategy (NCPS) of 2021.
                </li>
                <li class="flex gap-3">
                  <span class="mt-2 h-2 w-2 rounded-full bg-primary"></span>
                  Reinforces ngCERT-style coordination for reporting and mitigation.
                </li>
              </ul>
            </div>
          </aside>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
          <section class="rounded-2xl border border-gray-800 bg-secondary/50 p-8 sm:p-10">
            <h3 class="text-2xl font-semibold text-white mb-4">Introduction</h3>
            <p class="text-gray-300 leading-relaxed mb-4">
              The adoption of technology in virtually all sectors of life has brought numerous
              benefits, yet concurrently exposed internet users to diverse cyber threats within
              cyberspace. Cybercriminals view the internet as a key medium for performing various
              cybercrime-related activities.
            </p>
            <p class="text-gray-300 leading-relaxed">
              The social, economic, and security impacts of the phenomenon are enormous.
              Organisations are increasingly becoming endangered species and victims of cybercrime,
              thus heavily investing and looking for effective means of preventing and managing
              cyber threats and cybercrimes.
            </p>
          </section>

          <section class="rounded-2xl border border-gray-800 bg-secondary/50 p-8 sm:p-10">
            <h3 class="text-2xl font-semibold text-white mb-4">Project direction</h3>
            <p class="text-gray-300 leading-relaxed mb-4">
              This research focuses on developing a smart multilingual cyber attack incidents
              reporting and management system. The system can help prevent cyber attacks on
              government agencies, critical infrastructure, and private organizations in Nigeria.
            </p>
            <p class="text-gray-300 leading-relaxed">
              It is designed to improve communication, encourage faster response, and make
              cyberspace safer and more secure for all.
            </p>
          </section>
        </div>

        <section class="rounded-2xl border border-gray-800 bg-secondary/50 p-8 sm:p-10">
          <h3 class="text-2xl font-semibold text-white mb-4">Project Team</h3>
          <p class="text-gray-400 mb-8 max-w-3xl">Meet the people driving CyberXTalk forward.</p>

          <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-5">
            <article
              v-for="member in projectTeam"
              :key="member.name"
              class="rounded-xl border border-gray-800 bg-dark/40 p-5 text-center transition-all duration-300 hover:border-primary/50"
            >
              <div
                class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden border border-primary/20 bg-secondary/40"
              >
                <img :src="member.image" :alt="member.name" class="h-full w-full object-cover" />
              </div>
              <h4 class="text-lg font-semibold text-white mb-2">{{ member.name }}</h4>
              <p class="text-primary text-sm font-medium mb-2">{{ member.role }}</p>
              <p class="text-gray-300 text-sm leading-relaxed mb-2">{{ member.department }}</p>
              <p class="text-gray-400 text-sm leading-relaxed">{{ member.description }}</p>
            </article>
          </div>
        </section>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'

interface ProjectTeamMember {
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

const projectTeam: ProjectTeamMember[] = [
  {
    name: 'Prof. Adesina S. Sodiya',
    role: 'Principal Investigator',
    department: 'Department of Cybersecurity, Federal University of Agriculture, Abeokuta',
    description:
      'Principal Investigator leading the research vision and strategic direction of the project.',
    image: profSodiyaImage,
  },
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
