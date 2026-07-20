<div class="w-full bg-slate-950 px-4 py-10 font-sans text-slate-200">
  <div class="mx-auto max-w-3xl overflow-hidden rounded-3xl border border-slate-700 bg-slate-900 shadow-2xl shadow-cyan-950/30">
    <div class="bg-linear-to-r from-cyan-500 via-teal-500 to-emerald-500 px-8 py-8 text-white">
      <p class="text-xs font-semibold uppercase tracking-[0.3em] text-cyan-50/80">Smart Cyber Defence Research Hub</p>
      <h1 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">New Contact Message</h1>
      <p class="mt-3 max-w-2xl text-sm text-cyan-50/90">A visitor submitted a message through the contact form. The details below capture the sender and the message content.</p>
    </div>

    <div class="px-8 py-8">
      <div class="grid gap-4 sm:grid-cols-3">
        <div class="rounded-2xl border border-slate-700 bg-slate-950/70 p-4">
          <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-300">Name</p>
          <p class="mt-2 wrap-break-words text-base font-medium text-white">{{ $contact['name'] }}</p>
        </div>

        <div class="rounded-2xl border border-slate-700 bg-slate-950/70 p-4">
          <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-300">Email</p>
          <p class="mt-2 wrap-break-words text-base font-medium text-white">
            <a href="mailto:{{ $contact['email'] }}" class="text-cyan-300 transition-colors hover:text-cyan-200">{{ $contact['email'] }}</a>
          </p>
        </div>

        <div class="rounded-2xl border border-slate-700 bg-slate-950/70 p-4 sm:col-span-1">
          <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-300">Subject</p>
          <p class="mt-2 wrap-break-words text-base font-medium text-white">{{ $contact['subject'] }}</p>
        </div>
      </div>

      <div class="mt-6 rounded-3xl border border-slate-700 bg-slate-950/80 p-6">
        <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-cyan-400/30 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-cyan-300">
          Message
        </div>
        <p class="whitespace-pre-wrap text-sm leading-7 text-slate-200">{{ $contact['message'] }}</p>
      </div>
    </div>

    <div class="border-t border-slate-700 px-8 py-5 text-xs text-slate-400">
      This message was sent through the Smart Cyber Defence Research Hub contact form.
    </div>
  </div>
</div>