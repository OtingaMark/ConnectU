# ConnectU Daily Build Plan (Customer-First)

This plan helps us ship ConnectU step-by-step without launching everything at once.
We will build one module fully, test it, then move to the next.

## Product Promise (What customers want)
People come to ConnectU to:
1) Find reliable study partners (same uni/course/unit, same schedule, serious people)
2) Grow in faith safely (Bible groups, mentorship, respectful discussions)
3) Build projects & careers (teams, roles, skills, referrals/jobs) — later

They also want:
- Safety: no nudity, no dirty language, no scams
- Trust: real people, verification, reporting, moderation
- Simplicity: easy onboarding, fast search, clear matches
- Value: free works, premium boosts

---

## Rules for how we build
- Every day ends with: ✅ working feature + ✅ git commit + ✅ short notes
- Always include: validation + basic security + moderation hook (report / filter)
- Dating is locked until moderation is proven and verification exists.

---

# Week 1: Foundation + Onboarding + Module Tabs

## Day 1 — Product structure + UI skeleton
Customer problem:
- “I don’t know what this app is for, and I don’t know where to start.”

Deliverables:
- README final (faith in top 3, phased roadmap)
- Docs structure: `docs/`
- Layout: navbar, auth links, dashboard shell

Acceptance criteria:
- App loads, login/register works
- After login, user sees a dashboard page

Commit message:
- `Add docs structure and dashboard shell`

---

## Day 2 — Profiles + Module system (tabs backbone)
Customer problem:
- “I want to use the app for study AND faith (and later projects), without separate accounts.”

Deliverables:
- Profile table + model
- Modules + UserModules tables
- Seed modules (study + faith default, dating locked)
- Auto-create profile + default modules on registration

Acceptance criteria:
- New user registers → profile created automatically
- New user registers → has Study + Faith modules active
- DB contains 5 modules

Commit message:
- `Add profiles and module system (study & faith default)`

---

## Day 3 — Onboarding: “What are you looking for?”
Customer problem:
- “I want the app to match me to my goal (study/faith).”

Deliverables:
- Onboarding page after first login:
  - Choose modules (Study, Faith, Projects optional)
  - Save module choices
- “+ Add Module” button (adds another module later)
- “Tabs” UI that shows enabled modules

Acceptance criteria:
- User can enable/disable modules
- Tabs update based on enabled modules
- Study + Faith enabled by default still works

Commit message:
- `Add onboarding flow and module tabs`

---

# Week 2: Study Finder MVP (end-to-end)

## Day 4 — Study Listing: create/edit
Customer problem:
- “I want to post what I’m studying so the right people find me.”

Deliverables:
- Study listing table (basic):
  - university, course, unit, year, availability, mode, location, goals
- Create/Edit forms
- Validation rules

Acceptance criteria:
- User can create and edit a study listing
- Invalid data is rejected (required fields)

Commit message:
- `Add study listing create/edit`

---

## Day 5 — Browse + filters (the real value)
Customer problem:
- “I need to find someone in my unit/course quickly.”

Deliverables:
- Browse study listings page
- Filters:
  - university, course, unit, mode (online/physical)
- Sorting:
  - newest first

Acceptance criteria:
- Listings show
- Filters work and return correct results

Commit message:
- `Add study listings browse and filters`

---

## Day 6 — Connect requests (safe matching)
Customer problem:
- “I want to connect without exposing myself to spam or weird people.”

Deliverables:
- Connection request system:
  - request, accept, decline
  - limit requests/day for free users (basic limit)
- Notifications (simple: dashboard alerts)

Acceptance criteria:
- User A requests User B
- User B can accept/decline
- Accepted users become “connections”

Commit message:
- `Add connection requests and limits`

---

## Day 7 — Messaging (basic but safe)
Customer problem:
- “After matching, I need to chat and plan.”

Deliverables:
- Chat between connected users
- Profanity filter (minimum) on messages
- Report button in chat

Acceptance criteria:
- Only connected users can message each other
- Profanity gets blocked or replaced
- Reports are recorded

Commit message:
- `Add messaging with basic moderation`

---

# Week 3: Faith MVP (end-to-end)

## Day 8 — Faith groups: create + list
Customer problem:
- “I want a Bible discussion group that matches my schedule and topic.”

Deliverables:
- Faith groups:
  - title, topic, description, schedule, location/online link
- List & browse groups

Acceptance criteria:
- User can create a faith group
- Users can browse and filter by topic

Commit message:
- `Add faith groups create and browse`

---

## Day 9 — Join groups + group chat moderation
Customer problem:
- “I want safe discussions without insults or dirty talk.”

Deliverables:
- Join/leave group
- Group chat
- Profanity filter + report
- Admin moderation queue view (minimum)

Acceptance criteria:
- Only members chat in group
- Reports appear in admin moderation list

Commit message:
- `Add faith group membership and moderated chat`

---

# Week 4: Safety, Premium Planning, and Hardening

## Day 10 — Moderation dashboard (must-have)
Customer problem:
- “The app must stay clean and safe.”

Deliverables:
- Admin role + admin panel
- Reports table + status workflow:
  - pending → reviewed → action taken
- Actions:
  - warn user, suspend user, ban user

Acceptance criteria:
- Admin can see reports and take action
- Suspended/banned users cannot post/message

Commit message:
- `Add moderation dashboard and enforcement`

---

## Day 11 — Premium subscriptions design (no payments yet)
Customer problem:
- “Free is okay, but premium should clearly add value.”

Deliverables:
- Plans table (daily/weekly/monthly/yearly)
- Feature gates:
  - request limits
  - boost availability
- UI: pricing page

Acceptance criteria:
- Pricing page loads
- App checks plan limits before allowing actions

Commit message:
- `Add plans and premium feature gates`

---

## Day 12–14 — Payments integration (PayPal then M-Pesa)
Deliverables:
- Payment provider structure (drivers)
- PayPal first
- M-Pesa after PayPal works

Acceptance criteria:
- Successful payment updates subscription status
- Subscription expiry works

Commit message:
- `Add payments and subscriptions`

---

# Customer Validation Checklist (We revisit weekly)
Study Finder:
- Can a student find a match in under 60 seconds?
- Are filters accurate?
- Is chat safe and clean?

Faith:
- Are groups easy to find?
- Are discussions moderated?
- Do users feel safe?

Trust/Safety:
- Is reporting easy?
- Are bans enforced?
- Does profanity filtering work?

Premium:
- Does premium feel worth it?
- Are free users still able to succeed?

---

# Daily routine (how we work)
Every day we do:
1) Decide user story for the day (1–2 max)
2) Implement backend + UI + validation
3) Add moderation hook (even basic)
4) Commit + push
5) Write notes in `docs/DAILY_LOG.md`
