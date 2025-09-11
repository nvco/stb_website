# Claude Code Slash Commands

This file contains detailed documentation for custom Claude Code slash commands used in the Still Time Beauty website project.

## Overview

Custom slash commands streamline common development tasks specific to this Hugo-based medical aesthetics website project.

## Available Commands

### `/commit-changes`

Automates the complete git commit workflow for the project.

#### Workflow Steps:
1. Shows current git status and changes
2. Stages all changes  
3. Creates descriptive commit with proper formatting
4. Updates CHANGELOG.md with properly categorized entry
5. Commits the changelog
6. Shows final status

#### Changelog Categorization Rules

When updating CHANGELOG.md, the command analyzes commit content and categorizes under the appropriate H3 section:

**`### Added`** - New features, new files, new functionality
- Examples: "Add new component", "Create new agent", "Implement new feature"

**`### Changed`** - Changes to existing functionality, refactoring, improvements  
- Examples: "Update existing component", "Improve performance", "Refactor code", "Replace CDN with self-hosted"

**`### Fixed`** - Bug fixes, corrections, issue resolutions
- Examples: "Fix accessibility issue", "Resolve styling bug", "Correct typo"

**`### Security`** - Security improvements, vulnerability fixes
- Examples: "Enhance security headers", "Fix XSS vulnerability"

**`### Performance`** - Performance optimizations, speed improvements
- Examples: "Optimize font loading", "Reduce bundle size", "Improve loading times"

#### Changelog Format Guidelines

**For commits with multiple changes:**
```markdown
### Added
- [`abc1234`](https://github.com/nvco/stb_website/commit/abc1234) Brief summary of commit (YYYY-MM-DD)
  - Specific change or feature added
  - Another specific change or feature
  - Additional details about the changes
```

**For single changes:**
```markdown
### Changed
- [`abc1234`](https://github.com/nvco/stb_website/commit/abc1234) Brief description of change (YYYY-MM-DD)
```

#### Important Rules:
- **Always add new entries at the TOP** of their respective sections
- **Use empty lines between entries** for readability  
- **Group related changes** under one commit link to reduce clutter
- **Include commit dates** in (YYYY-MM-DD) format
- **Use hierarchical format** to show both summary and details

#### Usage:
Simply type `/commit-changes` to execute the full automated workflow.

#### Benefits:
- **Consistent commit messages** with proper formatting
- **Automated changelog maintenance** with proper categorization  
- **Reduced manual work** for git operations
- **Traceability** with commit links and dates
- **Professional documentation** standards

### `/start-hugo-dev`

Starts Hugo development server with project-specific settings optimized for the Still Time Beauty website.

#### Server Configuration:
- **Includes draft content** - Shows unpublished blog posts and pages
- **Binds to all network interfaces** - Accessible from other devices on network
- **Auto-reloads on changes** - Live reload when files are modified
- **Background execution** - Runs in background using Claude Code's `run_in_background=true` parameter

#### Technical Details:
```bash
# Equivalent command executed:
hugo server --buildDrafts --bind 0.0.0.0
```

#### Development Server Features:
- **Server URL**: http://localhost:1313/
- **Live reload**: Automatic browser refresh on file changes
- **Draft support**: Preview unpublished content during development
- **Network access**: Other devices can access via your IP address
- **Background monitoring**: Use `BashOutput` tool to monitor server status

#### Usage:
Type `/start-hugo-dev` to start the development environment.

#### Benefits:
- **Optimized settings** for Hugo development workflow
- **Consistent setup** across all development sessions  
- **Background execution** allows continued work while server runs
- **Network testing** capability for mobile/tablet preview
- **Draft preview** for content development workflow

## Command Integration with Project Workflow

### Development Cycle Integration:

1. **Start Development**: Use `/start-hugo-dev` to begin work session
2. **Make Changes**: Edit content, layouts, or styling
3. **Preview Changes**: Auto-reload shows changes immediately  
4. **Commit Work**: Use `/commit-changes` when ready to save progress

### Git Workflow Integration:

The `/commit-changes` command integrates with the project's git workflow by:
- **Staging all changes** automatically
- **Following commit message standards** with emoji and Claude Code attribution
- **Maintaining changelog** with proper categorization and formatting
- **Ensuring traceability** with commit links and dates

### Hugo Development Integration:

The `/start-hugo-dev` command optimizes for Hugo's development features:
- **Draft support** for blog content development workflow
- **Live reload** for immediate visual feedback
- **Network binding** for cross-device testing
- **Background execution** for efficient development workflow

## Best Practices

### When to Use Each Command:

**`/commit-changes`**:
- After completing a feature or bug fix
- When reaching a stable checkpoint in development
- Before switching to a different task or branch
- At the end of a development session

**`/start-hugo-dev`**:  
- At the beginning of each development session
- When switching to content/design work requiring preview
- When testing responsive behavior across devices
- When developing new blog posts or pages

### Command Workflow Tips:

1. **Always start with `/start-hugo-dev`** to ensure proper development environment
2. **Use `/commit-changes` regularly** to maintain good git history
3. **Monitor server output** using `BashOutput` tool if needed
4. **Test across devices** using the network-bound development server

## Troubleshooting

### Common Issues:

**Server not starting:**
- Check if Hugo is installed: `hugo version`
- Ensure you're in the project root directory
- Check for port conflicts (default: 1313)

**Changes not reflecting:**
- Verify live reload is working (check browser console)
- Clear browser cache if needed
- Restart development server if necessary

**Commit command issues:**
- Ensure git is configured properly
- Check for unstaged changes that need attention
- Verify CHANGELOG.md is present and properly formatted

### Getting Help:

For issues with these custom commands or Hugo development:
- Check Hugo documentation for development server troubleshooting
- Verify git configuration for commit workflow issues
- Use Claude Code's built-in help: `/help`