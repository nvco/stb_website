---
allowed-tools: Bash(git *:*)
description: Git commit workflow - quick commit by default, or full commit with changelog using --full flag
---

# Automated Git Commit Workflow

This command supports two modes:

## Quick Commit (Default)
When invoked as `/commit-changes`, performs a simple commit workflow without changelog update.

## Full Commit with Changelog
When invoked as `/commit-changes --full`, performs the complete workflow including changelog update.

---

## Quick Commit Process

### Step 1: Analyze Current Changes
Check the current git status and show what changes will be committed:

```bash
!git status
!git diff --stat
```

### Step 2: Stage All Changes
Stage all current changes:

```bash
!git add .
```

### Step 3: Create Main Commit
Analyze the changes and create a descriptive commit message following our project standards. The commit should:

- Have a clear, descriptive title summarizing the changes
- Include bullet points for specific changes if multiple features/fixes

Create the commit using a HEREDOC format for proper formatting.

### Step 4: Final Status
Show the final git status to confirm everything was committed successfully.

---

## Full Commit Process (--full flag only)

**Perform all Quick Commit steps above, then continue with:**

### Step 5: Update CHANGELOG.md
Add an entry to CHANGELOG.md under the appropriate section (Added/Changed/Fixed/etc.) using this format:

```
- [`commit_hash`](https://github.com/nvco/stb_website/commit/commit_hash) Brief description (YYYY-MM-DD)
  - Specific change or feature details
  - Additional bullet points for multiple changes

- [`previous_commit`](https://github.com/nvco/stb_website/commit/previous_commit) Previous entry...
```

**Important**: Always add an empty line between commit entries for better readability.

### Step 6: Commit Changelog
Stage and commit the changelog update:

```bash
!git add CHANGELOG.md
```

Then commit with a simple message and Claude Code attribution.

### Step 7: Final Status
Show the final git status to confirm everything was committed successfully.

---

**Usage:**
- `/commit-changes` - Quick commit only
- `/commit-changes --full` - Complete workflow with changelog update