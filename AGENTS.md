# `lyre/school` Agent Guide

## Package Purpose
`lyre/school` provides educational assessment/task domain models and APIs (assessments, tasks, attempts, answers).

## What Belongs In This Package
- School domain models/repositories/controllers/resources.
- Assessment-specific routes (`publish`, `submit`) and related workflows.
- School Filament resources/plugin.

## What Does Not Belong Here
- Generic taxonomy engine internals (`lyre/facet`) beyond normal usage.
- Cross-domain CMS/page composition logic.

## Public API / Stable Contracts
- Route surfaces in `src/routes/api.php` for assessment/task entities and action endpoints.
- Model/repository/resource interfaces used by host applications.

## Internal Areas That May Change
- Internal assessment logic internals preserving API route and response behavior.

## Usage Rules
- Use this package for education task/assessment workflows.
- Use facet integration via package composition rather than duplicating taxonomy structures.

## Extension Rules
- Add new education domain behavior inside this package.
- Preserve action endpoint semantics (`publish`, `submit`) unless intentional and documented.

## Testing Requirements
- Validate CRUD and action routes for assessments/attempts/tasks.
- Validate score/attempt state transitions in integration flows.

## Docs To Update When This Package Changes
- Root [AGENTS.md](/Users/chegekigathi/Projects/packages/lyre-packages/AGENTS.md)
- [docs/package-responsibilities.md](/Users/chegekigathi/Projects/packages/lyre-packages/docs/package-responsibilities.md)
- Add/update `packages/school/README.md` if public behavior changes
