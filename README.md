<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# ConnectU

ConnectU is a values-based community web app that helps people:

1) **Study & Academic Growth** — find study partners/groups by university, course, unit, and availability  
2) **Faith & Spiritual Growth** — join Bible discussions, mentorship, and faith-based community  
3) **Projects & Career Growth** — find teammates, build projects, and discover jobs/referrals  

> We will NOT launch everything at once. We will build and ship one module fully before moving to the next.

---

## Why ConnectU Exists
Many students and young professionals want:
- accountability for studying
- safe community to grow closer to God
- people to build meaningful projects with
- career opportunities through collaboration and referrals

ConnectU focuses on *real matching* plus *strong moderation* to keep the platform clean and aligned with Christian values.

---

## Core Product Principles

### 1) Module-based design (“tabs”)
A user has **one account**, and can add multiple modules over time (like tabs):
- Study Finder
- Faith (Bible Discussions)
- Projects
- Jobs
- Dating (last — only after safety is proven)

Users can add a module using a **“+ Add Module”** button on their profile. Each module has its own fields and listing details.

### 2) Safety first
ConnectU does not allow content that goes against Christian values, including:
- nudity/porn/sexually explicit content
- profanity/dirty language
- harassment, hate speech, threats, bullying
- scams/fraud/impersonation
- illegal activity

We enforce this using:
- profanity filtering (text)
- reporting + moderation queue
- warnings → suspensions → bans
- rate limits to reduce spam
- (later) image scanning for nudity

### 3) Build in phases (no “big bang” launch)
We ship small, working features:
- build **Study Finder** fully
- then build **Faith** fully
- then Projects/Jobs
- then Premium payments
- Dating is always last

---

## Tech Stack
- **Backend:** PHP (Laravel)
- **Database:** MySQL (XAMPP) or PostgreSQL
- **Auth:** Email/Password + Google Sign-In (Laravel Socialite)
- **Payments (phased):** PayPal → M-Pesa (Daraja) → Bank/Card gateway
- **Frontend:** Blade + Tailwind (or Bootstrap later)

---

## MVP Roadmap

### Phase 0 — Setup
- Laravel setup
- Auth (email/password)
- Base profile
- Module system skeleton (study + faith enabled by default)

### Phase 1 — Study Finder (MVP 1)
- onboarding: choose Study Finder
- create/edit listing (uni, course, unit, availability)
- browse + filters
- request to connect
- basic chat
- report + admin review queue

### Phase 2 — Faith (MVP 2)
- create Bible discussion groups
- topics + schedule
- moderated group chat
- report + moderation controls

### Phase 3 — Projects & Career (MVP 3)
- project/team listings
- skills/roles matching
- basic job/referral posts

### Phase 4 — Premium subscriptions
- daily/weekly/monthly/yearly plans
- boosts + advanced filters + higher limits
- PayPal + M-Pesa

### Phase 5 — Dating (last)
Only after moderation is proven and verification is in place.

---

## Local Setup

```bash
git clone https://github.com/OtingaMark/ConnectU.git
cd ConnectU
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
# ConnectU

ConnectU is a values-based community web app that helps people:

1) **Study & Academic Growth** — find study partners/groups by university, course, unit, and availability  
2) **Faith & Spiritual Growth** — join Bible discussions, mentorship, and faith-based community  
3) **Projects & Career Growth** — find teammates, build projects, and discover jobs/referrals  

> We will NOT launch everything at once. We will build and ship one module fully before moving to the next.

---

## Why ConnectU Exists
Many students and young professionals want:
- accountability for studying
- safe community to grow closer to God
- people to build meaningful projects with
- career opportunities through collaboration and referrals

ConnectU focuses on *real matching* plus *strong moderation* to keep the platform clean and aligned with Christian values.

---

## Core Product Principles

### 1) Module-based design (“tabs”)
A user has **one account**, and can add multiple modules over time (like tabs):
- Study Finder
- Faith (Bible Discussions)
- Projects
- Jobs
- Dating (last — only after safety is proven)

Users can add a module using a **“+ Add Module”** button on their profile. Each module has its own fields and listing details.

### 2) Safety first
ConnectU does not allow content that goes against Christian values, including:
- nudity/porn/sexually explicit content
- profanity/dirty language
- harassment, hate speech, threats, bullying
- scams/fraud/impersonation
- illegal activity

We enforce this using:
- profanity filtering (text)
- reporting + moderation queue
- warnings → suspensions → bans
- rate limits to reduce spam
- (later) image scanning for nudity

### 3) Build in phases (no “big bang” launch)
We ship small, working features:
- build **Study Finder** fully
- then build **Faith** fully
- then Projects/Jobs
- then Premium payments
- Dating is always last

---

## Tech Stack
- **Backend:** PHP (Laravel)
- **Database:** MySQL (XAMPP) or PostgreSQL
- **Auth:** Email/Password + Google Sign-In (Laravel Socialite)
- **Payments (phased):** PayPal → M-Pesa (Daraja) → Bank/Card gateway
- **Frontend:** Blade + Tailwind (or Bootstrap later)

---

## MVP Roadmap

### Phase 0 — Setup
- Laravel setup
- Auth (email/password)
- Base profile
- Module system skeleton (study + faith enabled by default)

### Phase 1 — Study Finder (MVP 1)
- onboarding: choose Study Finder
- create/edit listing (uni, course, unit, availability)
- browse + filters
- request to connect
- basic chat
- report + admin review queue

### Phase 2 — Faith (MVP 2)
- create Bible discussion groups
- topics + schedule
- moderated group chat
- report + moderation controls

### Phase 3 — Projects & Career (MVP 3)
- project/team listings
- skills/roles matching
- basic job/referral posts

### Phase 4 — Premium subscriptions
- daily/weekly/monthly/yearly plans
- boosts + advanced filters + higher limits
- PayPal + M-Pesa

### Phase 5 — Dating (last)
Only after moderation is proven and verification is in place.

---

## Local Setup

```bash
git clone https://github.com/OtingaMark/ConnectU.git
cd ConnectU
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
