<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="News & Events"
          subtitle="Stay updated with the latest happenings at Smart Cyber Defence (SCD)"
        />
      </div>
    </section>

    <!-- News & Events -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
          <article class="rounded-2xl border border-gray-800 bg-secondary/50 overflow-hidden">
            <header class="bg-linear-to-br from-primary/10 to-transparent p-6 sm:p-10">
              <div class="flex flex-wrap items-center gap-3 text-sm mb-5">
                <span class="rounded-full bg-primary/10 px-3 py-1 font-medium text-primary">
                  Research Collaboration
                </span>
                <time datetime="2026-08-26" class="text-gray-400">26 August 2026</time>
              </div>
              <h2 class="text-2xl sm:text-4xl font-bold text-white leading-tight mb-5">
                SCD and NITDA Hold Inaugural Engagement Towards CyberXtalk Research Collaboration
              </h2>
              <p class="text-lg text-gray-300 leading-relaxed">
                A step towards advancing intelligent, multilingual cyberattack reporting and
                cybersecurity preparedness in Nigeria.
              </p>
            </header>
            <div class="p-6 sm:p-10 text-gray-300 leading-relaxed">
              <p>
                The Smart Cyber Defence (SCD) Research &amp; Innovation Hub of the Federal
                University of Agriculture, Abeokuta (FUNAAB), held an inaugural engagement with the
                National Information Technology Development Agency (NITDA) on 26 August 2026 to
                explore research collaboration on CyberXtalk, an intelligent multilingual system for
                reporting and managing cyberattack incidents.
              </p>
              <details class="mt-6 group">
                <summary
                  class="cursor-pointer text-primary font-semibold rounded focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"
                >
                  Read full article
                </summary>
                <div class="mt-8 space-y-8">
                  <section v-for="section in articleSections" :key="section.title">
                    <h3 class="text-xl font-semibold text-white mb-3">{{ section.title }}</h3>
                    <p v-for="paragraph in section.paragraphs" :key="paragraph" class="mb-4">
                      {{ paragraph }}
                    </p>
                    <ul v-if="section.items" class="list-disc pl-6 space-y-3">
                      <li v-for="item in section.items" :key="item">{{ item }}</li>
                    </ul>
                  </section>
                  <section>
                    <h3 class="text-xl font-semibold text-white mb-4">Participants</h3>
                    <div class="grid gap-6 sm:grid-cols-2">
                      <div v-for="group in participants" :key="group.organisation">
                        <h4 class="font-semibold text-white mb-3">{{ group.organisation }}</h4>
                        <ul class="list-disc pl-6 space-y-2">
                          <li v-for="name in group.names" :key="name">{{ name }}</li>
                        </ul>
                      </div>
                    </div>
                  </section>
                </div>
              </details>
              <router-link
                to="/projects/cyberxtalk"
                class="inline-flex mt-8 font-semibold text-primary hover:underline"
              >
                Explore the CyberXtalk project &rarr;
              </router-link>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'

const articleSections = [
  {
    title: 'From a Formal Request to Institutional Engagement',
    paragraphs: [
      'The meeting followed a formal request for research collaboration submitted by the SCD Research & Innovation Hub to the Director-General of NITDA. The request focused on CyberXtalk, an ongoing research initiative designed to improve cyberattack reporting, incident management, response coordination, analysis, and prediction.',
      'During the engagement, the SCD team presented the project’s vision and discussed the importance of developing cybersecurity solutions that address real-world operational challenges. The discussion emphasised aligning the research methodology and system development with practical cybersecurity needs to ensure useful, scalable, and impactful solutions.',
    ],
  },
  {
    title: 'About CyberXtalk',
    paragraphs: [
      'CyberXtalk is an intelligence-driven cybersecurity initiative designed to strengthen how cyberattack incidents are reported, managed, analysed, and predicted. Its three major machine-learning-based components aim to make cyberattack reporting and management more accessible:',
    ],
    items: [
      'Multilingual cyberattack incident reporting: A platform intended to help individuals and organisations submit information about cyberattack incidents across language barriers.',
      'Incident management and response coordination: A component designed to support the management of submitted reports and coordination of appropriate responses.',
      'Predictive analytics: A component intended to support early warning, threat analysis, and improved cybersecurity preparedness.',
    ],
  },
  {
    title: 'Exploring Areas of Collaboration and Support',
    paragraphs: [
      'A major focus of the meeting was identifying potential areas of support for CyberXtalk. Technical collaboration and expertise were highlighted as opportunities for cooperation between NITDA and the SCD research team.',
      'The possibility of financial support was also discussed, subject to further consideration and appropriate institutional approval. The engagement helped clarify expectations and identify where institutional collaboration could contribute to the project’s development.',
    ],
  },
  {
    title: 'Strengthening Technical and Institutional Linkages',
    paragraphs: [
      'The engagement recognised the need for designated NITDA representatives to participate in the project as technical and institutional points of contact. These representatives would contribute expertise in cyberattack management and facilitate communication and coordination between the teams, helping keep the research direction and technical activities relevant to practical cybersecurity challenges.',
    ],
  },
  {
    title: 'Next Steps Towards Formalising the Collaboration',
    paragraphs: [
      'The immediate next step is for the SCD team to prepare recommendations for its management based on the engagement. Subject to the necessary approvals, both teams would work towards defining the modalities of collaboration, identifying appropriate focal persons, refining research and technical activities, and scheduling subsequent engagements.',
      'These steps are intended to provide a clearer framework for cooperation and establish a foundation for the project’s continued development.',
    ],
  },
  {
    title: 'Advancing Nigeria’s Cybersecurity Research and Innovation',
    paragraphs: [
      'The inaugural engagement represents an important first step towards establishing a research collaboration around CyberXtalk. It reflects the value of connecting academic research with institutional expertise to develop cybersecurity solutions that respond to emerging digital threats.',
      'Through the proposed collaboration, CyberXtalk seeks to advance intelligent cyberattack reporting, incident management, response coordination, and predictive analytics, contributing to Nigeria’s cyber resilience.',
      'The Smart Cyber Defence Research & Innovation Hub, FUNAAB, looks forward to building on this initial engagement and exploring opportunities to work with NITDA towards practical and innovative cybersecurity solutions.',
    ],
  },
]

const participants = [
  {
    organisation: 'Smart Cyber Defence Research & Innovation Hub, FUNAAB',
    names: [
      'Prof. A. S. Sodiya — Principal Investigator',
      'Dr. A. Akintunde',
      'Mr. E. O. Oluwumi',
      'Mr. M. Ajibola',
      'Mr. A. O. Ajibike',
    ],
  },
  {
    organisation: 'National Information Technology Development Agency (NITDA)',
    names: ['Mr. M. N. Atanda', 'Mr. S. Abdulkarim'],
  },
]
</script>
