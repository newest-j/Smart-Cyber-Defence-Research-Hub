<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Contact Us"
          subtitle="Get in touch with the Smart Cyber Defence Research Hub"
        />
      </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Contact Info -->
          <div>
            <h3 class="text-2xl font-bold text-white mb-6">Get Involved</h3>
            <p class="text-gray-300 mb-8">
              Whether you are a researcher seeking collaboration, a student interested in
              opportunities, or an organization looking to partner with us — you're welcome to join
              our mission.
            </p>

            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-primary"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-white mb-1">Email</h4>
                  <p class="text-gray-400">info@smartcyberhub.org</p>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div
                  class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center shrink-0"
                >
                  <svg
                    class="w-6 h-6 text-primary"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-white mb-1">Location</h4>
                  <p class="text-gray-400">Research Hub Location</p>
                </div>
              </div>
            </div>

            <!-- Who Should Contact -->
            <div class="mt-10">
              <h4 class="text-lg font-semibold text-white mb-4">Who Should Get In Touch?</h4>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 text-gray-300">
                  <svg
                    class="w-5 h-5 text-primary"
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
                  Researchers seeking collaboration
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg
                    class="w-5 h-5 text-primary"
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
                  Students interested in opportunities
                </li>
                <li class="flex items-center gap-3 text-gray-300">
                  <svg
                    class="w-5 h-5 text-primary"
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
                  Organizations looking to partner
                </li>
              </ul>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="bg-secondary/50 border border-gray-800 rounded-xl p-8">
            <h3 class="text-2xl font-bold text-white mb-6">Send Us a Message</h3>
            <form class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                <input
                  type="text"
                  id="name"
                  class="w-full px-4 py-3 bg-dark border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary transition-colors"
                  placeholder="Your name"
                />
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2"
                  >Email</label
                >
                <input
                  type="email"
                  id="email"
                  class="w-full px-4 py-3 bg-dark border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary transition-colors"
                  placeholder="your@email.com"
                />
              </div>
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-300 mb-2"
                  >Subject</label
                >
                <select
                  id="subject"
                  class="w-full px-4 py-3 bg-dark border border-gray-700 rounded-lg text-white focus:outline-none focus:border-primary transition-colors"
                >
                  <option value="">Select a subject</option>
                  <option value="collaboration">Research Collaboration</option>
                  <option value="opportunity">Student Opportunity</option>
                  <option value="partnership">Partnership Inquiry</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-300 mb-2"
                  >Message</label
                >
                <textarea
                  id="message"
                  rows="5"
                  class="w-full px-4 py-3 bg-dark border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary transition-colors resize-none"
                  placeholder="Your message..."
                ></textarea>
              </div>
              <button
                type="submit"
                class="w-full px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200"
              >
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'
</script>
