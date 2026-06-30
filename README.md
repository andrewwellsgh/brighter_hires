# Brighter Hires

! Please note this site is currently in need of repairs and is unavailable online. It was initially developed in 2018 and 2019, with informal updates and work being done in the following years.

**Brighter Hires** is a high-performance, full-stack job board platform engineered for seamless connectivity between employers and job seekers. Built with a focus on reliability and user experience, the platform provides a secure environment for managing job listings, user accounts, and professional recruitment workflows.

This repository represents a period of significant personal and professional transformation. Built during a time of immense challenge and instability, this project stands as a testament to persistence, technical growth, and the refusal to abandon one's objectives regardless of the circumstances.

This work is more than just code; it is the output of a commitment to professional development under extreme conditions. It serves as the foundation for my current portfolio and a record of the technical standards I uphold.

## 🚀 Core Features

*   **Intelligent Job Discovery:** Robust search functionality allows users to filter and find career opportunities that match their specific requirements.
*   **Secure User Account Management:** Comprehensive authentication flows, including secure registration, password recovery, and profile management.
*   **Integrated Payment Processing:** Reliable, secure payment handling powered by Stripe, ensuring seamless transactions for premium listings and services.
*   **Interactive Image Processing:** Users can upload and crop company logos and job-related assets directly in the browser via an integrated, user-friendly interface.
*   **Real-time Automation:** Advanced cron-job system to maintain data integrity, automated report generation, and efficient listing lifecycle management.
*   **Privacy & Compliance:** Built-in tools for managing Terms & Conditions, Privacy Policies, and automated profanity filtering to maintain platform professional standards.

## 🛠 Technical Architecture

Brighter Hires is built on a clean, scalable PHP foundation designed for maintainability:

*   **Backend:** Custom PHP implementation utilizing standard design patterns for routing, authentication, and database interaction.
*   **Dependency Management:** Powered by [Composer](https://getcomposer.org/) for secure, modular library integration.
*   **Security:** Multi-layered approach featuring IP security lockouts (Code Removed) and secure session management.
*   **Frontend:** A refined CSS architecture supporting responsive design across mobile, tablet, and desktop breakpoints.
*   **Data Handling:** Structured JSON endpoints for dynamic content loading, ensuring a snappy, app-like experience.

## 📂 Project Structure

```text
.
├── admin/              # Administrative control center
├── cron_jobs/          # Automated backend maintenance tasks
├── css/                # Responsive styles (mobile, tablet, desktop)
├── emails/             # Automated recruitment communication templates
├── img/                # Global asset repository
├── json/               # API-like endpoints for dynamic front-end updates
├── submit/             # Secure handling for form submissions & data logic
└── uploads/            # Managed user-generated content

Installation
To set up this project locally:

Clone the repository:

Bash
git clone git@github.com:andrewwellsgh/brighter_hires.git
cd brighter_hires
Install dependencies:
This project uses Composer to manage the Stripe PHP library. Run the following command in the project root to install the necessary files into the vendor/ directory:

Bash
composer install
Configure Environment:
Create a .env file in the root directory (do not commit this to Git) and add your API keys:

Plaintext
STRIPE_SECRET_KEY=sk_test_your_actual_key_here