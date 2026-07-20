# Smart Cyber Defence Research Hub (SCDRH)

A modern, responsive website for the Smart Cyber Defence Research Hub - a research organization dedicated to advancing cybersecurity through innovation and collaboration.

## Tech Stack

- **Framework:** Vue.js 3 (Composition API)
- **Routing:** Vue Router 4
- **Styling:** Tailwind CSS 3
- **Build Tool:** Vite 5
- **Language:** JavaScript

## Project Structure

```
src/
├── assets/
│   └── main.css          # Global styles and Tailwind imports
├── components/
│   ├── FeatureCard.vue   # Reusable feature card component
│   ├── Footer.vue        # Site footer with links and contact info
│   ├── Hero.vue          # Landing page hero section
│   ├── Navbar.vue        # Navigation bar with mobile menu
│   └── SectionTitle.vue  # Reusable section title component
├── router/
│   └── index.js          # Vue Router configuration
├── views/
│   ├── Home.vue          # Home page
│   ├── About.vue         # About page with mission and values
│   ├── Research.vue      # Research areas page
│   ├── Projects.vue      # Projects showcase page
│   ├── Team.vue          # Team page with roles
│   ├── Events.vue        # News and events page
│   └── Contact.vue       # Contact form page
├── App.vue               # Root component
└── main.js               # Application entry point
```

## Pages

- **Home** - Landing page with hero section, about preview, research areas, and partners
- **About** - Organization mission, vision, and core values
- **Research** - Detailed research focus areas (AI Security, Network Security, etc.)
- **Projects** - Showcase of current and past research projects
- **Team** - Team roles and join us section
- **Events** - News, events, and newsletter subscription
- **Contact** - Contact form and organization information

## Getting Started

### Prerequisites

- Node.js 18+
- npm or yarn

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/smart-cyber-defence-hub.git
   cd smart-cyber-defence-hub
   ```

2. Install dependencies:

   ```bash
   npm install
   ```

3. Start the development server:

   ```bash
   npm run dev
   ```

4. Open your browser and visit `http://localhost:5173`

### Build for Production

```bash
npm run build
```

The built files will be in the `dist/` directory.

### Preview Production Build

```bash
npm run preview
```

## Features

- Fully responsive design for mobile, tablet, and desktop
- Dark theme with cyan/teal accent colors
- Smooth scroll navigation
- Mobile-friendly hamburger menu
- Modular component architecture
- Client-side routing with Vue Router

## Color Scheme

- **Primary:** Cyan (#06B6D4)
- **Secondary:** Slate (#1E293B)
- **Accent:** Teal (#14B8A6)
- **Dark Background:** Slate 900 (#0F172A)

## License

This project is proprietary to Smart Cyber Defence Research Hub.

## Contact

- **Email:** info@scdrh.org
- **Location:** Federal University of Agriculture Abeokuta (Funaab), Nigeria
