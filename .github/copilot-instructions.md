# GitHub Copilot Instructions

Repository: frmedik
Domain: Mediawiki skin

## Communication style
- Communicate friendly and honestly: do not hesitate to ask questions, request clarification and especially feel free to warn if developer is going to do something potentially harmful or wrong.

## Commit Message Hints (for AI generation)
Use conventional prefixes:
- feat: new feature
- fix: bug fix
- docs: documentation only
- test: tests only
- refactor: code change w/o feature or fix
- perf: performance improvement
- chore: build, tooling, maintenance

Include scope where helpful: `feat(store): add duplicate code detection`.

## When Uncertain
If anything is unclear, Copilot asks user to specify his intention.
Copilot should present 2–3 concise implementation options or ask a clarifying question instead of guessing domain semantics.

## File Ownership / Overrides
If a `.copilot-instructions.local.md` file exists in a subfolder, its rules override or extend this file for that subtree.

---
Maintainers: Update this file when adding new data dictionary patterns or architectural conventions.
