# 🌐 Personal Portfolio Website

<div align="center">

![Portfolio Banner](https://img.shields.io/badge/Portfolio-Muhammad%20Abdullah%20Khan-4f8ef7?style=for-the-badge&logo=google-chrome&logoColor=white)
![Status](https://img.shields.io/badge/Status-Live-34d399?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-a78bfa?style=for-the-badge)

**A modern, dark-themed personal portfolio showcasing skills in Cyber Security, AI, and Frontend Development.**

[View Live](#) · [Report Bug](https://github.com/Abdullahkhan-tec/portfolio/issues) · [Connect on LinkedIn](https://www.linkedin.com/in/muhammad-abdullah-khan-6a12a637a/)

</div>

---

## 📸 Preview

| Home | Projects | Skills |
|------|----------|--------|
| Hero section with animated code card | Featured project cards with live images | Skill bars with specialisation breakdown |

---

## ✨ Features

- **Dark, Minimal UI** — Deep dark background (`#08090a`) with cyan/violet accent gradient system
- **Smooth Scroll Animations** — IntersectionObserver-powered `.reveal` entrance animations
- **Responsive Design** — Fully mobile-optimised with collapsible nav at `< 900px`
- **Multi-page Architecture** — Separate pages for Home, Skills, and Projects
- **Contact Form** — PHP-based email handler (`send_email.php`) with success state UI
- **Live Project Thumbnails** — Real project images with `object-fit: cover` consistency
- **Avatar Display** — Circular profile photo with glow border and hover zoom
- **Accessible Navigation** — Fixed top nav with active page highlighting and CTA button

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 |
| Styling | CSS3 (Custom Properties, Grid, Flexbox) |
| Scripting | Vanilla JavaScript (ES6+) |
| Backend (Email) | PHP (`mail()`) |
| Fonts | Google Fonts — Cormorant Garamond + Outfit |
| Deployment | GitHub Pages / cPanel |

---

## 📁 Project Structure

```
portfolio/
├── index.html          # Home page — Hero, About, Contact
├── skills.html         # Skills & expertise page
├── projects.html       # Featured projects showcase
├── style.css           # Global stylesheet (CSS variables, all components)
├── script.js           # Scroll reveal animations + form handler
├── send_email.php      # Server-side contact form email processor
│
└── assets/
    ├── abdullah_jpg.jpeg                              # Profile photo
    ├── a94a23160307447_63b27b4bb6f94.jpg             # MyFitness App screenshot
    ├── OIP.jpeg                                       # Hybrid Cipher project image
    └── original-3f4d585b52e9607505ef1e02c1a5a251.jpg # Game Store project image
```

---

## 🚀 Getting Started

### Local Development (Static)

```bash
# 1. Clone the repository
git clone https://github.com/Abdullahkhan-tec/portfolio.git

# 2. Open in your browser
cd portfolio
open index.html
```

> **Note:** The contact form requires a PHP server to function. For local testing, use XAMPP, WAMP, or MAMP.

### Local Development (With PHP)

```bash
# Using PHP's built-in server
php -S localhost:8000

# Then navigate to:
# http://localhost:8000
```

### Deploying to cPanel Hosting

1. Upload all files to your `public_html` directory via File Manager or FTP
2. The contact form (`send_email.php`) will work automatically on live hosting
3. Update the `$recipient` email in `send_email.php` if needed

---

## 📬 Contact Form Setup

The form in `index.html` posts to `send_email.php`. To configure:

```php
// send_email.php — Line 11
$recipient = "your-email@example.com";  // ← Change to your email
```

> On **localhost (XAMPP)**, the `@mail()` call is suppressed silently. It will function correctly once deployed to live cPanel hosting with a configured mail server.

---

## 🎨 Design System

| Variable | Value | Usage |
|----------|-------|-------|
| `--bg` | `#08090a` | Page background |
| `--card` | `#13151a` | Card surfaces |
| `--accent` | `#4f8ef7` | Primary blue |
| `--accent2` | `#a78bfa` | Secondary violet |
| `--text` | `#e8eaf0` | Primary text |
| `--muted` | `#7a7f8e` | Secondary text |

**Typography:**
- Display / Headings → `Cormorant Garamond` (Serif)
- Body / UI → `Outfit` (Sans-serif)

---

## 📂 Featured Projects

### 1. 🏋️ MyFitness App
> Java · Kotlin · Mobile App

A user-centric fitness tracking application focused on clean UI, intuitive navigation, and responsive layout.

🔗 [GitHub Repository](https://github.com/Abdullahkhan-tec/MyFitnessApp-Project)

---

### 2. 🔐 Hybrid Cipher Encryption
> Python · Cyber Security · Cryptography

A hybrid encryption system combining **AES** and **Blowfish** algorithms with a Brute-Force attack simulation for comparative analysis.

🔗 [GitHub Repository](https://github.com/Abdullahkhan-tec/Hybrid-Cipher-Encryption-Technique-with-AES-Blowfish-and-Brute-Force-Attack)

---

### 3. 🎮 Game Store
> C# · Console-Based Application

A fully functional console-based game store application featuring product listings and interactive menu components.

🔗 [GitHub Repository](https://github.com/Abdullahkhan-tec/Game-Store)

---

## 🙋‍♂️ About the Developer

**Muhammad Abdullah Khan**
BSCS Student | Islamabad, Pakistan

Passionate about building secure, intelligent, and user-centric applications at the intersection of **Cyber Security**, **Artificial Intelligence**, and **Frontend Development**.

- 📧 [muhammadabdullahkhan213@gmail.com](mailto:muhammadabdullahkhan213@gmail.com)
- 💼 [LinkedIn](https://www.linkedin.com/in/muhammad-abdullah-khan-6a12a637a/)
- 🐙 [GitHub](https://github.com/Abdullahkhan-tec)

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

<div align="center">
  <sub>Built with 💙 by Muhammad Abdullah Khan · Islamabad, Pakistan</sub>
</div>
