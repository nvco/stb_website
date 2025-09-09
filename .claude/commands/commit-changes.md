---
allowed-tools: Bash(git *:*)
description: Complete git commit workflow - stage changes, create commit, update changelog, and commit changelog
---

# Automated Git Commit Workflow

Please perform the complete git commit workflow for this Hugo website project:

## Step 1: Analyze Current Changes
First, check the current git status and show what changes will be committed:

```bash
!git status
!git diff --stat
```

## Step 2: Stage All Changes
Stage all current changes:

```bash
!git add .
```

## Step 3: Create Main Commit
Analyze the changes and create a descriptive commit message following our project standards. The commit should:

- Have a clear, descriptive title summarizing the changes
- Include bullet points for specific changes if multiple features/fixes
- End with Claude Code attribution:

```
🤖 Generated with [Claude Code](https://claude.ai/code)

Co-Authored-By: Claude <noreply@anthropic.com>
```

Create the commit using a HEREDOC format for proper formatting.

## Step 4: Update CHANGELOG.md
Add an entry to CHANGELOG.md under the "### Added" or appropriate section using this format:

```
- [`commit_hash`](https://github.com/nvco/stb_website/commit/commit_hash) Brief description (2025-09-04)
  - Specific change or feature details
  - Additional bullet points for multiple changes

- [`previous_commit`](https://github.com/nvco/stb_website/commit/previous_commit) Previous entry...
```

**Important**: Always add an empty line between commit entries for better readability.

## Step 5: Commit Changelog
Stage and commit the changelog update:

```bash
!git add CHANGELOG.md
```

Then commit with a simple message and Claude Code attribution.

## Step 6: Final Status
Show the final git status to confirm everything was committed successfully.

---

This automates our standard 3-step commit process: main commit → update changelog → commit changelog.